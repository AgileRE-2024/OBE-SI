<?php

namespace App\Http\Controllers;
use App\Models\Cpl;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CPLController extends Controller
{
    public function data()
    {
        $cpl = DB::table('Cpl')->simplePaginate(5);
        return view('Profil/data')->with('Cpl', $cpl);
        
    }
    public function add()
    {
        return view('Profil/add');
    }
    public function addProcess(Request $request)
    {
        $request->validate([
            'Kode' => 'required|min:2',
            'Profil' => 'required',
            'Deskripsi_Profil' => 'required',
        ]);

        DB::table('profil')->insert([
            'Kode' => $request->Kode,
            'Profil' => $request->Profil,
            'Deskripsi_Profil' => $request->Deskripsi_Profil
        ]);
        return redirect('profil')->with('status', 'Profil lulusan berhasil ditambah!');
    }

    public function edit($id)
    {
        $profil = DB::table('profil')->where('id', $id)->first();
        return view('edit', compact('profil'));
    }

    public function editProcess(Request $request, $id)
    {
        $request->validate([
            'Kode' => 'required|min:2',
            'Profil' => 'required',
            'Deskripsi_Profil' => 'required',
        ]);

        DB::table('profil')->where('id', $id)
            ->update([
                'Kode' => $request->Kode,
                'Profil' => $request->Profil,
                'Deskripsi_Profil' => $request->Deskripsi_Profil
            ]);
        return redirect('profil')->with('status', 'Profil lulusan berhasil diupdate!');
    }

    public function delete($id)
    {
        DB::table('profil')->where('id', $id)->delete();
        return redirect('profil')->with('status', 'Profil lulusan berhasil dihapus!');
    }
}
