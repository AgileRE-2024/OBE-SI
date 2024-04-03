<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teknik_Penilaian_RPS;

class TeknikPenilaianRPSController extends Controller
{
    public function index()
    {
        $tekniks = Teknik_Penilaian_RPS::all();

        return view('content.teknik.teknik', ['title' => 'teknik Penilaian', 'tekniks' => $tekniks]);
    }

    public function addteknik()
    {
        return view('content.teknik.add_teknik', ['title' => 'Tambah teknik Penilaian']);
    }

    public function storeteknik(Request $request)
    {
        $request->validate([
            'nama_teknik_penilaians' => 'required',
        ]);

        Teknik_penilaian_RPS::create([
            'nama_teknik_penilaians' => $request->nama_teknik_penilaians,
            'deskripsi_teknik_penilaians' => $request->deskripsi_teknik_penilaians,
        ]);

        return redirect()->route('kurikulum.data.teknik')->with('success', 'teknik penilaian berhasil ditambahkan');
    }

    public function edit($teknik)
    {
        $teknik = Teknik_penilaian_RPS::where('id_teknik_penilaians', $teknik)->first();

        return view('content.teknik.edit_teknik', ['title' => 'Edit teknik Penilaian', 'teknik' => $teknik]);
    }

    public function update($teknik, Request $request)
    {
        $request->validate([
            'nama_teknik_penilaians' => 'required',
        ]);

        $teknik = Teknik_penilaian_RPS::where('id_teknik_penilaians', $teknik)->first();
        $teknik->update([
            'nama_teknik_penilaians' => $request->nama_teknik_penilaians,
            'deskripsi_teknik_penilaians' => $request->deskripsi_teknik_penilaians,
        ]);

        $teknik->save();

        return redirect()->route('kurikulum.data.teknik')->with('success', 'teknik penilaianberhasil diubah');
    }

    public function delete($teknik)
    {
        $teknik = Teknik_penilaian_RPS::where('id_teknik_penilaians', $teknik)->first();
        $teknik->delete();

        return redirect()->route('kurikulum.data.teknik')->with('success', 'teknik penilaian berhasil dihapus');
    }
}
