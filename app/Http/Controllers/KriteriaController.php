<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\kriteria_penilaian;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriterias = Kriteria_Penilaian::all();

        return view('content.kriteria.kriteria', ['title' => 'Kriteria Penilaian', 'kriterias' => $kriterias]);
    }

    public function addKriteria()
    {
        return view('content.kriteria.add_kriteria', ['title' => 'Tambah Kriteria Penilaian']);
    }

    public function storeKriteria(Request $request)
    {
        $request->validate([
            'nama_kriteria_penilaians' => 'required',
        ]);

        kriteria_penilaian::create([
            'nama_kriteria_penilaians' => $request->nama_kriteria_penilaians,
            'deskripsi_kriteria_penilaians' => $request->deskripsi_kriteria_penilaians,
        ]);

        return redirect()->route('kurikulum.data.kriteria')->with('success', 'Kriteria penilaian berhasil ditambahkan');
    }

    public function edit($kriteria)
    {
        $kriteria = kriteria_penilaian::where('id_kriteria_penilaians', $kriteria)->first();

        return view('content.kriteria.edit_kriteria', ['title' => 'Edit Kriteria Penilaian', 'kriteria' => $kriteria]);
    }

    public function update($kriteria, Request $request)
    {
        $request->validate([
            'nama_kriteria_penilaians' => 'required',
        ]);

        $kriteria = kriteria_penilaian::where('id_kriteria_penilaians', $kriteria)->first();
        $kriteria->update([
            'nama_kriteria_penilaians' => $request->nama_kriteria_penilaians,
            'deskripsi_kriteria_penilaians' => $request->deskripsi_kriteria_penilaians,
        ]);

        $kriteria->save();

        return redirect()->route('kurikulum.data.kriteria')->with('success', 'Kriteria penilaianberhasil diubah');
    }

    public function delete($kriteria)
    {
        $kriteria = kriteria_penilaian::where('id_kriteria_penilaians', $kriteria)->first();
        $kriteria->delete();

        return redirect()->route('kurikulum.data.kriteria')->with('success', 'Kriteria penilaian berhasil dihapus');
    }
}