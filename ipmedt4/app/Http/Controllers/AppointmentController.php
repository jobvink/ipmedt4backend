<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Docter;
use App\Patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Docter $docter, Patient $patient)
    {
        //
        return view('appointment.create', compact('docter', 'patient'));
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
        Appointment::create([
            'title' => $request->title,
            'date' => $request->date,
            'location' => $request->location,
            'description' => $request->description,
            'patient_id' => $request->patient_id,
            'docter_id' => $request->docter_id
        ]);
        return redirect('/docter/' . $request->docter_id . '/patients/' . $request->patient_id . '/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
        return view('appointment.edit', compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
        $appointment->title = request('title');
        $appointment->date = request('date');
        $appointment->location = request('locatoin');
        $appointment->description = request('description');
        $appointment->save();
        return redirect('/docter/' . $request->docter_id . '/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment, Docter $docter)
    {
        //
        Appointment::destroy($appointment->id);
        return redirect('/docter/' . $docter->id . '/');
    }
}
