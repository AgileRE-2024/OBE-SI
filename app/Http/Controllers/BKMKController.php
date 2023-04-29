<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mata_Kuliah;
use App\Models\Detail_BK_MK;
use App\Models\Bahan_Kajian;
use Illuminate\Support\Facades\DB;


class BKMKController extends Controller
{
    //
    public function index()
    {
        $pemetaan = Detail_BK_MK::all();
        $mk_list = Mata_Kuliah::all();
        $bk_list = Bahan_Kajian::all();
        $array = array();
        $array_bk = array();
        foreach ($mk_list as $key => $mk) {
            if ($pemetaan->where('kodeMK', '===', $mk->kodeMK)->count()==0) {
                $array[] = $mk->kodeMK;
            }
        }
        foreach ($bk_list as $key => $bk) {
            if ($pemetaan->where('kodeBK', '===', $bk->kodeBK)->count()==0) {
                $array_bk[] = $bk->kodeBK;
            }
        }
        // dd($pemetaan->where('kodemk', '===', "AGB101")->count()) ;
        // Return views
        return view('content.pemetaan_bk_mk.matriksBK_MK', [
            'title' => 'Pemetaan BK MK',
            'bk_list' => Bahan_Kajian::all(),
            'mk_list' => Mata_Kuliah::all(),
            'pemetaan' => Detail_BK_MK::all(),
            'empty' => $array,
            'empty_bk'=>$array_bk
        ]);
    }

    public function update(Request $request)
    {
        // Drop pemetaan jika gaada di request
        foreach (Detail_BK_MK::all() as $key => $pemetaan) {
            if (!collect($request)->contains($pemetaan->kodeMK . '&' . $pemetaan->kodeBK)) {
                // dd($pemetaan);
                // $pemetaan->delete();
                DB::delete('DELETE FROM detail_bk_mk WHERE kodeMK = ? AND kodeBK = ?', [$pemetaan->kodeMK,$pemetaan->kodeBK]);
            }
        }
        // dd($request->request);

        // Add pemetaan baru
        foreach ($request->request as $key => $param) {
            if (strstr($param, '&')) {
                $foreignList = explode('&', $param);
                if (Detail_BK_MK::all()->where('kodeMK', $foreignList[0])->where('kodeBK', '===', $foreignList[1])->count() == 0) {
                    Detail_BK_MK::create([
                        'kodeMK' => $foreignList[0],
                        'kodeBK' => $foreignList[1],
                    ]);
                }
            }
        }

        return redirect(url('/dashboard/kurikulum/pemetaan/bk-mk/'));
    }
    
}
