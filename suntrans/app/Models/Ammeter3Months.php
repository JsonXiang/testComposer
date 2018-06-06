<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ammeter3Months extends Model
{
    public $table = "ammeter3_months";
    public function ammeterDevice()
    {
        return $this->hasOne('App\Models\AmmeterDevice','sno','sno');
    }
}
