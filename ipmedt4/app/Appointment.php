<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $fillable = ['title', 'date', 'location', 'description', 'patient_id', 'docter_id'];

    public function docter() {
        return $this->belongsTo(Docter::class);
    }

    public function patient() {
        return $this->belongsTo(Patient::class);
    }

    public function consult() {
        return $this->hasOne(Consult::class);
    }
}
