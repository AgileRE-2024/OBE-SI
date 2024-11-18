<?php

namespace App\Http\Controllers;

use App\Exports\CPLProdiExport;
use Dompdf\Dompdf;
use App\Models\CPL_Prodi;
use App\Models\Detail_CPLProdi_BK;
use App\Models\Detail_PL_CPLProdi;
use App\Models\Detail_SN_CPLProdi;
use App\Models\CPMK;
use App\Models\Learning_Outcomes;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class CPLProdiController extends Controller
{
    public function index()
    {
        $cpls = CPL_Prodi::all();
        return view("content.cpl_prodi.cpl_prodi", [
            "title" => "CPL Prodi",
            "cpls" => $cpls,
        ]);
    }

    public function export($type)
    {
        date_default_timezone_set("Asia/Jakarta");

        $view = view("content.cpl_prodi.tableToEkspor", [
            "title" => "Tabel Capaian Pembelajaran Program Studi",
            "cpls" => CPL_Prodi::all(),
        ]);

        $date_time = date("Y_m_d_H_i_s");

        if ($type === "pdf") {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper("A4", "landscape");

            $dompdf->render();

            $filename = "Tabel CPL Prodi_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                "Content-Type" => "application/pdf",
                "Content-Disposition" => "inline; filename=" . $filename,
            ]);
        } else {
            $filename =
                "Tabel Capaian Pembelajaran Program Studi_" .
                $date_time .
                ".xlsx";
            return Excel::download(new CPLProdiExport(), $filename);
        }
    }

    public function edit($cpl)
    {
        // Fetch levels and their verbs from the database
        $learningOutcomes = Learning_Outcomes::all();

        // Prepare the levels and verbs for the frontend
        $levels = $learningOutcomes->pluck('level_lo')->unique();

        $cpl = CPL_Prodi::where("kodeCPL", $cpl)->first();
        return view("content.cpl_prodi.edit_cpl_prodi", [
            "title" => "CPL Prodi",
            "cpl" => $cpl,
            "levels" => $levels,
        ]);
    }

    public function addCPLProdi()
    {
        // Fetch levels and their verbs from the database
        $learningOutcomes = Learning_Outcomes::all();

        // Prepare the levels and verbs for the frontend
        $levels = $learningOutcomes->pluck('level_lo')->unique();
        $verbsByLevel = $learningOutcomes->groupBy('level_lo')->map(function ($items) {
            return $items->pluck('kata_kerja')->toArray();
        });

        return view("content.cpl_prodi.add_cpl_prodi", [
            "title" => "Tambah CPL Prodi",
            "levels" => $levels,
            "verbsByLevel" => $verbsByLevel,
        ]);
    }


   public function storeCPLProdi(Request $request)
    {
        $request->validate([
            "kodeCPL" => "required|unique:cpl_prodi,kodeCPL",
            "deskripsiCPL" => "required",
            "referensiCPL" => "required",
            "levelCPL" => "required", // Validasi untuk levelCPL
        ]);

        CPL_Prodi::create([
            "kodeCPL" => $request->kodeCPL,
            "deskripsiCPL" => $request->deskripsiCPL,
            "referensiCPL" => $request->referensiCPL,
            "levelCPL" => $request->levelCPL, // Menyimpan levelCPL yang diterima
        ]);

        return redirect()
            ->route("kurikulum.data.cpl_prodi")
            ->with("success", "CPL Prodi berhasil ditambahkan");
    }


    public function updateCPLProdi(Request $request, $cpl)
    {
        if ($request->kodeCPL == $cpl) {
            $validator = Validator::make($request->all(), [
                "kodeCPL" => "required",
                "deskripsiCPL" => "required",
                "referensiCPL" => "required",
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                "kodeCPL" => "required|unique:cpl_prodi,kodeCPL",
                "deskripsiCPL" => "required",
                "referensiCPL" => "required",
            ]);
        }

        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (
            CPL_Prodi::where("kodeCPL", $request->kodeCPL)->exists() &&
            $request->kodeCPL != $cpl
        ) {
            return redirect()->back()->with("error", "Kode CPL sudah ada");
        }

        $cpl = CPL_Prodi::where("kodeCPL", $cpl)->first();
        $cpl->update([
            "kodeCPL" => $request->kodeCPL,
            "deskripsiCPL" => $request->deskripsiCPL,
            "referensiCPL" => $request->referensiCPL,
        ]);
        $cpl->save();

        return redirect()
            ->route("kurikulum.data.cpl_prodi")
            ->with("success", "CPL Prodi berhasil diubah");
    }

    public function deleteCPLProdi($cpl)
    {
        if (CPMK::where("kodeCPL", $cpl)->exists()) {
            return redirect()
                ->route("kurikulum.data.cpl_prodi")
                ->with("error", "CPL masih berelasi dengan CPMK.");
        } elseif (Detail_PL_CPLProdi::where("kodeCPL", $cpl)->exists()) {
            return redirect()
                ->route("kurikulum.data.cpl_prodi")
                ->with("error", "CPL masih berelasi dengan Profil Lulusan.");
        } elseif (Detail_SN_CPLProdi::where("kodeCPL", $cpl)->exists()) {
            return redirect()
                ->route("kurikulum.data.cpl_prodi")
                ->with("error", "CPL masih berelasi dengan SN.");
        } elseif (Detail_CPLProdi_BK::where("kodeCPL", $cpl)->exists()) {
            return redirect()
                ->route("kurikulum.data.cpl_prodi")
                ->with("error", "CPL masih berelasi dengan BK.");
        } else {
            $cpl = CPL_Prodi::where("kodeCPL", $cpl)->first()->delete();
            return redirect()
                ->route("kurikulum.data.cpl_prodi")
                ->with("success", "CPL Prodi berhasil dihapus");
        }
    }
}
