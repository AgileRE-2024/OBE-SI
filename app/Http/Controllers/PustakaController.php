<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use App\Models\Minggu_RPS;
use Illuminate\Support\Facades\Response;
use App\Exports\ExportListPustaka;
use App\Exports\Eksporpustakabackup;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\pustaka;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class PustakaController extends Controller
{
    public function index()
    {
        $pustaka = pustaka::all();

        return view('content.pustaka.pustaka', ['title' => 'Pustaka', 'pustaka' => $pustaka]);
    }

    public function addPustaka()
    {
        return view('content.pustaka.add_pustaka', ['title' => 'Tambah Pustaka']);
    }

    public function storePustaka(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'nama_penulis' => 'required',
            'tahun' => 'required',
            'penerbit' => 'required',
        ]);

        pustaka::create([
            'judul' => $request->judul,
            'nama_penulis' => $request->nama_penulis,
            'tahun' => $request->tahun,
            'penerbit' => $request->penerbit,
        ]);

        return redirect()->route('kurikulum.data.pustaka')->with('success', 'Pustaka berhasil ditambahkan');
    }

    public function edit($pustaka)
    {
        $pustaka = pustaka::where('id_pustaka', $pustaka)->first();

        return view('content.pustaka.edit_pustaka', ['title' => 'Edit Pustaka', 'pustaka' => $pustaka]);
    }

    public function update($pustaka, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'nama_penulis' => 'required',
            'tahun' => 'required',
            'penerbit' => 'required',
        ]);

        $pustaka = pustaka::where('id_pustaka', $pustaka)->first();
        $pustaka->update([
            'judul' => $request->judul,
            'nama_penulis' => $request->nama_penulis,
            'tahun' => $request->tahun,
            'penerbit' => $request->penerbit,
        ]);

        $pustaka->save();

        return redirect()->route('kurikulum.data.pustaka')->with('success', 'Pustaka berhasil diubah');
    }

    public function delete($pustaka)
    {
        $pustaka = pustaka::where('id_pustaka', $pustaka)->first();
        $pustaka->delete();

        return redirect()->route('kurikulum.data.pustaka')->with('success', 'Pustaka berhasil dihapus');
    }

    public function export_excel(){
        // $rps = RPS::where('tahunAjaran',2023)
        // ->with('Mata_Kuliah')->get();
        // $attributeNames = array_keys($rps->toArray()[0]);

        // dd($rps);
        return Excel::download(new ExportListPustaka,'list_pustaka.xlsx');
    }
}