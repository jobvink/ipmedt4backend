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
        $this->validate(request(),
            [
            'title' => 'required',
            'date' => 'required|date',
            'location' => 'required',
            'description' => 'required'
            ],
            [
                'title.required' => 'Er moet een title toegevoegd worden',
                'date.required' => 'Er moet een datum toegevoegd worden',
                'date.date' => 'Datum moet een datum zijn',
                'location.required' => 'Er moet een locatie toegevoegd worden',
                'description.required' => 'Er moet een beschrijving ingevuld worden',
            ]);

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
    public function edit(Docter $docter, Patient $patient, Appointment $appointment)
    {
        //
        return view('appointment.edit', compact('docter', 'patient','appointment'));
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
        $this->validate(request(),
            [
            'title' => 'required',
            'date' => 'required|date',
            'location' => 'required',
            'description' => 'required'
            ],
            [
                'title.required' => 'Er moet een title toegevoegd worden',
                'date.required' => 'Er moet een datum toegevoegd worden',
                'date.date' => 'Datum moet een datum zijn',
                'location.required' => 'Er moet een locatie toegevoegd worden',
                'description.required' => 'Er moet een beschrijving ingevuld worden',
            ]);

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
    public function destroy(Docter $docter, Patient $patient, Appointment $appointment)
    {
        //
        Appointment::destroy($appointment->id);
        return redirect('/docter/' . $docter->id . '/patients/' . $patient->id . '/');
    }
}
