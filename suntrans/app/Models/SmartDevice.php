<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmartDevice extends Model
{
    //
    public $table = "smart_device";
    public function channels()
    {
        return $this->hasMany('App\Models\SlcChannel','dev_id','id');
    }
}
