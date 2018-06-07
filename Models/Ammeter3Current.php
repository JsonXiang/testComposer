<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ammeter3Current extends Model
{
    public $table = "ammeter3_current";
    public function ammeterDevice()
    {
        return $this->hasOne('App\Models\AmmeterDevice','sno','sno');
    }
}
