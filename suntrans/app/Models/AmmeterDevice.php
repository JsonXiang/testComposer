<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AmmeterDevice extends Model
{
    public $table = "ammeter_device";
    //单相表
    /*public function ammeterDevice()
    {
        return $this->hasOne('App\Models\AmmeterDevice','sno','sno');
    }*/
    public function ammeterCurrent()
    {
        return $this->hasMany('App\Models\AmmeterCurrent',"sno",'sno');
    }
    public function ammeterDays()
    {
        return $this->hasMany("App\Models\AmmeterDays","sno",'sno');
    }
    public function ammeterMonths()
    {
        return $this->hasMany("App\Models\AmmeteMonths","sno",'sno');
    }
    public function ammeterYears()
    {
        return $this->hasMany("App\Models\AmmeteYears","sno",'sno');
    }
    public function ammeterHistory()
    {
        return $this->hasMany("App\Models\AmmeteHistory","sno",'sno');
    }
    //三相表
    public function ammeterCurrent3()
    {
        return $this->hasMany("App\Models\Ammeter3Current","sno",'sno');
    }
    public function ammeterDays3()
    {
        return $this->hasMany("App\Models\Ammeter3Days","sno",'sno');
    }
    public function ammeterMonths3()
    {
        return $this->hasMany("App\Models\Ammeter3Months","sno",'sno');
    }
    public function ammeterYears3()
    {
        return $this->hasMany("App\Models\Ammeter3Years","sno",'sno');
    }
    public function ammeterHistory3()
    {
        return $this->hasMany("App\Models\Ammeter3History","sno",'sno');
    }
}
