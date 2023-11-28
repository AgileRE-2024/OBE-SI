<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pustaka;
use Illuminate\Support\Facades\Validator;

class PustakaController extends Controller
{
    public function index()
    {
        $pustaka = pustaka::all();

        return view('content.pustaka.pustaka', ['title' => 'Pustaka', 'pustaka' => $pustaka]);
    }

    public function addPustaka()
    {
        return view('content.pustaka.add_pustaka', ['title' => 'Tambah Pustaka']);
    }

    public function storePustaka(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'nama_penulis' => 'required',
            'tahun' => 'required',
            'penerbit' => 'required',
        ]);

        pustaka::create([
            'judul' => $request->judul,
            'nama_penulis' => $request->nama_penulis,
            'tahun' => $request->tahun,
            'penerbit' => $request->penerbit,
        ]);

        return redirect()->route('kurikulum.data.pustaka')->with('success', 'Pustaka berhasil ditambahkan');
    }

    public function edit($pl)
    {
        $pl = pustaka::where('kodePL', $pl)->first();

        return view('content.profil_lulusan.edit_pl', ['title' => 'Edit Profil Lulusan', 'pl' => $pl]);
    }

    public function update($pl, Request $request)
    {
        if ($request->kodePL == $pl) {
            $validator = Validator::make($request->all(), [
                'kodePL' => 'required',
                'deskripsiPL' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'kodePL' => 'required|unique:profil_lulusan,kodePL',
                'deskripsiPL' => 'required',
            ]);
        }
        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (pustaka::where('kodePL', $request->kodePL)->exists() && $request->kodePL != $pl) {
            return redirect()->back()->with('error', 'Kode Profil Lulusan sudah ada');
        }

        $pl = pustaka::where('kodePL', $pl)->first();
        $pl->update([
            'kodePL' => $request->kodePL,
            'deskripsiPL' => $request->deskripsiPL,
        ]);

        $pl->save();

        return redirect()->route('kurikulum.data.pustaka')->with('success', 'Profil Lulusan berhasil diubah');
    }

    public function delete($pl)
    {
        $pl = pustaka::where('kodePL', $pl)->first();
        $pl->delete();

        return redirect()->route('kurikulum.data.pustaka')->with('success', 'Profil Lulusan berhasil dihapus');
    }
}
