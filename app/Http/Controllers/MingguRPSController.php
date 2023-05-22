<?php

namespace App\Http\Controllers;

use App\Models\Minggu_RPS;
use App\Models\RPS;
use Illuminate\Http\Request;
use App\Models\Detail_RPS;
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
    public function index()
    {
        $minggu_rps = Minggu_RPS::all();
        $mk = Mata_Kuliah::all();
        $rps = RPS::all();
        return view('content.minggu_rps.add_minggu_rps', [
            'title' => 'Minggu RPS', 
            'minggu_rps_list'=> $minggu_rps,
            'subcpmk_list'=> SubCPMK::all(),
            'mk_list' =>$mk,
            'rps_list' => $rps,
            'teknik_penilaian_list' => Teknik_Penilaian::all(),
            'detail_rps_list'=> Detail_RPS::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Minggu_RPS  $minggu_RPS
     * @return \Illuminate\Http\Response
     */
    public function editMingguRPS(Minggu_RPS $minggu_RPS)
    {
        $minggu_RPS = Minggu_RPS::where('kodeMingguRPS', $minggu_RPS)->first();

        return view('content.minggu_rps.edit_minggu_rps', ['title' => 'Minggu RPS', 'minggu_RPS' => $minggu_RPS]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMingguRPS()
    {
        $minggu_rps = Minggu_RPS::all();
        $mk = Mata_Kuliah::all();
        $rps = RPS::all();
        $subcpmk = SubCPMK::all();
        return view('content.minggu_rps.add_minggu_rps', [
            'title' => 'Tambah Minggu RPS',
            'minggu_rps_list'=> $minggu_rps,
            'scpmk' => $subcpmk,
            'mk_list' =>$mk,
            'rps_list' => $rps,
            'teknik_penilaian_list' => Teknik_Penilaian::all(),
            'detail_rps_list'=> Detail_RPS::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMingguRPS(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kodeMingguRPS' => 'required',
            'kodeSubCPMK' => 'required',
            // 'kodePenilaian' => 'required',
            'mingguKe' => 'required',
            'bentukPembelajaran' => 'required',
            'indikatorMingguRPS' => 'required',
            'kriteriaMingguRPS' => 'required',
            'deskripsiPembelajaran' => 'required',
            'materiPembelajaran' => 'required',
        ]);

        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Minggu_RPS::create([
            'kodeMingguRPS' => $request->kodeMingguRPS,
            'kodeSubCPMK' => $request->kodeSubCPMK,
            // 'kodePenilaian' => $request->,
            'mingguKe' => $request->mingguKe,
            'bentukPembelajaran' => (int)$request->bentukPembelajaran,
            'indikatorMingguRPS' => $request->indikatorMingguRPS,
            'kriteriaMingguRPS' => $request->kriteriaMingguRPS,
            'deskripsiPembelajaran' => $request->deskripsiPembelajaran,
            'materiPembelajaran' => $request->materiPembelajaran

        ]);
        // Membuat data pada tabel pivot C
            $detail_rps = [];
                $detail_rps[] = [
                    'kodeRPS' => $request->kodeRPS,
                    'kodeMingguRPS' => $request->kodeMingguRPS,
                    'kodePenilaian' => $request->kodePenilaian,
                    // atribut tambahan lainnya di tabel pivot C
                ];

            Detail_RPS::insert($detail_rps);

        return redirect()->route('add_minggu_rps')->with('success', 'Minggu RPS berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Minggu_RPS  $minggu_RPS
     * @return \Illuminate\Http\Response
     */
    public function showMingguRPS(Minggu_RPS $minggu_RPS)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Minggu_RPS  $minggu_RPS
     * @return \Illuminate\Http\Response
     */
    public function updateMingguRPS(Request $request, Minggu_RPS $minggu_RPS)
    {
        $validator = Validator::make($request->all(), [
            'kodeMingguRPS' => 'required',
            'kodeSubCPMK' => 'required',
            // 'kodePenilaian' => 'required',
            'mingguKe' => 'required',
            'bentukPembelajaran' => 'required',
            'indikatorMingguRPS' => 'required',
            'kriteriaMingguRPS' => 'required',
            'deskripsiPembelajaran' => 'required',
            'materiPembelajaran' => 'required',
        ]);


        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $minggu_RPS = Minggu_RPS::where('kodeMingguRPS', $minggu_RPS)->first();
        $minggu_RPS->update([
            'kodeMingguRPS' => $request->kodeMingguRPS,
            'kodeSubCPMK' => $request->kodeSubCPMK,
            // 'kodePenilaian' => $request->,
            'mingguKe' => $request->mingguKe,
            'bentukPembelajaran' => (int)$request->bentukPembelajaran,
            'indikatorMingguRPS' => $request->indikatorMingguRPS,
            'kriteriaMingguRPS' => $request->kriteriaMingguRPS,
            'deskripsiPembelajaran' => $request->deskripsiPembelajaran,
            'materiPembelajaran' => $request->materiPembelajaran
        ]);
        $minggu_RPS->save();

        return redirect()->route('dashboard.rps.minggu_rps')->with('success', 'Minggu RPS berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Minggu_RPS  $minggu_RPS
     * @return \Illuminate\Http\Response
     */
    public function deleteMingguRPS(Minggu_RPS $minggu_RPS)
    {
        $minggu_RPS = Minggu_RPS::where('kodeMingguRPS', $minggu_RPS)->first();
        $minggu_RPS->delete();
        return redirect()->route('dashboard.rps.minggu_rps')->with('success', 'Minggu RPS berhasil dihapus');
    }
}
