<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    public function docter() {
        return $this->belongsTo(Docter::class);
    }

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
