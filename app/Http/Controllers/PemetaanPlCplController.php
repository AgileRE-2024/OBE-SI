<?php

namespace App\Http\Controllers;

use App\Models\ProfilLulusan;
use App\Models\CPLProdi;
use App\Models\PemetaanPlCpl;
use Illuminate\Http\Request;

class PemetaanPlCplController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return views
        return view('content.matriksCPL_PL', [
            'title' => 'Pemetaan CPL PL',
            'pl_list' => ProfilLulusan::all(),
            'cpl_list' => CPLProdi::all(),
            'pemetaan' => PemetaanPlCpl::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Drop pemetaan jika gaada di request
        foreach (PemetaanPLCPL::all() as $key => $pemetaan) {
            if (!collect($request)->contains($pemetaan->kodeCPL . '&' . $pemetaan->kodePL)) {
                $pemetaan->delete();
            }
        }

        // Add pemetaan baru
        foreach ($request->request as $key => $param) {
            if (strstr($param, '&')) {
                $foreignList = explode('&', $param);
                if (PemetaanPlCpl::all()->where('kodeCPL', $foreignList[0])->where('kodePL', '===', $foreignList[1])->count() == 0) {
                    PemetaanPlCpl::create([
                        'kodeCPL' => $foreignList[0],
                        'kodePL' => $foreignList[1],
                    ]);
                }
            }
        }

        return redirect(route('kurikulum.pemetaan.cpl_pl'))->with('success', 'Berhasil menyimpan perubahan!!');
    }

}
