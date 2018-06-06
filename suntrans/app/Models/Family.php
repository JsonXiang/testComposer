<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    //
    public $table = "smart_family";
    public function users()
    {
        return $this->hasMany('App\Models\Users',"family_id","id");

    }
}
