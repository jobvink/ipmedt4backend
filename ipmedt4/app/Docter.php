<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docter extends Model
{
    //
    public $timestamps = false;

    public function patients(){
        return $this->hasMany(Patient::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function consults(){
        return $this->hasMany(Consult::class);
    }
}
