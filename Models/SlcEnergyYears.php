<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlcEnergyYears extends Model
{
    public $table = "slc_energy_years";
    public function channel()
    {
        return $this->belongsTo('App\Models\SlcChannel','id','channel_id');
    }
}
