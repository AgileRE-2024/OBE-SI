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
    public function index($kodeRPS)
    {
        // $detail_rps = Detail_RPS::all()
        //     ->where('kodeRPS', $kodeRPS)
        //     ->pluck('kodeMingguRPS');
        // $minggu_rps = Minggu_RPS::all()->whereIn('kodeMingguRPS', $detail_rps);
        // $mk = Mata_Kuliah::all();
        // $rps = RPS::all();
        // $subcpmk = SubCPMK::all();
        return view('content.minggu_rps.minggu_rps', [
            'title' => 'Minggu RPS',
            'kodeRPS' => $kodeRPS,
            // 'minggu_rps_list' => $minggu_rps,
            // 'scpmk' => $subcpmk,
            // 'mk_list' => $mk,
            // 'rps_list' => $rps,
            // 'teknik_penilaian_list' => Teknik_Penilaian::all()->where('kodeRPS', $kodeRPS),
            // 'detail_rps_list' => Detail_RPS::all()->where('kodeRPS', $kodeRPS),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMingguRPS($kodeRPS)
    {
        $minggu_rps = Minggu_RPS::all();
        $mk = Mata_Kuliah::all();
        $rps = RPS::all();
        $subcpmk = SubCPMK::all();
        return view('content.minggu_rps.add_minggu_rps', [
            'title' => 'Tambah Minggu RPS',
            'kodeRPS' => $kodeRPS,
            'minggu_rps_list' => $minggu_rps,
            'scpmk' => $subcpmk,
            'mk_list' => $mk,
            'rps_list' => $rps,
            'teknik_penilaian_list' => Teknik_Penilaian::all(),
            'detail_rps_list' => Detail_RPS::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Minggu_RPS  $minggu_RPS
     * @return \Illuminate\Http\Response
     */
    public function editMingguRPS($kodeMingguRPS, $kodeRPS)
    {
        // $detail_rps = Detail_RPS::all()
        //     ->where('kodeRPS', $kodeRPS)
        //     ->pluck('kodeMingguRPS');
        // $minggu_rps = Minggu_RPS::all()
        //     ->whereIn('kodeMingguRPS', $detail_rps)
        //     ->where('kodeMingguRPS', $kodeMingguRPS)
        //     ->first();
        $mk = Mata_Kuliah::all();
        // $rps = RPS::all();
        $subcpmk = SubCPMK::all();
        // $minggu_RPS = Minggu_RPS::where('kodeMingguRPS', $kodeMingguRPS)->first();

        return view('content.minggu_rps.edit_minggu_rps', [
            'title' => 'Edit Minggu RPS',
            // 'minggu_rps_list' => $minggu_rps,
            'kodeMingguRPS' => $kodeMingguRPS,
            'kodeRPS' => $kodeRPS,
            'scpmk' => $subcpmk,
            'mk_list' => $mk,
            // 'rps_list' => $rps,
            'teknik_penilaian_list' => Teknik_Penilaian::all(),
            // 'detail_rps_list' => Detail_RPS::all(),
            // 'minggu_rps' => $minggu_rps,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMingguRPS(Request $request, $kodeRPS)
{
    if (Minggu_RPS::all()->count() == null) {
        $kodeMingguRPS = 1;
    } else {
        $kodeMingguRPS = Minggu_RPS::all()->last()->kodeMingguRPS;
        $kodeMingguRPS = (int) $kodeMingguRPS;
        $kodeMingguRPS++;
    }

    $validator = Validator::make($request->all(), [
        'kodeSubCPMK' => 'required',
        'mingguKe' => 'required',
        'bentukPembelajaran' => 'required',
        'indikatorMingguRPS' => 'required',
        'kriteriaMingguRPS' => 'required',
        'deskripsiPembelajaran' => 'required',
        'materiPembelajaran' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
    }

        Minggu_RPS::create([
            'kodeMingguRPS' => $kodeMingguRPS,
            'kodeSubCPMK' => $request->kodeSubCPMK,
            // 'kodePenilaian' => $request->,
            'mingguKe' => $request->mingguKe,
            'bentukPembelajaran' => (int) $request->bentukPembelajaran,
            'indikatorMingguRPS' => $request->indikatorMingguRPS,
            'kriteriaMingguRPS' => $request->kriteriaMingguRPS,
            'deskripsiPembelajaran' => $request->deskripsiPembelajaran,
            'materiPembelajaran' => $request->materiPembelajaran,
        ]);
        // Membuat data pada tabel pivot C
        $detail_rps = [];
        $detail_rps[] = [
            'kodeRPS' => $kodeRPS,
            'kodeMingguRPS' => $kodeMingguRPS,
            'kodePenilaian' => $request->kodePenilaian,
            // atribut tambahan lainnya di tabel pivot C
        ];

        Detail_RPS::insert($detail_rps);

        return redirect()
            ->route('edit_rps.minggu_rps', ['kodeRPS' => $kodeRPS])
            ->with('success', 'Minggu RPS berhasil ditambahkan');
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
    public function updateMingguRPS(Request $request, $kodeMingguRPS, $kodeRPS)
    {
        $validator = Validator::make($request->all(), [
            'kodeMingguRPS' => 'required',
            'kodeSubCPMK' => 'required',
            'kodePenilaian' => 'nullable',
            'mingguKe' => 'required',
            'bentukPembelajaran' => 'required',
            'indikatorMingguRPS' => 'required',
            'kriteriaMingguRPS' => 'required',
            'deskripsiPembelajaran' => 'required',
            'materiPembelajaran' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $minggu_RPS = Minggu_RPS::where('kodeMingguRPS', $kodeMingguRPS)->first();

        if (!$minggu_RPS) {
            return redirect()
                ->back()
                ->with('error', 'Minggu RPS tidak ditemukan');
        }

        Detail_RPS::where('kodeMingguRPS', $kodeMingguRPS)
            ->where('kodeRPS', $request->kodeRPS)
            ->delete();

        $minggu_RPS->update([
            'kodeMingguRPS' => $kodeMingguRPS,
            'kodeSubCPMK' => $request->kodeSubCPMK,
            // 'kodePenilaian' => $request->,
            'mingguKe' => $request->mingguKe,
            'bentukPembelajaran' => (int) $request->bentukPembelajaran,
            'indikatorMingguRPS' => $request->indikatorMingguRPS,
            'kriteriaMingguRPS' => $request->kriteriaMingguRPS,
            'deskripsiPembelajaran' => $request->deskripsiPembelajaran,
            'materiPembelajaran' => $request->materiPembelajaran,
        ]);
        // $detail_rps->kodePenilaian = $request->input('kodePenilaian');
        // $detail_rps->save();

        $detail_rps = [];
        $detail_rps[] = [
            'kodeRPS' => $kodeRPS,
            'kodeMingguRPS' => $kodeMingguRPS,
            'kodePenilaian' => $request->kodePenilaian,
            // atribut tambahan lainnya di tabel pivot C
        ];

        Detail_RPS::insert($detail_rps);

        return redirect()
            ->route('edit_rps.minggu_rps', ['kodeRPS' => $kodeRPS])
            ->with('success', 'Minggu RPS berhasil diedit' . $request->kodePenilaian);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Minggu_RPS  $minggu_RPS
     * @return \Illuminate\Http\Response
     */
    public function deleteMingguRPS(Request $request, $kodeMingguRPS, $kodeRPS)
    {
        // Hapus detail RPS yang berelasi dengan minggu RPS
        Detail_RPS::where('kodeMingguRPS', $kodeMingguRPS)
            ->where('kodeRPS', $request->kodeRPS)
            ->delete();

        // Hapus minggu RPS
        $minggu_RPS = Minggu_RPS::where('kodeMingguRPS', $kodeMingguRPS)->first();
        $minggu_RPS->delete();

        return redirect()
            ->route('edit_rps.minggu_rps', ['kodeRPS' => $kodeRPS])
            ->with('success', 'Minggu RPS berhasil dihapus');
    }
}
