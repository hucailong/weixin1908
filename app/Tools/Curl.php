<?php

namespace App\Tools;

class Curl
{
    public static function Post($url,$postData){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);//设置请求地址
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//返回数据格式
        curl_setopt($curl, CURLOPT_POST, 1); //设置成post请求
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);//设置post传输数据
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//关闭https验证
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);//关闭https验证
        $output= curl_exec($curl);
        curl_close($curl);
        return $output;

    }

    public static function Get($url,$postData){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);//设置请求地址
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//返回数据格式
//        curl_setopt($curl, CURLOPT_POST, 1); //设置成post请求
//        curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);//设置post传输数据
//        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//关闭https验证
//        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);//关闭https验证
        $output= curl_exec($curl);
        curl_close($curl);
        return $output;

    }




}
