<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Mata_Kuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mks = Mata_Kuliah::all();
        return view('content.mata_kuliah.mata_kuliah', ['title' => 'Mata Kuliah', 'mks' => $mks]);
    }

    public function addMataKuliah()
    {
        $mks = Mata_Kuliah::all();

        return view('content.mata_kuliah.add_mata_kuliah', ['title' => 'Tambah Mata Kuliah', 'mks' => $mks]);
    }

    public function editMataKuliah($mk)
    {
        $mk = Mata_Kuliah::where('kodeMK', $mk)->first();
        $mks = Mata_Kuliah::all()->except($mk->kodeMK);

        return view('content.mata_kuliah.edit_mata_kuliah', ['title' => 'Mata Kuliah', 'mk' => $mk, 'mks' => $mks]);
    }

    public function storeMataKuliah(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kodeMK' => 'required',
            'namaMK' => 'required',
            'jenisMK' => 'required',
            'kategoriMK' => 'required',
            'sks' => 'required',
            'semester' => 'required',
            'deskripsi' => 'required',

        ]);

        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->mat_kodeMK == null) {
            $mat_kodeMK = null;
        } else {
            $mat_kodeMK = $request->mat_kodeMK;
        }

        if ($request->prasyarat_tambahan == null) {
            $prasyarat_tambahan = null;
        } else {
            $prasyarat_tambahan = $request->prasyarat_tambahan;
        }

        Mata_Kuliah::create([
            'kodeMK' => $request->kodeMK,
            'mat_kodeMK' => $mat_kodeMK,
            'namaMK' => $request->namaMK,
            'jenisMK' => (int)$request->jenisMK,
            'kategoriMK' => (int)$request->kategoriMK,
            'sks' => (int)$request->sks,
            'semester' => (int)$request->semester,
            'pustaka' => 'none',
            'deskripsiMK' => $request->deskripsi,
            'prasyaratTambahan' => $prasyarat_tambahan,
        ]);


        return redirect()->route('kurikulum.data.mata_kuliah')->with('success', 'Bahan Kuliah berhasil ditambahkan');
    }

    public function updateMataKuliah(Request $request, $mk)
    {
        $validator = Validator::make($request->all(), [
            'kodeMK' => 'required',
            'namaMK' => 'required',
            'jenisMK' => 'required',
            'kategoriMK' => 'required',
            'sks' => 'required',
            'semester' => 'required',
            'deskripsi' => 'required',

        ]);

        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->mat_kodeMK == null) {
            $mat_kodeMK = null;
        } else {
            $mat_kodeMK = $request->mat_kodeMK;
        }

        if ($request->prasyarat_tambahan == null) {
            $prasyarat_tambahan = null;
        } else {
            $prasyarat_tambahan = $request->prasyarat_tambahan;
        }

        $mk = Mata_Kuliah::where('kodeMK', $mk)->first();
        $mk->update([
            'kodeMK' => $request->kodeMK,
            'mat_kodeMK' => $mat_kodeMK,
            'namaMK' => $request->namaMK,
            'jenisMK' => (int)$request->jenisMK,
            'kategoriMK' => (int)$request->kategoriMK,
            'sks' => (int)$request->sks,
            'semester' => (int)$request->semester,
            'pustaka' => 'none',
            'deskripsiMK' => $request->deskripsi,
            'prasyaratTambahan' => $prasyarat_tambahan,
        ]);
        $mk->save();

        return redirect()->route('kurikulum.data.mata_kuliah')->with('success', 'Bahan Kuliah berhasil diubah');
    }

    public function deleteMataKuliah($mk)
    {
        if (Mata_Kuliah::where('mat_kodeMK', $mk)->exists()) {
            return redirect()->route('kurikulum.data.mata_kuliah')->with('error', 'Bahan Kuliah gagal dihapus. Bahan Kuliah ini digunakan oleh bahan kuliah lain');
        } else {
            $mk = Mata_Kuliah::where('kodeMK', $mk)->first();
            $mk->delete();

            return redirect()->route('kurikulum.data.mata_kuliah')->with('success', 'Bahan Kuliah berhasil dihapus');
        }
    }
}
