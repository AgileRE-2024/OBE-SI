<?php

namespace App\Http\Controllers;

use App\Models\Instrumen_Penilaian;
use Illuminate\Http\Request;
use App\Models\Teknik_Penilaian_RPS;
use Illuminate\Validation\Rule;

class TeknikPenilaianRPSController extends Controller
{
    public function index()
    {
        $tekniks = Teknik_Penilaian_RPS::all();
        $instrumens = Instrumen_Penilaian::all();

        return view('content.teknik_penilaian_rps.index', ['title' => 'Teknik Penilaian', 'tekniks' => $tekniks, 'instrumens' => $instrumens]);
    }

    public function addTeknik()
    {
        return view('content.teknik_penilaian_rps.add_teknik_penilaian_rps', ['title' => 'Tambah Teknik Penilaian']);
    }

    public function storeTeknik(Request $request)
    {
        $request->validate([
            'nama_teknik_penilaian' => 'required|unique:teknik_penilaian_rps,nama_teknik_penilaian'
        ]);
        
        Teknik_penilaian_RPS::create([
            'nama_teknik_penilaian' => $request->nama_teknik_penilaian,
            'deskripsi_teknik_penilaian' => $request->deskripsi_teknik_penilaian,
        ]);

        return redirect()->route('kurikulum.data.teknik_penilaian')->with('success', 'Teknik penilaian berhasil ditambahkan');
    }

    public function edit($id_teknik)
    {
        $teknik = Teknik_penilaian_RPS::where('id_teknik_penilaian', $id_teknik)->first();

        return view('content.teknik_penilaian_rps.edit_teknik_penilaian_rps', ['title' => 'Edit Teknik Penilaian', 'teknik' => $teknik]);
    }

    public function update($teknik, Request $request)
    {
        $request->validate([
            'nama_teknik_penilaian' => 'required'
        ]);

        $teknik = Teknik_penilaian_RPS::where('id_teknik_penilaian', $teknik)->first();
        $teknik->update([
            'nama_teknik_penilaian' => $request->nama_teknik_penilaian,
            'deskripsi_teknik_penilaian' => $request->deskripsi_teknik_penilaian,
        ]);

        $teknik->save();

        return redirect()->route('kurikulum.data.teknik_penilaian')->with('success', 'Teknik penilaian berhasil diubah');
    }

    public function delete($teknik)
    {
        $teknik = Teknik_penilaian_RPS::where('id_teknik_penilaian', $teknik)->first();
        $teknik->delete();

        return redirect()->route('kurikulum.data.teknik_penilaian')->with('success', 'Teknik penilaian berhasil dihapus');
    }
}
