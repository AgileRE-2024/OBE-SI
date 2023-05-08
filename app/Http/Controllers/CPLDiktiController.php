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

    public function edit($cpl)
    {
        $cpl = CPL_SN_Dikti::where('kodeCPLSN', $cpl)->first();

        return view('content.cpl_dikti.edit_cpl_dikti', ['title' => 'Edit CPL SN Dikti', 'cpl' => $cpl]);
    }

    public function update($cpl, Request $request)
    {
        $request->validate([
            'kodeCPLSN' => 'required',
            'deskripsiSN' => 'required',
            'sumberSN' => 'required',
            'kategoriSN' => 'required',
            'jenisSN' => 'required',
        ]);

        $cpl = CPL_SN_Dikti::where('kodeCPLSN', $cpl)->first();
        $cpl->update([
            'kodeCPLSN' => $request->kodeCPLSN,
            'deskripsiSN' => $request->deskripsiSN,
            'sumberSN' => $request->sumberSN,
            'kategoriSN' => (int)$request->kategoriSN,
            'jenisSN' => $request->jenisSN,
        ]);
        $cpl->save();

        return redirect()->route('kurikulum.data.cpl_sndikti')->with('success', 'CPL SN Dikti berhasil diubah');
    }

    public function delete($cpl)
    {
        $cpl = CPL_SN_Dikti::where('kodeCPLSN', $cpl)->first();
        $cpl->delete();

        return redirect()->route('kurikulum.data.cpl_sndikti')->with('success', 'CPL SN Dikti berhasil dihapus');
    }
}
