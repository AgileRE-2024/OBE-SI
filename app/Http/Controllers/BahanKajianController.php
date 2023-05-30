<?php

namespace App\Http\Controllers;

use App\Exports\BahanKajianExport;
use Dompdf\Dompdf;
use App\Models\Bahan_Kajian;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class BahanKajianController extends Controller
{
    public function index()
    {
        $bks = Bahan_Kajian::all();
        return view('content.bahan_kajian.bahan_kajian', ['title' => 'Bahan Kajian', 'bks' => $bks]);
    }

    public function export($type)
    {
        date_default_timezone_set('Asia/Jakarta');

        $view = view('content.bahan_kajian.tableToEkspor', [
            'title' => 'Tabel Bahan Kajian',
            'bks' => Bahan_Kajian::all(),
        ]);

        $date_time = date('Y_m_d_H_i_s');

        if ($type === 'pdf') {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'landscape');

            $dompdf->render();

            $filename = "Tabel Bahan Kajian_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . $filename
            ]);
        } else {
            $filename = "Tabel Bahan Kajian_" . $date_time . '.xlsx';
            return Excel::download(new BahanKajianExport(), $filename);
        }
    }

    public function editBahanKajian($bk)
    {
        $bk = Bahan_Kajian::where('kodeBK', $bk)->first();
        return view('content.bahan_kajian.edit_bahan_kajian', ['title' => 'Bahan Kajian', 'bk' => $bk]);
    }

    public function addBahanKajian()
    {
        return view('content.bahan_kajian.add_bahan_kajian', ['title' => 'Tambah Bahan Kajian']);
    }

    public function storeBahanKajian(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kodeBK' => 'required|unique:bahan_kajian,kodeBK',
            'namaBK' => 'required',
            'kategoriBK' => 'required',
            'referensiBK' => 'required',
        ]);

        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Bahan_Kajian::create([
            'kodeBK' => $request->kodeBK,
            'namaBK' => $request->namaBK,
            'kategoriBK' => (int)$request->kategoriBK,
            'referensiBK' => $request->referensiBK,
        ]);

        return redirect()->route('kurikulum.data.bahan_kajian')->with('success', 'Bahan Kuliah berhasil ditambahkan');
    }

    public function updateBahanKajian(Request $request, $bk)
    {
        if ($request->kodeBK != $bk) {
            $validator = Validator::make($request->all(), [
                'kodeBK' => 'required|unique:bahan_kajian,kodeBK',
                'namaBK' => 'required',
                'kategoriBK' => 'required',
                'referensiBK' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'kodeBK' => 'required',
                'namaBK' => 'required',
                'kategoriBK' => 'required',
                'referensiBK' => 'required',
            ]);
        }
        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Bahan_Kajian::where('kodeBK', $request->kodeBK)->exists() && $request->kodeBK != $bk) {
            return redirect()->back()->with('error', 'Kode Bahan Kajian sudah ada');
        }

        $bk = Bahan_Kajian::where('kodeBK', $bk)->first();
        $bk->update([
            'kodeBK' => $request->kodeBK,
            'namaBK' => $request->namaBK,
            'kategoriBK' => (int)$request->kategoriBK,
            'referensiBK' => $request->referensiBK,
        ]);
        $bk->save();

        return redirect()->route('kurikulum.data.bahan_kajian')->with('success', 'Bahan Kuliah berhasil ditambahkan');
    }

    public function deleteBahanKajian($bk)
    {
        $bk = Bahan_Kajian::where('kodeBK', $bk)->first();
        $bk->delete();
        return redirect()->route('kurikulum.data.bahan_kajian')->with('success', 'Bahan Kuliah berhasil dihapus');
    }
}
