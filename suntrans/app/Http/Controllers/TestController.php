<?php

namespace App\Http\Controllers;

use App\Models\SmartDevice;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $devices = SmartDevice::get();
       foreach ($devices as $device)
        {
          $device->channels;
        }
        return $devices;
    }
}
