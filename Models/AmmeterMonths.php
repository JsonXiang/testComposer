<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AmmeterMonths extends Model
{
    public $table = "ammeter_months";
    public function ammeterDevice()
    {
        return $this->hasOne('App\Models\AmmeterDevice','sno','sno');
    }
}
