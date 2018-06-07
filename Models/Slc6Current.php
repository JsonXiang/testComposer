<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slc6Current extends Model
{
    public $table = "slc6_current";
    public function device()
    {
        return $this->belongsTo('App\Models\SmartDevice','id','dev_id');
    }
}
