<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    //
    protected $fillable = ['consultant', 'type', 'date', 'description', 'apendix', 'patient_id', 'docter_id'];


    public function docter() {
        return $this->belongsTo(Docter::class);
    }

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
