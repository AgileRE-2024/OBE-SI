<?php

namespace App\Http\Controllers;

use App\Models\Mata_Kuliah;
use App\Models\Pengampu;
use App\Models\RPS;
use App\Models\User;
use Illuminate\Http\Request;

class PengampuController extends Controller
{
    //
    public function index()
    {
        $pengampu = Pengampu::all();
        $rps_list = RPS::all();
        $mk_list = Mata_Kuliah::all();
        $pengampu_list = User::all();
        $array = array();
        $array_mk = array();
        $array_pengampu = array();
        foreach ($rps_list as $key => $rps) {
            if ($pengampu->where('id_rps', '===', $rps->id_rps)->count()==0) {
                $array[] = $rps->id_rps;
            }
        }
        foreach ($mk_list as $key => $mk) {
            if ($pengampu->where('kodeMK', '===', $mk->kodeMK)->count()==0) {
                $array_mk[] = $mk->kodeMK;
            }
        }
        foreach ($pengampu_list as $key => $dosen) {
            if ($pengampu->where('nip', '===', $dosen->nip)->count()==0) {
                $array_pengampu[] = $dosen->nip;
            }
        }
        
        // dd($pemetaan->where('kodemk', '===', "AGB101")->count()) ;
        // Return views
        // return view('content.pemetaan_bk_mk.matriksBK_MK', [
        //     'title' => 'Pemetaan BK MK',
        //     'bk_list' => Bahan_Kajian::all(),
        //     'mk_list' => Mata_Kuliah::all(),
        //     'pemetaan' => Detail_BK_MK::all(),
        //     'empty' => $array,
        //     'empty_bk'=>$array_bk
        // ]);
    }
}
