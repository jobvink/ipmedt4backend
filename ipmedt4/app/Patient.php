<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    public $timestamps = false;

    public function timelines() {
        return $this->hasMany(Timeline::class);
    }

    public function consults() {
        return $this->hasMany(Consult::class);
    }

    public function appointments() {
        return $this->hasMany(Appointment::class);
    }

    public function dockters() {
        return $this->hasMany(Docter::class);
    }
}
