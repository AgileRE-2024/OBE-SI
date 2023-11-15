<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class prodiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::all();

        return view('#', ['title' => 'Program Studi', 'prodi' => $prodi]);
    }

    public function addProdi()
    {
        return view('#', ['title' => 'Tambah Program Studi']);
    }

    public function edit($pd)
    {
        $pd = Prodi::where('namaProdi', $pd)->first();

        return view('#', ['title' => 'Edit Program STudi', 'pd' => $pd]);
    }

    public function storeProdi(Request $request)
    {
        $request->validate([
            'namaProdi' => 'required|unique:prodi,namaProdi',
            'fakultas',
            'namaPT',
            'akreditasi',
            'jenjangPendidikan',
            'gelarLulusan',
            'visi',
            'misi',
            'tujuan'
        ]);

        if ($request->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($request)->withInput();
        }

        Prodi::create([
            'deskripsiPL' => $request->deskripsiPL,
            'namaProdi' => $request->namaProdi,
            'fakultas' => $request->fakultas,
            'namaPT' => $request->namaPT,
            'akreditasi' => $request->akreditasi,
            'jenjangPendidikan' => $request->jenjangPendidikan,
            'gelarLulusan' => $request->gelarLulusan,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
        ]);

        return redirect()->route('#')->with('success', 'Program Studi berhasil ditambahkan');
    }

    public function updateBahanKajian(Request $request, $pd)
    {
        if ($request->namaProdi != $pd) {
            $request->validate([
                'namaProdi' => 'required|unique:prodi,namaProdi',
                'fakultas',
                'namaPT',
                'akreditasi',
                'jenjangPendidikan',
                'gelarLulusan',
                'visi',
                'misi',
                'tujuan'
            ]);
        } else {
            $request->validate([
                'namaProdi' => 'required',
                'fakultas',
                'namaPT',
                'akreditasi',
                'jenjangPendidikan',
                'gelarLulusan',
                'visi',
                'misi',
                'tujuan'
            ]);
        }
        if ($request->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($request)->withInput();
        }

        if (Prodi::where('namaProdi', $request->namaProdi)->exists() && $request->namaProdi != $pd) {
            return redirect()->back()->with('error', 'Nama Program Studi sudah ada');
        }

        $pd = Prodi::where('namaProdi', $pd)->first();
        $pd->update([
            'namaProdi' => $request->namaProdi,
            'fakultas' => $request->fakultas,
            'namaPT' => $request->namaPT,
            'akreditasi' => $request->akreditasi,
            'jenjangPendidikan' => $request->jenjangPendidikan,
            'gelarLulusan' => $request->gelarLulusan,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan
        ]);
        $pd->save();

        return redirect()->route('#')->with('success', 'Program Studi berhasil ditambahkan');
    }

    public function delete($pd)
    {
        $pd = Prodi::where('namaProdi', $pd)->first();
        $pd->delete();

        return redirect()->route('#')->with('success', 'Program Studi berhasil dihapus');
    }
}
