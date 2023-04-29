<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\PemetaanBKMK;
use App\Models\BahanKuliah;
use Illuminate\Support\Facades\DB;


class BKMKController extends Controller
{
    //
    public function index()
    {
        $pemetaan = PemetaanBKMK::all();
        $mk_list = MataKuliah::all();
        $bk_list = BahanKuliah::all();
        $array = array();
        $array_bk = array();
        foreach ($mk_list as $key => $mk) {
            if ($pemetaan->where('kodemk', '===', $mk->kodemk)->count()==0) {
                $array[] = $mk->kodemk;
            }
        }
        foreach ($bk_list as $key => $bk) {
            if ($pemetaan->where('kode_bk', '===', $bk->kode_bk)->count()==0) {
                $array_bk[] = $bk->kode_bk;
            }
        }
        // dd($pemetaan->where('kodemk', '===', "AGB101")->count()) ;
        // Return views
        return view('content.pemetaan_bk_mk.matriksBK_MK', [
            'title' => 'Pemetaan BK MK',
            'bk_list' => BahanKuliah::all(),
            'mk_list' => MataKuliah::all(),
            'pemetaan' => PemetaanBKMK::all(),
            'empty' => $array,
            'empty_bk'=>$array_bk
        ]);
    }

    public function update(Request $request)
    {
        // Drop pemetaan jika gaada di request
        foreach (PemetaanBKMK::all() as $key => $pemetaan) {
            if (!collect($request)->contains($pemetaan->kodemk . '&' . $pemetaan->kode_bk)) {
                // dd($pemetaan);
                // $pemetaan->delete();
                DB::delete('DELETE FROM detail_bk_mk WHERE kodemk = ? AND kode_bk = ?', [$pemetaan->kodemk,$pemetaan->kode_bk]);
            }
        }
        // dd($request->request);

        // Add pemetaan baru
        foreach ($request->request as $key => $param) {
            if (strstr($param, '&')) {
                $foreignList = explode('&', $param);
                if (PemetaanBKMK::all()->where('kodemk', $foreignList[0])->where('kode_bk', '===', $foreignList[1])->count() == 0) {
                    PemetaanBKMK::create([
                        'kodemk' => $foreignList[0],
                        'kode_bk' => $foreignList[1],
                    ]);
                }
            }
        }

        return redirect(url('/dashboard/kurikulum/pemetaan/bk-mk/'));
    }
    
}
