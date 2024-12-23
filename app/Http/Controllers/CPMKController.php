<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CPL_Prodi;
use App\Models\CPMK;
use App\Models\Mata_Kuliah;
use App\Models\Detail_MK_CPMK;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PemetaanCplCpmkMkExport;
use App\Exports\MatrixCplCpmKmk;

class CPMKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function matrix()
    {
        $cpl = Cpl_Prodi::get();
        $mk = Mata_Kuliah::get();
        $cpmk = CPMK::get();
        return view("content.pemetaan_cpl_cpmk_mk.matriks", [
            "title" => "Matriks Pemetaan CPL CPMK",
            "cpl" => $cpl,
            "mk" => $mk,
            "cpmk" => $cpmk,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cpl = Cpl_Prodi::get();
        $mk = Mata_Kuliah::get();
        return view("content.pemetaan_cpl_cpmk_mk.index", [
            "title" => "Pemetaan CPL CPMK",
            "cpl" => $cpl,
            "mk" => $mk,
        ]);
    }

    public function cetakpdf()
    {
        $cpl = Cpl_Prodi::get();
        $mk = Mata_Kuliah::get();

        $pdf = App::make("dompdf.wrapper");
        $pdf->loadView("content.pemetaan_cpl_cpmk_mk.cetakcpmk", [
            "title" => "Pemetaan CPL CPMK",
            "cpl" => $cpl,
            "mk" => $mk,
        ]);

        return $pdf->stream();
    }

    public function matrixcetakpdf()
    {
        $cpl = Cpl_Prodi::get();
        $mk = Mata_Kuliah::get();
        $cpmk = CPMK::get();
        $pdf = App::make("dompdf.wrapper");
        $pdf->setPaper("A3", "landscape");
        $pdf->loadView("content.pemetaan_cpl_cpmk_mk.cetakcpmkmatriks", [
            "title" => "Matriks Pemetaan CPL CPMK",
            "cpl" => $cpl,
            "mk" => $mk,
            "cpmk" => $cpmk,
        ]);
        return $pdf->stream();
    }

    public function exportExcel()
    {
        $cplData = Cpl_Prodi::get();
        return Excel::download(
            new PemetaanCplCpmkMkExport($cplData),
            "PemetaanCplCpmkMkExport.xlsx"
        );
    }

    public function exportExcelmatrix()
    {
        $mk = Mata_Kuliah::get(); // Fetch the $mk data from your database or any other source
        $cpl = Cpl_Prodi::get(); // Fetch the $cpl data from your database or any other source
        return Excel::download(
            new MatrixCplCpmKmk($mk, $cpl),
            "matrixcplcpmkmk.xlsx"
        );
    }

    public function create($cpl)
    {
        $lastCpmk = CPMK::orderBy("kodeCPMK", "desc")->first();

        if ($lastCpmk) {
            $lastId = intval(substr($lastCpmk->kodeCPMK, 4));
            $nextId = "CPMK" . str_pad($lastId + 1, 3, "0", STR_PAD_LEFT);
        } else {
            $nextId = "CPMK001";
        }

        $cpl = Cpl_Prodi::where("kodeCPL", $cpl)->first();
        $listedCpmk = CPMK::where("kodeCPL", $cpl->kodeCPL)->get();

        // return view('cpmk.create', [
        return view("content.pemetaan_cpl_cpmk_mk.add-CPMK", [
            "title" => "Menambahkan CPMK",
            "cpl" => $cpl,
            "nextID" => $nextId,
            "listedCpmk" => $listedCpmk,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            // 'deskripsi' => 'required',
            // 'kode' => 'required',
            "kodeCPL" => "required",
            "deskripsiCPMK" => "required",
            "kodeCPMK" => "required",
        ];

        Validator::make(
            $request->all(),
            $rules,
            $messages = $this->msg
        )->validate();

        $deskripsi = str_getcsv($request->deskripsi, ",");
        $kode = str_getcsv($request->kode, ",");
        // $count = 0;

        for ($i = 0; $i < sizeof($deskripsi); $i++) {
            CPMK::create([
                "kodeCPMK" => $kode[$i],
                "deskripsiCPMK" => $deskripsi[$i],
                "kodeCPL" => $request->kodeCPL,
            ]);
        }

        // foreach ($deskripsi as $deskripsiCPMK) {
        //     $lastCpmk = CPMK::orderBy('kodeCPMK', 'desc')->first();

        //     if ($lastCpmk) {
        //         $lastId = intval(substr($lastCpmk->kodeCPMK, 4));
        //         $nextId = 'CPMK'.str_pad($lastId + 1, 3, '0', STR_PAD_LEFT);
        //     } else {
        //         $nextId = 'CPMK001';
        //     }

        //     CPMK::create([
        //         'kodeCPMK' => $nextId,
        //         'deskripsiCPMK' => $deskripsiCPMK,
        //         'kodeCPL' => $request->kodeCPL
        //     ]);

        //     // $count++;
        // }

        // Cpmk::insert($data);

        return redirect()
            ->route("kurikulum.pemetaan.cpl_cpmk_mk.index")
            ->with("success", "CPMK berhasil dibuat.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $cpmk = CPMK::find($id);

        // return view('cpmk.show', ['cpmk' => $cpmk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CPMK $cpmk)
    {
        $mk = Mata_Kuliah::get();
        return view("content.pemetaan_cpl_cpmk_mk.edit-CPMK")->with([
            "title" => "Mengubah CPMK dan Memetakannya dengan Mata Kuliah",
            "cpmk" => $cpmk,
            "mata_kuliah" => $mk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CPMK $cpmk)
    {
        $rules = [
            "deskripsiCPMK" => "required",
        ];

        Validator::make(
            $request->all(),
            $rules,
            $messages = $this->msg
        )->validate();

        $cpmk->update([
            "deskripsiCPMK" => $request->deskripsiCPMK,
        ]);

        // hapus dulu semua relasi cpmk x sama semua mk (kalo ada)
        $del = Detail_MK_CPMK::where("kodeCPMK", $cpmk->kodeCPMK)->get();
        foreach ($del as $key) {
            $key->delete();
        }

        $mata_kuliah = Mata_Kuliah::get();
        foreach ($request->mk as $mk_req) {
            Detail_MK_CPMK::create([
                "kodeMK" => $mk_req,
                "kodeCPMK" => $cpmk->kodeCPMK,
            ]);
        }

        return redirect()
            ->route("kurikulum.pemetaan.cpl_cpmk_mk.index")
            ->with("success", "CPMK berhasil diubah.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cpmk = CPMK::findOrFail($id);
        $cpmk->delete();
        return redirect()
            ->route("kurikulum.pemetaan.cpl_cpmk_mk.index")
            ->with("success", "CPMK berhasil dihapus.");
    }
}
