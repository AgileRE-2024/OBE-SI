<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bentuk;

class BentukController extends Controller
{
    public function addBentuk()
    {
        return view('content.metode.add_bentuk', ['title' => 'Tambah Bentuk Pembelajaran']);
    }

    public function storeBentuk(Request $request)
    {
        $request->validate([
            'nama_bentuk' => 'required',
        ]);

        Bentuk::create([
            'nama_bentuk' => $request->nama_bentuk,
            'deskripsi_bentuk' => $request->deskripsi_bentuk,
        ]);

        return redirect()->route('kurikulum.data.metode')->with('success', 'Bentuk pembelajaran berhasil ditambahkan');
    }

    public function edit($bentuk)
    {
        $bentuk = Bentuk::where('id_bentuk', $bentuk)->first();

        return view('content.metode.edit_bentuk', ['title' => 'Edit Bentuk Pembelajaran', 'bentuk' => $bentuk]);
    }

    public function update($bentuk, Request $request)
    {
        $request->validate([
            'nama_bentuk' => 'required',
        ]);

        $bentuk = Bentuk::where('id_bentuk', $bentuk)->first();
        $bentuk->update([
            'nama_bentuk' => $request->nama_bentuk,
            'deskripsi_bentuk' => $request->deskripsi_bentuk,
        ]);

        $bentuk->save();

        return redirect()->route('kurikulum.data.metode')->with('success', 'Bentuk pembelajaran berhasil diubah');
    }

    public function delete($bentuk)
    {
        $bentuk = Bentuk::where('id_bentuk', $bentuk)->first();
        $bentuk->delete();

        return redirect()->route('kurikulum.data.metode')->with('success', 'Bentuk pembelajaran berhasil dihapus');
    }
    
}