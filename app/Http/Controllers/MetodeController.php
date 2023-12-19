<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Bentuk;
use App\Models\Media;
use App\Models\Metode;

class MetodeController extends Controller
{
    public function index()
    {
        $metodes = Metode::all();
        $bentuks = Bentuk::all();
        $medias = Media::all();

        return view('content.metode.metode', ['title' => 'Metode Pembelajaran', 'metodes' => $metodes, 'medias' => $medias, 'bentuks' => $bentuks]);
    }

    public function addMetode()
    {
        return view('content.metode.add_metode', ['title' => 'Tambah Metode Pembelajaran']);
    }

    public function storeMetode(Request $request)
    {
        $request->validate([
            'nama_metode' => 'required',
        ]);

        Metode::create([
            'nama_metode' => $request->nama_metode,
            'deskripsi_metode' => $request->deskripsi_metode,
        ]);

        return redirect()->route('kurikulum.data.metode')->with('success', 'Metode pembelajaran berhasil ditambahkan');
    }

    public function edit($metode)
    {
        $metode = Metode::where('id_metode', $metode)->first();

        return view('content.metode.edit_metode', ['title' => 'Edit Metode Pembelajaran', 'metode' => $metode]);
    }

    public function update($metode, Request $request)
    {
        $request->validate([
            'nama_metode' => 'required',
        ]);

        $metode = Metode::where('id_metode', $metode)->first();
        $metode->update([
            'nama_metode' => $request->nama_metode,
            'deskripsi_metode' => $request->deskripsi_metode,
        ]);

        $metode->save();

        return redirect()->route('kurikulum.data.metode')->with('success', 'Metode pembelajaran berhasil diubah');
    }

    public function delete($metode)
    {
        $metode = Metode::where('id_metode', $metode)->first();
        $metode->delete();

        return redirect()->route('kurikulum.data.metode')->with('success', 'Metode pembelajaran berhasil dihapus');
    }
    
}