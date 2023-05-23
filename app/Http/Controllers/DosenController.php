<?php

namespace App\Http\Controllers;

use App\Models\Detail_Peran_Dosen;
use App\Models\User;
use App\Models\RPS;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    //$details = Detail_Peran_Dosen::all();
    $details = Detail_Peran_Dosen::with('users')->get();
    $title = 'Detail Peran Dosen';

    return view('dosen.index', compact('title', 'details'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    //$detail = Detail_Peran_Dosen::where('nip', $detail)->first();
    $details = Detail_Peran_Dosen::with('users')->get();
    $users = User::all();
    $rpss = RPS::all();

    return view('dosen.create', [ 'title' => 'Tambah Profil Lulusan','details' => $details, 'users'=>$users, 'rpss'=>$rpss]);
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'kodeRPS' => 'required',
            'deskripsi' => 'required'
        ]);

        $details = Detail_Peran_Dosen::create([
            'nip' => $request->nip,
            'kodeRPS' => $request->kodeRPS,
            'peranDosen' => $request->deskripsi
        ]);
        $details->save();

        // Redirect atau tampilkan pesan sukses, sesuai dengan kebutuhan aplikasi
        return redirect()->route('dosen.index')->with('success', 'Profil Lulusan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Detail_Peran_Dosen::findOrFail($id);
        return view('dosen.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function edit($detail)
    {
        // $detail = Detail_Peran_Dosen::findOrFail($nip);
        // return view('dosen.edit', compact('detail'));
        $detail = Detail_Peran_Dosen::where('nip', $detail)->first();
        $details = Detail_Peran_Dosen::all();
        $details = Detail_Peran_Dosen::with('users')->get();
        $users = User::all();
        $rpss = RPS::all();

        return view('dosen.edit', ['title' => 'Detail Peran Dosen', 'detail' => $detail, 'details' => $details, 'users'=>$users, 'rpss'=>$rpss]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $detail)
    {
        
        $detail = Detail_Peran_Dosen::where('nip', $detail)->first();
        $detail->update([
            'nip' => $request->nip,
            'kodeRPS' => $request->kodeRPS,
            'peranDosen' => $request->peranDosen,
        ]);
        $detail->save();

        return redirect()->route('dosen.index')->with('success', 'Data Dosen berhasil diperbarui');
    }
// $detail = Detail_Peran_Dosen::findOrFail($nip);
        // $detail->nip = $request->input('nip');
        // $detail->kodeRPS = $request->input('kodeRPS');
        // $detail->peranDosen = $request->input('peranDosen');
        // $detail->save();
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function destroy($details)
    {
        $details = Detail_Peran_Dosen::where('nip', $details)->first();
        $details->delete();
        return redirect()->route('dosen.index')->with('success', 'Data Dosen berhasil dihapus');
    }
    public function getNamaDosen($nip)
{
    // Lakukan query atau manipulasi data untuk mendapatkan Nama Dosen berdasarkan NIP
    $namaDosen = User::where('nip', $nip)->value('namaDosen');

    // Mengembalikan hasil dalam format yang sesuai (misalnya, JSON)
    return response()->json($namaDosen);
}
}   
