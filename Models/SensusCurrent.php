<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensusCurrent extends Model
{
    public $table = "sensus_current";
    public function device()
    {
        return $this->belongsTo('App\Models\SmartDevice','id','dev_id');
    }
}
