<?php

namespace App\Http\Controllers;

use App\Models\Bentuk;
use App\Http\Requests\StoreBentukRequest;
use App\Http\Requests\UpdateBentukRequest;

class BentukController extends Controller
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
     * @param  \App\Http\Requests\StoreBentukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBentukRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bentuk  $bentuk
     * @return \Illuminate\Http\Response
     */
    public function show(Bentuk $bentuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bentuk  $bentuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Bentuk $bentuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBentukRequest  $request
     * @param  \App\Models\Bentuk  $bentuk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBentukRequest $request, Bentuk $bentuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bentuk  $bentuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bentuk $bentuk)
    {
        //
    }
}
