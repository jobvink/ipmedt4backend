<?php

namespace App\Http\Controllers;

use App\Docter;
use Illuminate\Http\Request;

class DocterController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Docter  $docter
     * @return \Illuminate\Http\Response
     */
    public function show(Docter $docter)
    {
        //
        return view('docter.show', compact('docter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Docter  $docter
     * @return \Illuminate\Http\Response
     */
    public function edit(Docter $docter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Docter  $docter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docter $docter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Docter  $docter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docter $docter)
    {
        //
    }
}
