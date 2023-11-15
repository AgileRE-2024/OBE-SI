<?php

namespace App\Http\Controllers;

use App\Models\Pustaka;
use App\Http\Requests\StorePustakaRequest;
use App\Http\Requests\UpdatePustakaRequest;

class PustakaController extends Controller
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
     * @param  \App\Http\Requests\StorePustakaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePustakaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pustaka  $pustaka
     * @return \Illuminate\Http\Response
     */
    public function show(Pustaka $pustaka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pustaka  $pustaka
     * @return \Illuminate\Http\Response
     */
    public function edit(Pustaka $pustaka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePustakaRequest  $request
     * @param  \App\Models\Pustaka  $pustaka
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePustakaRequest $request, Pustaka $pustaka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pustaka  $pustaka
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pustaka $pustaka)
    {
        //
    }
}
