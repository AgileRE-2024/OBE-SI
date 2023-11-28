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

    public function addProfilLulusan()
    {
        return view('content.profil_lulusan.add_pl', ['title' => 'Tambah Profil Lulusan']);
    }

    public function storeProfilLulusan(Request $request)
    {
        $request->validate([
            'kodePL' => 'required|unique:profil_lulusan,kodePL',
            'deskripsiPL' => 'required',
        ]);

        pustaka::create([
            'kodePL' => $request->kodePL,
            'deskripsiPL' => $request->deskripsiPL,
        ]);

        return redirect()->route('kurikulum.data.profil_lulusan')->with('success', 'Profil Lulusan berhasil ditambahkan');
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
