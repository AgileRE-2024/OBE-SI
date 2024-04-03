<?php

namespace App\Http\Controllers;

use App\Models\Minggu_RPS;
use App\Models\Detail_MK_CPMK;
use App\Models\RPS;
use Illuminate\Http\Request;
use App\Models\Detail_RPS;
use App\Models\pustaka;
use App\Models\Detail_Pustaka_Minggurps;
use App\Models\Detail_Metode_Minggurps;
use App\Models\Mata_Kuliah;
use App\Models\SubCPMK;
use App\Models\Metode;
use App\Models\Bentuk;
use App\Models\Kriteria_Penilaian;
use App\Models\Media;
use App\Models\Teknik_Penilaian;
use Illuminate\Support\Facades\Validator;

class MingguRPSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kodeRPS,$kodeMK)
    {
        $minggu_rps = Minggu_RPS::where('id_rps',$kodeRPS)->orderBy('kodeMingguRPS')->get();
        return view('content.minggu_rps.minggu_rps', [
            'title' => 'Tambah Minggu RPS',
            'minggu_rps_list' => $minggu_rps,
            'kodeRPS' => $kodeRPS,
            'mata_kuliah' => Mata_Kuliah::where('kodeMK', $kodeMK)->first(),
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
        $kodeMK = substr($kodeMingguRPS, 0, 6);
        $minggu_rps = Minggu_RPS::where('kodeMingguRPS', $kodeMingguRPS)->first();
        $kodeCPMKList = Detail_MK_CPMK::all()->where('kodeMK', $kodeMK)->pluck('kodeCPMK')->toArray();
        $subcpmk = SubCPMK::whereIn('kodeCPMK', $kodeCPMKList)->distinct()->get();
        $pustaka = pustaka::all();
        $metode = Metode::all();
        $bentuk = Bentuk::all();
        $media = Media::all();
        // $kriteria = kriteria_penilaian::all();
        
        return view('content.minggu_rps.edit_minggu_rps', [
            'title' => 'Edit Minggu RPS',
            'minggu_rps' => $minggu_rps,
            'kodeRPS' => $kodeRPS,
            'scpmk' => $subcpmk,
            'pustaka' => $pustaka,
            'metode' => $metode,
            'bentuk' => $bentuk,
            'media' => $media,
            // 'kriteria' => $kriteria
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
        $kodeRPS = substr($kodeMingguRPS, 0, 10);
        $kodeMK = substr($kodeRPS, 0, 6);

        $request->validate([
            'kodeSubCPMK' => 'required',
            'bahan_kajian' => 'required',
            'id_bentuk' => 'required',
            'penugasan' => 'required',
            'luring' => 'required',
            'id_media' => 'required',
            'waktuPembelajaran' => 'required',
            'pengalaman_belajar' => 'required',
            'bobot_nilai' => 'required',
        ]);

        $data = [
            'kodeSubCPMK' => $request->input('kodeSubCPMK'),
            'bahan_kajian' => $request->input('bahan_kajian'),
            'id_bentuk' => $request->input('id_bentuk'),
            'penugasan' => $request->input('penugasan'),
            'luring' => $request->input('luring'),
            'id_media' => $request->input('id_media'),
            'waktuPembelajaran' => $request->input('waktuPembelajaran'),
            'pengalaman_belajar' => $request->input('pengalaman_belajar'),
            'bobot_nilai' => $request->input('bobot_nilai'),
        ];

        Minggu_RPS::where('kodeMingguRPS', $kodeMingguRPS)->update($data);

        $pustaka = Detail_Pustaka_Minggurps::where('kodeMingguRPS', $kodeMingguRPS);
        $pustaka->delete();
        $metode = Detail_Metode_Minggurps::where('kodeMingguRPS', $kodeMingguRPS);
        $metode->delete();
        
        foreach ($request->pustaka as $value) {
            if($value['judul']) {
                $data = [
                    'id_pustaka' => $value['judul'],
                    'kodeMingguRPS' => $kodeMingguRPS,
                    'detail_pustaka' => $value['referensi'],
                ];
                Detail_Pustaka_Minggurps::create($data);
            }
        }

        foreach ($request->metode as $value) {
            if($value) {
                $data = [
                    'id_metode' => $value,
                    'kodeMingguRPS' => $kodeMingguRPS,
                ];
                Detail_Metode_Minggurps::create($data);
            }
        }

        return redirect()
            ->route('edit_rps.minggu_rps', ['kodeRPS' => $kodeRPS, 'kodeMK'=>$kodeMK])
            ->with('success', 'Minggu RPS berhasil diedit');
    }
}
