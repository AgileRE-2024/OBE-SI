<?php

namespace App\Http\Controllers;

use App\Models\Metode;
use App\Http\Requests\StoreMetodeRequest;
use App\Http\Requests\UpdateMetodeRequest;

class MetodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMetodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMetodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Metode  $metode
     * @return \Illuminate\Http\Response
     */
    public function show(Metode $metode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metode  $metode
     * @return \Illuminate\Http\Response
     */
    public function edit(Metode $metode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMetodeRequest  $request
     * @param  \App\Models\Metode  $metode
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMetodeRequest $request, Metode $metode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Metode  $metode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metode $metode)
    {
        //
    }
}
