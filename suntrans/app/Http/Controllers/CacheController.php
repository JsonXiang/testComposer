<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function testRedis()
    {

        Cache::put('username','Json',1);
        $username = Cache::get('username');
        echo $username;exit;
    }



    //微瓴登录封装
    public function login($din,$value)
    {
        //$previous =$_SERVER['HTTP_REFERER'];
        set_time_limit(0);
        $key = env('ADMIN_QQ_APPSECRET');
        $times = getMillisecond();
        $num = 4516316;
        $appid = env('ADMIN_QQ_APPID');
        $sig = encrypt($key,$times,$num);
        $data = [
            'appid' => $appid,
            'time' => $times,
            'num' => $num,
            'sig' => $sig,
            'login'=>env('ADMIN_QQ_LOGIN')
        ];
        $url = 'https://api.weihome.qq.com/common/ticket/loginBySession?'.http_build_query($data);
        $json_message = file_get_contents($url);
        Cache::put('login',$json_message,600);
      /*  $obj_json = json_decode($json_message, true);
        $subid = '00430000000000';
        $cmdArr = [
            "V"=>1,
            "subid" => $subid,
            "list" => [
                [
                    "func" => "switch",
                    "value" => $value
                ]
            ]
        ];

        $cmd = urlencode(json_encode($cmdArr));
        $url_device = 'https://api.weihome.qq.com/common/msg/send?'
            .'iotim_ticket='.$obj_json['data']['iotim_ticket']
            .'&token='.$obj_json['data']['token']
            .'&din='.$din.'&datapoint=20130&cmd='.$cmd; //设备子查询
        $text = file_get_contents($url_device);
        $text = json_decode($text,true);
        return $text['code'];
        // print_r(json_decode($text,true));exit;
        echo "<pre>";
        print_r(json_decode($text,true));
        exit;*/
    }
}
