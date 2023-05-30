<?php

namespace App\Http\Controllers;

use App\Models\Detail_Peran_Dosen;
use App\Models\User;
use App\Models\RPS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    $details = Detail_Peran_Dosen::with('users')->get();
    $title = 'Detail Peran Dosen';
    $kodeRPS=$kodeRPS;
    $detail = DB::select('SELECT detail.nip, dosen.namaDosen, detail.kodeRPS, detail.peranDosen FROM `detail_peran_dosen` detail JOIN users dosen ON detail.nip=dosen.nip WHERE detail.kodeRPS = ? ', [$kodeRPS]);
    // $firstRow = isset($detail[0]) ? $detail[0] : null;
    // dd($detail);
    return view('content.dosen.index', ['title'  => $title, 'details' => $detail , 'kodeRPS' => $kodeRPS]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPeranDosen($kodeRPS)
{
    //$detail = Detail_Peran_Dosen::where('nip', $detail)->first();
    $details = Detail_Peran_Dosen::with('users')->get();
    $users = User::all();
    $rpss = RPS::all();

    return view('content.dosen.create', [ 'title' => 'Tambah Peran Dosen','details' => $details, 'users'=>$users, 'rpss'=>$rpss, 'kodeRPS' => $kodeRPS]);
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePeranDosen(Request $request, $kodeRPS)
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
        $details = Detail_Peran_Dosen::with('users')->get();
        // Redirect atau tampilkan pesan sukses, sesuai dengan kebutuhan aplikasi
        return redirect()->route('edit_rps.peran_dosen', ['title'=>"Daftar Peran Dosen",'details' => $details,'kodeRPS' => $kodeRPS ])->with('success', 'Minggu RPS berhasil ditambahkan');
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
    public function editPeranDosen($nip,$rps, $peranDosen)
    {
        // $detail = Detail_Peran_Dosen::findOrFail($nip);
        // return view('dosen.edit', compact('detail'));
        $detail = DB::select('SELECT detail.nip, dosen.namaDosen, detail.kodeRPS, detail.peranDosen FROM `detail_peran_dosen` detail JOIN users dosen ON detail.nip=dosen.nip WHERE detail.nip= ? AND detail.kodeRPS = ? AND detail.peranDosen= ?', [$nip,$rps,$peranDosen]);
        $firstRow = isset($detail[0]) ? $detail[0] : null;
        // dd($firstRow);
        $details = Detail_Peran_Dosen::all();
        $details = Detail_Peran_Dosen::with('users')->get()->where('nip','=',$nip)->where('kodeRPS','=',$rps);
        // dd($details);
        $empty = array();
        $kode = ['1','2','3'];
        foreach ($details as $detailss ) {
            if(in_array($detailss->peranDosen, $kode)){
                // dd($detailss->kodeRPS);
                $empty[]=$detailss->peranDosen;
            }
        }
        $users = User::all();
        $rpss = RPS::all();
        // $kode = ;
        // dd($empty);
        return view('content.dosen.edit', ['title' => 'Detail Peran Dosen', 'data' => $firstRow , 'details' => $details, 'users'=>$users, 'rpss'=>$rpss, 'empty'=>$empty]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function updatePeranDosen($nip,$rps,$peran,Request $request)
    {
        
        $detail = Detail_Peran_Dosen::where('nip', $nip)->where('kodeRPS',$rps)->where('peranDosen',$peran)->first();
        // dd($detail);
        if ($detail) {
            $detail->peranDosen = $request->peranDosen;
        $detail->save();

            // Redirect or show success message
        }
        // dd($detail);

        return redirect()->route('edit_rps.peran_dosen',$rps)->with('success', 'Data Dosen berhasil diperbarui');
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
    DB::delete('DELETE FROM detail_peran_dosen WHERE nip = ? AND kodeRPS= ? AND peranDosen = ?', [$nip,$kodeRPS,$peranDosen]);
    return redirect()->route('edit_rps.peran_dosen',$kodeRPS)->with('success', 'Data Dosen berhasil dihapus');
}

    public function getNamaDosen($nip)
{
    // Lakukan query atau manipulasi data untuk mendapatkan Nama Dosen berdasarkan NIP
    $namaDosen = User::where('nip', $nip)->value('namaDosen');

    // Mengembalikan hasil dalam format yang sesuai (misalnya, JSON)
    return response()->json($namaDosen);
}
}   
