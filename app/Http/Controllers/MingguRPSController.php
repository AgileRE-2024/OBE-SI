<?php

namespace App\Http\Controllers;

use App\Models\Minggu_RPS;
use App\Models\RPS;
use Illuminate\Http\Request;
use App\Models\Detail_RPS;
use App\Models\pustaka;
use App\Models\Mata_Kuliah;
use App\Models\SubCPMK;
use App\Models\Teknik_Penilaian;
use Illuminate\Support\Facades\Validator;

class MingguRPSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kodeRPS)
    {
        $minggu_rps = Minggu_RPS::where('id_rps',$kodeRPS)->orderBy('kodeMingguRPS')->get();
        return view('content.minggu_rps.minggu_rps', [
            'title' => 'Tambah Minggu RPS',
            'minggu_rps_list' => $minggu_rps,
            'kodeRPS' => $kodeRPS,     
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Minggu_RPS  $minggu_RPS
     * @return \Illuminate\Http\Response
     */
    public function editMingguRPS($kodeMingguRPS)
    {
        $kodeRPS = substr($kodeMingguRPS, 0, 10);
        $minggu_rps = Minggu_RPS::where('kodeMingguRPS', $kodeMingguRPS)->first();
        $subcpmk = SubCPMK::all();
        $pustaka = pustaka::all();

        return view('content.minggu_rps.edit_minggu_rps', [
            'title' => 'Edit Minggu RPS',
            'minggu_rps' => $minggu_rps,
            'kodeRPS' => $kodeRPS,
            'scpmk' => $subcpmk,
            'pustaka' => $pustaka
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Minggu_RPS  $minggu_RPS
     * @return \Illuminate\Http\Response
     */
    public function updateMingguRPS(Request $request, $kodeMingguRPS)
    {
        // dd($request);
        $kodeRPS = substr($kodeMingguRPS, 0, 10);

        $request->validate([
            'kodeSubCPMK' => 'required',
            'bahan_kajian' => 'required',
            'temp_bentuk' => 'required',
            'temp_metode' => 'required',
            'penugasan' => 'required',
            'luring' => 'required',
            'temp_media' => 'required',
            'waktuPembelajaran' => 'required',
            'pengalaman_belajar' => 'required',
            'temp_kriteria_penilaian' => 'required',
            'bobot_nilai' => 'required',
            'judul_pustaka' => 'required',
        ]);

        $data = [
            'kodeSubCPMK' => $request->input('kodeSubCPMK'),
            'bahan_kajian' => $request->input('bahan_kajian'),
            'temp_bentuk' => $request->input('temp_bentuk'),
            'temp_metode' => $request->input('temp_metode'),
            'penugasan' => $request->input('penugasan'),
            'luring' => $request->input('luring'),
            'temp_media' => $request->input('temp_media'),
            'waktuPembelajaran' => $request->input('waktuPembelajaran'),
            'pengalaman_belajar' => $request->input('pengalaman_belajar'),
            'temp_kriteria_penilaian' => $request->input('temp_kriteria_penilaian'),
            'bobot_nilai' => $request->input('bobot_nilai'),
        ];

        Minggu_RPS::where('kodeMingguRPS', $kodeMingguRPS)->update($data);
        

        return redirect()
            ->route('edit_rps.minggu_rps', ['kodeRPS' => $kodeRPS])
            ->with('success', 'Minggu RPS berhasil diedit');
    }
}
