<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlcEnergyDays extends Model
{
    public $table = "slc_energy_days";
    public function channel()
    {
        return $this->belongsTo('App\Models\SlcChannel','id','channel_id');
    }
}
