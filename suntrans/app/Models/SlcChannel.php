<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlcChannel extends Model
{
    //
    public $table = "slc_channel";
    public function device()
    {
        return $this->belongsTo('App\Models\SmartDevice','id','dev_id');
    }
}
