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
        return view('content.mnj_prodi.prodi', ['title' => 'Manajemen Prodi', 'prodi' => $prodi]);
    }

    public function editProdi($pd)
    {
        $pd = Prodi::where('namaProdi', $pd)->first();

        return view('content.mnj_prodi.edit_prodi', ['title' => 'Edit Prodi', 'pd' => $pd]);
    }

    public function updateProdi(Request $request, $pd)
    {
        if ($request->namaProdi != $pd) {
            $validator = Validator::make($request->all(), [
                'namaProdi' => 'required|unique:prodi,namaProdi',
                'fakultas' => 'required',
                'namaPT' => 'required',
                'akreditasi' => 'required',
                'jenjangPendidikan' => 'required',
                'gelarLulusan' => 'required',
                'visi' => 'required',
                'misi' => 'required',
                'tujuan' => 'required'
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'namaProdi' => 'required',
                'fakultas' => 'required',
                'namaPT' => 'required',
                'akreditasi' => 'required',
                'jenjangPendidikan' => 'required',
                'gelarLulusan' => 'required',
                'visi' => 'required',
                'misi' => 'required',
                'tujuan' => 'required'
            ]);
        }
        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
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
        
        return redirect()->route('manajemen.prodi')->with('success', 'Program Studi berhasil diedit');
    }

    // public function addProdi()
    // {
    //     return view('content.mnj_prodi.add_prodi', ['title' => 'Tambah Prodi']);
    // }

    // public function storeProdi(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'namaProdi' => 'required|unique:prodi,namaProdi',
    //         'fakultas' => 'required',
    //         'namaPT' => 'required',
    //         'akreditasi' => 'required',
    //         'jenjangPendidikan' => 'required',
    //         'gelarLulusan' => 'required',
    //         'visi' => 'required',
    //         'misi' => 'required',
    //         'tujuan' => 'required'
    //     ]);

    //     if ($validator->fails()) {
    //         // flash('error')->error();
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     Prodi::create([
    //         'namaProdi' => $request->namaProdi,
    //         'fakultas' => $request->fakultas,
    //         'namaPT' => $request->namaPT,
    //         'akreditasi' => $request->akreditasi,
    //         'jenjangPendidikan' => $request->jenjangPendidikan,
    //         'gelarLulusan' => $request->gelarLulusan,
    //         'visi' => $request->visi,
    //         'misi' => $request->misi,
    //         'tujuan' => $request->tujuan,
    //     ]);

    //     return redirect()->route('manajemen.prodi')->with('success', 'Program Studi berhasil ditambahkan');
    // }

    // public function delete($pd)
    // {
    //     $pd = Prodi::where('namaProdi', $pd)->first();
    //     $pd->delete();

    //     return redirect()->route('#')->with('success', 'Program Studi berhasil dihapus');
    // }
}
