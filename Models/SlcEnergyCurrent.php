<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlcEnergyCurrent extends Model
{
    public $table = "slc_energy_current";
    public function channel()
    {
        return $this->belongsTo('App\Models\SlcChannel','id','channel_id');
    }
}
