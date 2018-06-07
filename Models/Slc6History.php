<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slc6History extends Model
{
    public $table = "slc6_history";
    public function device()
    {
        return $this->belongsTo('App\Models\SmartDevice','id','dev_id');
    }
}
