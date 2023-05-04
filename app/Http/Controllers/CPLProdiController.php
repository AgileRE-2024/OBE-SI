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

    public function show($cpl)
    {
        $cpl = CPL_Prodi::where('kodeCPL', $cpl)->first();
        return view('content.cpl_prodi.show_cpl_prodi', ['title' => 'CPL Prodi', 'cpl' => $cpl]);
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
}
