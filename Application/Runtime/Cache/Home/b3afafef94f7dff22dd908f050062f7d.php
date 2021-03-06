<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>充值查询</title>
    <link rel="stylesheet" href="/Public/Home/css/login.css"/>
    <link rel="stylesheet" href="/Public/Home/js/need/layer.css"/>
    <script src="/Public/Home/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/layer.js"></script>
    <style>
    h1{
        color:white;
    }
    </style>
</head>
<body>
    <div class="login">
        <div class="welcome"><!-- <img src="/Public/Home/images/welcome.png"> -->
        <h1 align="center">充值查询</h1>
        </div>
        <div class="login-form">
            <div class="login-inp"><label>用户姓名:</label><input type="text" placeholder="" id="name" maxlength="5"></div>
            <div class="login-inp"><label>手机号码:</label><input type="tel" placeholder="" id="phone" maxlength="11"></div>
            <div class="login-inp LoginUser" id="dl">确定</div>
        </div>
    </div>
</body>
<script>
    $(function(){
        $("#dl").click(function(){
            if($('#name').val() == ' '){
                layer.open({
                    content: "姓名不能为空",
                    style: 'background:rgba(0,0,0,.6); color:#fff; border:none;',
                    time: 3
                });
                //return;
            }
            if($('#phone').val() == ' '){
                layer.open({
                    content: "手机不能为空",
                    style: 'background:rgba(0,0,0,.6); color:#fff; border:none;',
                    time: 3
                });
                //return;
            }
            var name = $('#name').val();
            var phone = $('#phone').val();
            var data = {
                'name' : name,
                'phone' : phone
            };
            //console.log(data);return;
            $.ajax({
                'url' : '/index.php/Home/Index/login_denglu',
                'type' : 'post',
                'data' : data,
                'dataType' : 'json',
                'success' : function(response){
                    if(response.code != 10000){
                        layer.open({
                            content: response.msg,
                            style: 'background:rgba(0,0,0,.6); color:#fff; border:none;',
                            time: 3
                        });
                        return;
                    }else{
                        window.location.href="/index.php/Home/Index/record";
                    }
                }
            });
        });
    });
</script>
</html>