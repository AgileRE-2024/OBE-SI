<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CPL_SN_Dikti;

class CPLDiktiController extends Controller
{
    public function index()
    {
        $cpls = CPL_SN_Dikti::all();
        return view('content.cpl_dikti.cpl_dikti', ['title' => 'CPL Dikti', 'cpls' => $cpls]);
    }
    public function show($cpl)
    {
        $cpl = CPL_SN_Dikti::where('kodeCPLSN', $cpl)->first();
        return view('content.cpl_dikti.show_cpl_dikti', ['title' => 'CPL Dikti', 'cpl' => $cpl]);
    }

    public function addCPLDikti()
    {
        return view('content.cpl_dikti.add_cpl_dikti', ['title' => 'Tambah Profil Lulusan']);
    }

    public function storeCPLDikti(Request $request)
    {
        $request->validate([
            'kodeCPLSN' => 'required',
            'deskripsiSN' => 'required',
            'sumberSN' => 'required',
            'kategoriSN' => 'required',
            'jenisSN' => 'required',
        ]);

        CPL_SN_Dikti::create([
            'kodeCPLSN' => $request->kodeCPLSN,
            'deskripsiSN' => $request->deskripsiSN,
            'sumberSN' => $request->sumberSN,
            'kategoriSN' => (int)$request->kategoriSN,
            'jenisSN' => $request->jenisSN,
        ]);

        return redirect()->route('kurikulum.data.cpl_dikti')->with('success', 'CPL SN Dikti berhasil ditambahkan');
    }
}
