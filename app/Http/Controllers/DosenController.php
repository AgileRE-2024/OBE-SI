<?php

namespace App\Http\Controllers;

use App\Models\Detail_Peran_Dosen;
use App\Models\Pengampu;
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
    $rps = RPS::where('id_rps', $kodeRPS)->first();
    // dd($kodeRPS);
    $pembuat = User::where('nip', $rps->dibuat_oleh)->first();
    $pemeriksa = User::where('nip', $rps->diperiksa_oleh)->first();
    $persetujuan = User::where('nip', $rps->disetujui_oleh)->first();
    $pengampu = User::where('nip', $rps->dosenPengampu)->first();
    $penanggung_jawab = User::where('nip', $rps->penanggungJawab)->first();
    $title = 'Detail Peran Dosen';
    $kodeRPS=$kodeRPS;
    return view('content.dosen.index', [
        'title'  => $title, 
        'pembuat' => $pembuat,
        'pemeriksa' => $pemeriksa,
        'persetujuan' => $persetujuan,
        'pengampu' => $pengampu,
        'penanggung_jawab' => $penanggung_jawab,
        'kodeRPS' => $kodeRPS
    ]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPeranDosen($kodeRPS)
{
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
    // public function editPeranDosen($nip, $kodeRPS, $peranDosen)
    // {
    //     $detail = Detail_Peran_Dosen::where('nip', $nip)->where('kodeRPS', $kodeRPS)->where('peranDosen', $peranDosen)->first();
    //     $dosen = User::all();
    //     return view('content.dosen.edit', ['title' => 'Detail Peran Dosen', 'detail' => $detail, 'dosen'=>$dosen, 'kodeRPS'=>$kodeRPS]);
    // }

    public function editPeranDosen($kodeRPS)
    {
        $dosen = User::all();
        $rps = RPS::where('id_rps', $kodeRPS)->first();
        return view('content.dosen.edit', ['title' => 'Detail Peran Dosen', 'dosen'=>$dosen, 'kodeRPS'=>$kodeRPS, 'rps'=>$rps]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function updatePeranDosen(Request $request, $kodeRPS)
    {
        
        $request->validate([
            // 'dibuat_oleh' => 'required',
            'diperiksa_oleh' => 'required',
            'disetujui_oleh' => 'required',
            'dosenPengampu' => 'required',
            'penanggungJawab' => 'required',
        ]);

        // Update data rps
        $data = [
            // 'dibuat_oleh' => $request->input('dibuat_oleh'),
            'diperiksa_oleh' => $request->input('diperiksa_oleh'),
            'disetujui_oleh' => $request->input('disetujui_oleh'),
            'dosenPengampu' => $request->input('dosenPengampu'),
            'penanggungJawab' => $request->input('penanggungJawab'),
        ];

        $pengampu = [
            'nip' => $request->input('dosenPengampu'),
        ];

        // dd($data);

        RPS::where('id_rps', $kodeRPS)->update($data);
        // if(count($pengampu) > 1){
        //     for($i=1; $i<=count($pengampu);){
        //         Pengampu::create([
        //             'id_rps' => $request->id_rps,
        //             'kodeMK' => $request->kodeMK,
        //         ]);
        //         Pengampu::where('id', $i)->update($pengampu[$i]);
        //     }
        // }
        // else{
        //     Pengampu::where('id_rps', $kodeRPS)->update($pengampu);
        // }
        Pengampu::where('id_rps', $kodeRPS)->update($pengampu);

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
