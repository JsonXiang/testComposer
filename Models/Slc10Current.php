<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slc10Current extends Model
{
    public $table = "slc10_current";
    public function device()
    {
        return $this->belongsTo('App\Models\SmartDevice','id','dev_id');
    }
}
