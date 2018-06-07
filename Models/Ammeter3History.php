<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ammeter3History extends Model
{
    public $table = "ammeter3_history";
    public function ammeterDevice()
    {
        return $this->hasOne('App\Models\AmmeterDevice','sno','sno');
    }
}
