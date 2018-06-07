<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlcEnergyMonths extends Model
{
    public $table = "slc_energy_months";
    public function channel()
    {
        return $this->belongsTo('App\Models\SlcChannel','id','channel_id');
    }

}
