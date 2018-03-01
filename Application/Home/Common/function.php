<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 16:11
 */
function getRandomStr()
{

    $str = "";
    $str_pol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
    $max = strlen($str_pol) - 1;
    for ($i = 0; $i < 16; $i++) {
        $str .= $str_pol[mt_rand(0, $max)];
    }
    return $str;
}
function curlPost($url,$params) {   
    $postData = '';  
    foreach($params as $k => $v)   
    {    
        $postData .= $k . '='.$v.'&';  
    }  
    rtrim($postData, '&'); 
    $ch = curl_init();   
    curl_setopt($ch,CURLOPT_URL,$url);  
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);  
    curl_setopt($ch,CURLOPT_HEADER, false);   
    curl_setopt($ch, CURLOPT_POST, count($postData));  
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);  
    $output=curl_exec($ch);  
    curl_close($ch);  
    return $output; 
}