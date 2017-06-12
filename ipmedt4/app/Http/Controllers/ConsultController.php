<?php

namespace App\Http\Controllers;

use App\Consult;
use App\Docter;
use App\Patient;
use Illuminate\Http\Request;

class ConsultController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Docter $docter, Patient $patient)
    {
        //
        return view('consult.create', compact('docter', 'patient'));
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
//        dd(\request('date'));
        Consult::create([
        'consultant' => request('consultant'),
        'type' => request('type'),
        'date' => request('date'),
        'description' => request('description'),
        'patient_id' => request('patient_id'),
        'docter_id' => request('docter_id'),
        ]);
        return redirect('/docter/' . $request->docter_id . '/patients/' . $request->patient_id . '/');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function edit(Consult $consult)
    {
        //
        return view('consult.edit', compact('consult'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consult $consult)
    {
        //
        $consult->consultant = $request->consultant;
        $consult->type = $request->type;
        $consult->date = $request->date;
        $consult->description = $request->description;
        $consult->save();
        return redirect('/docter/' . $request->docter_id . '/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docter $docter, Patient $patient, Consult $consult)
    {
        //
        Consult::destroy($consult->id);
        return redirect('/docter/' . $docter->id . '/patients/' . $patient->id . '/');
    }
}
