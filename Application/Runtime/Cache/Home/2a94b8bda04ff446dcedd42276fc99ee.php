<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>水电充值</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="/Public/Home/css/mui.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/app.css" />
    <script type="text/javascript" src="/Public/Home/js/jquery-1.8.2.min.js" ></script>
    <style>
        html,body{width:100%;height:100%;background-image: url("/Public/Home/images/login-bg.png");background-repeat: no-repeat;background-size: 100% 100%;}
        .mui-bar,.mui-title{color:#ffffff;}
        .mui-card{margin: 30px;box-shadow: 5px 5px 10px rgba(0,0,0,.5);border-radius: 8px;}
        .mui-content{background: none;margin-top:120px;}
    </style>
</head>
<body>
  
    <div class="mui-content">

        <div class="mui-card">
            <div id="shuika" class="mui-card-header mui-card-media" style="height:50vw;background-image:url(/Public/Home/images/shuika.jpg)"></div>
        </div>
        <div class="mui-card">
            <div id="dianka" class="mui-card-header mui-card-media" style="height:50vw;background-image:url(/Public/Home/images/dianka.jpg)"></div>
        </div>
    </div>
</body>
<script>
    $("#shuika").click(function(){
        window.location.href="/index.php/Home/Index/electric_list/shuidian/2";
    });
    $("#dianka").click(function(){
        window.location.href="/index.php/Home/Index/electric_list/shuidian/1";
    });
</script>
</html>