<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    //
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
