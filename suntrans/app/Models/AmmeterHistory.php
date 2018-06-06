<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AmmeterHistory extends Model
{
    public $table = "ammeter_history";
    public function ammeterDevice()
    {
        return $this->hasOne('App\Models\AmmeterDevice','sno','sno');
    }
}
