<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil_Lulusan;

class ProfilLulusanController extends Controller
{
    public function index()
    {
        $pls = Profil_Lulusan::all();

        return view('content.profil_lulusan.profil_lulusan', ['title' => 'Profil Lulusan', 'pls' => $pls]);
    }

    public function addProfilLulusan()
    {
        return view('content.profil_lulusan.add_pl', ['title' => 'Tambah Profil Lulusan']);
    }

    public function storeProfilLulusan(Request $request)
    {
        $request->validate([
            'kodePL' => 'required',
            'deskripsiPL' => 'required',
        ]);

        Profil_Lulusan::create([
            'kodePL' => $request->kodePL,
            'deskripsiPL' => $request->deskripsiPL,
        ]);

        return redirect()->route('kurikulum.data.profil_lulusan')->with('success', 'Profil Lulusan berhasil ditambahkan');
    }
}
