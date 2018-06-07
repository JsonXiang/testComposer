<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlcEnergyHistory extends Model
{
    public $table = "slc_energy_history";
    public function channel()
    {
        return $this->belongsTo('App\Models\SlcChannel','id','channel_id');
    }
}
