<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slc10History extends Model
{
    public $table = "slc10_history";
    public function device()
    {
        return $this->belongsTo('App\Models\SmartDevice','id','dev_id');
    }
}
