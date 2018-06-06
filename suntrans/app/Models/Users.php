<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    public $table = "users";
    public function family()
    {
        return $this->hasOne('App\Models\Family','id','family_id');
    }
}
