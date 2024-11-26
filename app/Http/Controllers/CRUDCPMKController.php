<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CPMKExport;
use App\Models\CPMK;
use App\Models\CPL_Prodi;
use App\Models\SubCPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Learning_Outcomes;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use Dompdf\Dompdf;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class CRUDCPMKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cpmks = CPMK::with("CPL")->get(); // Ensure CPMK has a relationship with LO
        $cplWithIssues = []; // Array to collect LOs with missing level validation

        // Loop through CPMKs grouped by LO
        foreach ($cpmks->groupBy("kodeCPL") as $cplId => $cpmkGroup) {
            $cpl = $cpmkGroup->first()->CPL; // Get the associated LO
            if ($cpl) {
                $hasMatchingLevel = $cpmkGroup->contains(
                    fn($cpmk) => $cpmk->levelCPMK == $cpl->levelCPL
                );
                if (!$hasMatchingLevel) {
                    $cplWithIssues[] = $cpl->kodeCPL; // Add LO name with issues
                }
            }
        }

        return view("content.cpmk.cpmk", [
            "title" => "CPMK",
            "cpmks" => $cpmks,
            "cplWithIssues" => $cplWithIssues, // Pass the issues to the view
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch levels and their verbs from the database
        $los = Learning_Outcomes::with("verbs")->get();

        // Prepare verbs for the frontend
        $verbsPerLevel = $los->mapWithKeys(function ($lo) {
            return [$lo->id => $lo->verbs->pluck("kata_kerja")->toArray()];
        });

        $cplps = CPL_Prodi::all();
        return view("content.cpmk.add_cpmk", [
            "title" => "Tambah CPMK",
            "cplps" => $cplps,
            "los" => $los,
            "verbsPerLevel" => $verbsPerLevel,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "kodeCPMK" => "required|unique:cpmk,kodeCPMK",
            "levelCPMK" => [
                "required",
                function ($attribute, $value, $fail) use ($request) {
                    $cpl = CPL_Prodi::where(
                        "kodeCPL",
                        $request->kodeCPL
                    )->first();
                    if ($value > $cpl->levelCPL) {
                        $fail(
                            "Level CPMK must be the same or lower than Level CPL."
                        );
                    }
                },
            ],
            "deskripsiCPMK" => "required",
            "kodeCPL" => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        CPMK::create([
            "kodeCPMK" => $request->kodeCPMK,
            "levelCPMK" => $request->levelCPMK,
            "deskripsiCPMK" => $request->deskripsiCPMK,
            "kodeCPL" => $request->kodeCPL,
        ]);

        return redirect()
            ->route("kurikulum.data.cpmk")
            ->with("success", "CPMK berhasil dibuat.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cpmk)
    {
        // Fetch levels and their verbs from the database
        $los = Learning_Outcomes::with("verbs")->get();

        // Prepare verbs for the frontend
        $verbsPerLevel = $los->mapWithKeys(function ($lo) {
            return [$lo->id => $lo->verbs->pluck("kata_kerja")->toArray()];
        });

        $old_cpmk = CPMK::where("kodeCPMK", $cpmk)->first();
        $cplps = CPL_Prodi::all();
        return view("content.cpmk.edit_cpmk", [
            "title" => "Edit CPMK",
            "cplps" => $cplps,
            "old_cpmk" => $old_cpmk,
            "los" => $los,
            "verbsPerLevel" => $verbsPerLevel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $cpmk)
    {
        if ($cpmk == $request->kodeCPMK) {
            $validator = Validator::make($request->all(), [
                "levelCPMK" => [
                    "required",
                    function ($attribute, $value, $fail) use ($request) {
                        $cpl = CPL_Prodi::where(
                            "kodeCPL",
                            $request->kodeCPL
                        )->first();
                        if ($value > $cpl->levelCPL) {
                            $fail(
                                "Level CPMK must be the same or lower than Level CPL."
                            );
                        }
                    },
                ],
                "deskripsiCPMK" => "required",
                "kodeCPL" => "required",
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                "kodeCPMK" => "required|unique:cpmk,kodeCPMK",
                "levelCPMK" => [
                    "required",
                    function ($attribute, $value, $fail) use ($request) {
                        $cpl = CPL_Prodi::where(
                            "kodeCPL",
                            $request->kodeCPL
                        )->first();
                        if ($value > $cpl->levelCPL) {
                            $fail(
                                "Level CPMK must be the same or lower than Level CPL."
                            );
                        }
                    },
                ],
                "deskripsiCPMK" => "required",
                "kodeCPL" => "required",
            ]);
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($cpmk == $request->kodeCPMK) {
            CPMK::where("kodeCPMK", $cpmk)
                ->first()
                ->update([
                    "deskripsiCPMK" => $request->deskripsiCPMK,
                    "levelCPMK" => $request->levelCPMK,
                    "kodeCPL" => $request->kodeCPL,
                ]);
        } else {
            CPMK::where("kodeCPMK", $cpmk)
                ->first()
                ->update([
                    "kodeCPMK" => $request->kodeCPMK,
                    "deskripsiCPMK" => $request->deskripsiCPMK,
                    "levelCPMK" => $request->levelCPMK,
                    "kodeCPL" => $request->kodeCPL,
                ]);
        }

        return redirect()
            ->route("kurikulum.data.cpmk")
            ->with("success", "CPMK berhasil diedit.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodeCPMK)
    {
        if (Detail_MK_CPMK::where("kodeCPMK", $kodeCPMK)->exists()) {
            return redirect()
                ->route("kurikulum.data.cpmk")
                ->with("error", "CPMK masih berelasi dengan MK.");
        } elseif (SubCPMK::where("kodeCPMK", $kodeCPMK)->exists()) {
            return redirect()
                ->route("kurikulum.data.cpmk")
                ->with("error", "CPMK masih berelasi dengan SubCPMK.");
        } else {
            $cpmk = CPMK::where("kodeCPMK", $kodeCPMK)->first()->delete();
            return redirect()
                ->route("kurikulum.data.cpmk")
                ->with("success", "CPMK berhasil dihapus.");
        }
    }

    public function export($type)
    {
        date_default_timezone_set("Asia/Jakarta");

        $view = view("content.cpmk.tableToEkspor", [
            "title" => "Tabel CPMK",
            "cpmk" => CPMK::all(),
        ]);

        $date_time = date("Y_m_d_H_i_s");

        if ($type === "pdf") {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper("A4", "landscape");

            $dompdf->render();

            $filename = "Tabel CPMK_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                "Content-Type" => "application/pdf",
                "Content-Disposition" => "inline; filename=" . $filename,
            ]);
        } else {
            $filename = "Tabel CPMK_" . $date_time . ".xlsx";
            return Excel::download(new CPMKExport(), $filename);
        }
    }
}
