<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CPMK;
use App\Models\CPL_Prodi;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class CRUDCPMKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cpmk = CPMK::get();
        return view('content.cpmk.cpmk', ['title' => 'CPMK', 'cpmk' => $cpmk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cplp = CPL_Prodi::all();
        return view('content.cpmk.add_cpmk', ['title' => 'Tambah CPMK', 'cplp' => $cplp]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kodeCPMK' => 'required|unique:cpmk,kodeCPMK|regex:/^CPMK\d{3}$/',
            'deskripsi' => 'required',
            'kodeCPL' => 'required'
        ]);

        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }
        CPMK::create([
            'kodeCPMK' => $request->kodeCPMK,
            'deskripsiCPMK' => $request->deskripsi,
            'kodeCPL' => $request->kodeCPL
        ]);

        return redirect()->route('kurikulum.data.cpmk')
            ->with('success', 'CPMK berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cpmk)
    {
        $cpmk = CPMK::where('kodeCPMK', $cpmk)->first();
        $cplp = CPL_Prodi::all();
        return view('content.cpmk.edit_cpmk', ['title' => 'Edit CPMK', 'cplp' => $cplp, 'cpmk' => $cpmk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $cpmk)
    {
        if ($cpmk == $request->kodeCPMK) {
            $validator = Validator::make($request->all(), [
                'deskripsi' => 'required',
                'kodeCPL' => 'required'
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'kodeCPMK' => 'required|unique:cpmk,kodeCPMK|regex:/^CPMK\d{3}$/',
                'deskripsi' => 'required',
                'kodeCPL' => 'required'
            ]);
        }
        
        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($cpmk == $request->kodeCPMK) {
            CPMK::where('kodeCPMK', $cpmk)->first()->update([
                'deskripsiCPMK' => $request->deskripsi,
                'kodeCPL' => $request->kodeCPL
            ]);
        } else {
            CPMK::where('kodeCPMK', $cpmk)->first()->update([
                'kodeCPMK' => $request->kodeCPMK,
                'deskripsiCPMK' => $request->deskripsi,
                'kodeCPL' => $request->kodeCPL
            ]);
        }

        return redirect()->route('kurikulum.data.cpmk')
            ->with('success', 'CPMK berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
