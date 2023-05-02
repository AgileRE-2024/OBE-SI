<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CPL_Prodi;
use App\Models\CPMK;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CPMKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cpl = Cpl_Prodi::get();
        // $cpmk = CPMK::with('kodeCPL')->get();
        return view('content.pemetaan_cpl_cpmk_mk.index', [
            'title' => 'Pemetaan CPL CPMK',
            // 'cpmk' => $cpmk,
            'cpl' => $cpl
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $cpl)
    {
        $lastCpmk = CPMK::orderBy('kodeCPMK', 'desc')->first();
        
        if ($lastCpmk) {
            $lastId = intval(substr($lastCpmk->kodeCPMK, 4));
            $nextId = 'CPMK'.str_pad($lastId + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $nextId = 'CPMK001';
        }

        $cpl = Cpl_Prodi::where('kodeCPL', $cpl)->first();
        $listedCpmk = CPMK::where('kodeCPL', $cpl->kodeCPL)->get();

        // return view('cpmk.create', [
        return view('content.pemetaan_cpl_cpmk_mk.add-CPMK', [
            'title' => 'Menambahkan CPMK',
            'cpl' => $cpl,
            'nextID' => $nextId,
            'listedCpmk' => $listedCpmk
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'deskripsi' => 'required',
            'kodeCPL' => 'required',
            'deskripsiCPMK'=> 'required'
        ];

        Validator::make($request->all(), $rules, $messages = $this->msg)->validate();
    
        $data = str_getcsv($request->deskripsi, ",");
        // $count = 0;
        
        foreach ($data as $cpmk) {
            $lastCpmk = CPMK::orderBy('kodeCPMK', 'desc')->first();
            
            if ($lastCpmk) {
                $lastId = intval(substr($lastCpmk->kodeCPMK, 4));
                $nextId = 'CPMK'.str_pad($lastId + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $nextId = 'CPMK001';
            }

            CPMK::create([
                'kodeCPMK' => $nextId,
                'deskripsi' => $cpmk,
                'kodeCPL' => $request->kodeCPL
            ]);
    
            // $count++;
        }
    
        // Cpmk::insert($data);
    
        return redirect()->route('kurikulum.pemetaan.cpl_cpmk_mk.')
            ->with('success', 'CPMK berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cpmk = CPMK::find($id);
    
        return view('cpmk.show', ['cpmk' => $cpmk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CPMK $cpmk)
    {
        return view('cpmk.edit', compact('cpmk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CPMK $cpmk)
    {
        $request->validate([
            'deskripsi' => 'required',
        ]);

        $cpmk->update($request->all());

        return redirect()->route('kurikulum.pemetaan.cpl_cpmk_mk.')
            ->with('success', 'CPMK berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cpmk = CPMK::findOrFail($id);
        $cpmk->delete();
        return redirect()->route('kurikulum.pemetaan.cpl_cpmk_mk.')->with('success', 'CPMK berhasil dihapus.');
    }
}
