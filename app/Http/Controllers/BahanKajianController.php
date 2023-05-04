<?php

namespace App\Http\Controllers;

use App\Models\Bahan_Kajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BahanKajianController extends Controller
{
    public function index()
    {
        $bks = Bahan_Kajian::all();
        return view('content.bahan_kajian.bahan_kajian', ['title' => 'Bahan Kajian', 'bks' => $bks]);
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
            'kodeBK' => 'required',
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
        $validator = Validator::make($request->all(), [
            'kodeBK' => 'required',
            'namaBK' => 'required',
            'kategoriBK' => 'required',
            'referensiBK' => 'required',
        ]);


        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
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
