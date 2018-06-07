<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ammeter3Days extends Model
{
    public $table = "ammeter3_days";
    public function ammeterDevice()
    {
        return $this->hasOne('App\Models\AmmeterDevice','sno','sno');
    }
}
