<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AmmeterDays extends Model
{
    //
    public $table = "ammeter_days";
    public function ammeterDevice()
    {
        return $this->hasOne('App\Models\AmmeterDevice','sno','sno');
    }
}
