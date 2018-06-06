<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AmmeterYears extends Model
{
    public $table = "ammeter_years";
    public function ammeterDevice()
    {
        return $this->hasOne('App\Models\AmmeterDevice','sno','sno');
    }
}
