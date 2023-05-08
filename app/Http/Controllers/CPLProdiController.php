<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CPL_Prodi;

class CPLProdiController extends Controller
{
    public function index()
    {
        $cpls = CPL_Prodi::all();
        return view('content.cpl_prodi.cpl_prodi', ['title' => 'CPL Prodi', 'cpls' => $cpls]);
    }

    public function edit($cpl)
    {
        $cpl = CPL_Prodi::where('kodeCPL', $cpl)->first();
        return view('content.cpl_prodi.edit_cpl_prodi', ['title' => 'CPL Prodi', 'cpl' => $cpl]);
    }

    public function addCPLProdi()
    {
        return view('content.cpl_prodi.add_cpl_prodi', ['title' => 'Tambah CPL Prodi']);
    }

    public function storeCPLProdi(Request $request)
    {
        $request->validate([
            'kodeCPL' => 'required',
            'deskripsiCPL' => 'required',
            'referensiCPL' => 'required',
        ]);

        CPL_Prodi::create([
            'kodeCPL' => $request->kodeCPL,
            'deskripsiCPL' => $request->deskripsiCPL,
            'referensiCPL' => $request->referensiCPL,
        ]);

        return redirect()->route('kurikulum.data.cpl_prodi')->with('success', 'CPL Prodi berhasil ditambahkan');
    }

    public function updateCPLProdi(Request $request, $cpl)
    {
        $request->validate([
            'kodeCPL' => 'required',
            'deskripsiCPL' => 'required',
            'referensiCPL' => 'required',
        ]);

        $cpl = CPL_Prodi::where('kodeCPL', $cpl)->first();
        $cpl->update([
            'kodeCPL' => $request->kodeCPL,
            'deskripsiCPL' => $request->deskripsiCPL,
            'referensiCPL' => $request->referensiCPL,
        ]);
        $cpl->save();

        return redirect()->route('kurikulum.data.cpl_prodi')->with('error', 'CPL Prodi berhasil diubah');
    }

    public function deleteCPLProdi($cpl)
    {
        $cpl = CPL_Prodi::where('kodeCPL', $cpl)->first();
        $cpl->delete();

        return redirect()->route('kurikulum.data.cpl_prodi')->with('success', 'CPL Prodi berhasil dihapus');
    }
}
