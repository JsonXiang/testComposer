<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ammeter3Years extends Model
{
    public $table = "ammeter3_years";
    public function ammeterDevice()
    {
        return $this->hasOne('App\Models\AmmeterDevice','sno','sno');
    }
}
