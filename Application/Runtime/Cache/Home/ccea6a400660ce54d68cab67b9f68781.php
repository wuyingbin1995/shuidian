<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>欢迎登陆</title>
    <link rel="stylesheet" href="/Public/Home/css/login.css"/>
    <script src="/Public/Home/js/jquery-1.8.2.min.js"></script>
</head>
<body>
    <div class="login">
        <div class="welcome"><img src="/Public/Home/images/welcome.png"></div>
        <div class="login-form">
            <div class="login-inp"><label>用户姓名:</label><input type="text" placeholder="" id="name"></div>
            <div class="login-inp"><label>手机号码:</label><input type="password" placeholder="" id="phone"></div>
            <div class="login-inp LoginUser">登陆查询</div>
        </div>
    </div>
</body>
<script>
    $(function(){
        $(".LoginUser").click(function(){
            var name = $('#name').val();
            var phone = $('#phone').val();
            var data = {
                'name' : name,
                'phone' : phone
            };
            $.ajax({
                'url' : '/index.php/Home/Index/login',
                ''
            });
            window.location.href="./RechargeRecord.html";
        });
    });
</script>
</html>