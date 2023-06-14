<?php

namespace App\Http\Controllers;

use App\Models\Detail_Peran_Dosen;
use App\Models\User;
use App\Models\RPS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kodeRPS)
{
    //$details = Detail_Peran_Dosen::all();
    $details = Detail_Peran_Dosen::with('users')->where('kodeRPS', $kodeRPS)->get();
    $title = 'Detail Peran Dosen';
    $kodeRPS=$kodeRPS;
    return view('content.dosen.index', ['title'  => $title, 'details' => $details, 'kodeRPS' => $kodeRPS]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPeranDosen($kodeRPS)
{
    //$detail = Detail_Peran_Dosen::where('nip', $detail)->first();
    $dosen = User::all();

    return view('content.dosen.create', [ 'title' => 'Tambah Peran Dosen', 'dosen'=>$dosen, 'kodeRPS'=>$kodeRPS]);
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePeranDosen(Request $request, $kodeRPS)
    {

        $validator = Validator::make($request->all(), [
            'nip' => 'required',
            'peranDosen' => 'required'
        ]);

        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Detail_Peran_Dosen::create([
            'nip' => $request->nip,
            'kodeRPS' => $kodeRPS,
            'peranDosen' => $request->peranDosen,
        ]);
        // Redirect atau tampilkan pesan sukses, sesuai dengan kebutuhan aplikasi
        return redirect()->route('edit_rps.peran_dosen', ['title'=>"Daftar Peran Dosen",'kodeRPS' => $kodeRPS ])->with('success', 'Minggu RPS berhasil ditambahkan');
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
        return view('content.dosen.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function editPeranDosen($nip, $kodeRPS, $peranDosen)
    {
        // $detail = Detail_Peran_Dosen::findOrFail($nip);
        // return view('dosen.edit', compact('detail'));
        $detail = Detail_Peran_Dosen::where('nip', $nip)->where('kodeRPS', $kodeRPS)->where('peranDosen', $peranDosen)->first();
        $dosen = User::all();
        return view('content.dosen.edit', ['title' => 'Detail Peran Dosen', 'detail' => $detail, 'dosen'=>$dosen, 'kodeRPS'=>$kodeRPS]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function updatePeranDosen(Request $request, $nip, $kodeRPS, $peranDosen)
    {
        
        Detail_Peran_Dosen::where('nip', $nip)->where('kodeRPS', $kodeRPS)->where('peranDosen', $peranDosen)->delete();
        Detail_Peran_Dosen::create([
            'nip' => $nip,
            'kodeRPS' => $kodeRPS,
            'peranDosen' => $request->peranDosen,
        ]);

        return redirect()->route('edit_rps.peran_dosen', ['kodeRPS'=>$kodeRPS])->with('success', 'Data Dosen berhasil diperbarui');
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
    public function deletePeranDosen($nip, $kodeRPS, $peranDosen)
{
    $detail = Detail_Peran_Dosen::where('nip', $nip)
                                ->where('kodeRPS', $kodeRPS)
                                ->where('peranDosen', $peranDosen)
                                ->delete();

        return redirect()->route('edit_rps.peran_dosen', ['kodeRPS'=>$kodeRPS])->with('success', 'Data Dosen berhasil dihapus');
}

    public function getNamaDosen($nip)
{
    // Lakukan query atau manipulasi data untuk mendapatkan Nama Dosen berdasarkan NIP
    $namaDosen = User::where('nip', $nip)->value('namaDosen');

    // Mengembalikan hasil dalam format yang sesuai (misalnya, JSON)
    return response()->json($namaDosen);
}
}   
