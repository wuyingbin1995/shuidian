<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录 - 海湾智能管理系统</title>
    <link rel="stylesheet" href="/shuidian/Public/Admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/shuidian/Public/Admin/css/Login.css">
    <script type="text/javascript" src="/shuidian/Public/Admin/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/shuidian/Public/Admin/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" id="login">
        <header class="htmleaf-header">
            <h1>欢迎登陆 - 海湾智能管理系统 !</h1>
        </header>
        <div class="signin">
            <div class="signin-head"><img src="/shuidian/Public/Admin/images/logo.png" alt="" class="img-circle"></div>
            <form class="form-signin" role="form">
                <input type="text" class="form-control" id="username" placeholder="用户名"/>
                <input type="password" class="form-control" id="password" placeholder="密码"/>
                <button type="button" class="btn btn-warning btn-block" id="BtnLogin">登录</button>
                <div><font color="red" id="msg"></font></div>
            </form>
        </div>
    </div>
</body>
<script>
        $(function(){
            document.onkeydown=keyDownSearch;

            function keyDownSearch(e) {
                // 兼容FF和IE和Opera
                var theEvent = e || window.event;
                var code = theEvent.keyCode || theEvent.which || theEvent.charCode;
                if (code == 13) {
                    var data = {
                        'username': $('#username').val(),
                        'password': $('#password').val()
                    };
                    //使用ajax登录
                    $.ajax({
                        'url':'/shuidian/index.php/Admin/Login/login',
                        'type':'post',
                        'data':data,
                        'dataType':'json',
                        'success':function(response){
                            console.log(response);
                            if(response.code != 10000){
                                //判断返回结果中的code ，不是10000都代表失败，提示错误信息
                                $('#msg').html(response.msg);
                                //alert(response.msg);
                                return;
                            }else{
                                //登录成功 跳转页面
                                location.href = '/shuidian/index.php/Admin/Index/index';
                            }
                        }
                    });
                    return false;
                }
                return true;
            }

            $('#BtnLogin').on('click',function(){
                if($('#username').val() == ''){
                    $('#msg').html('登录名不能为空');
                    return;
                }
                if($('#password').val() == ''){
                    $('#msg').html('密码不能为空');
                    return;
                }
                var data = {
                    'username': $('#username').val(),
                    'password': $('#password').val()
                };
                //使用ajax登录
                $.ajax({
                    'url':'/shuidian/index.php/Admin/Login/login',
                    'type':'post',
                    'data':data,
                    'dataType':'json',
                    'success':function(response){
                        console.log(response);
                        if(response.code != 10000){
                            //判断返回结果中的code ，不是10000都代表失败，提示错误信息
                            $('#msg').html(response.msg);
                            //alert(response.msg);
                            return;
                        }else{
                            //登录成功 跳转页面
                            location.href = '/shuidian/index.php/Admin/Index/index';
                        }
                    }
                });
                /*禁止F12*/
                document.onkeydown = function(){
                    if(window.event && window.event.keyCode == 123) {
                        event.keyCode=0;
                        event.returnValue=false;
                    }
                    if(window.event && window.event.keyCode == 13) {
                        window.event.keyCode = 505;
                        alert(进入);
                    }
                    if(window.event && window.event.keyCode == 8) {
                        alert(str+"\n请使用Del键进行字符的删除操作！");
                        window.event.returnValue=false;
                        alert(空格);
                    }
                    if(window.event && window.event.keyCode == 64){
                        window.event.returnValue=false;
                        alert(哈哈)
                    }
                };
                //禁止选中
                document.onselectstart = function (event){
                    if(window.event){
                        event = window.event;
                    }try{
                        var the = event.srcElement;
                        if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){
                            return false;
                        }
                        return true;
                    } catch (e) {
                        return false;
                    }
                };
                /*禁止复制*/
                document.oncontextmenu = function (event){
                    if(window.event){
                        event = window.event;
                    }try{
                        var the = event.srcElement;
                        if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){
                            return false;
                        }
                        return true;
                    }catch (e){
                        return false;
                    }
                };
                /*禁止审查元素*/
                jQuery(document).keydown(function(event) {
                    var src = (event.srcElement || event.target);
                    if (src != null && src.nodeType == 1) {
                        var nodeName = src.nodeName.toLowerCase();
                        if (nodeName == "input" || nodeName == "textarea") {
                            return true;
                        }
                    }
                    if (event.keyCode == 67 && event.ctrlKey == true) {
                        return false;
                    }
                    return true;
                });
                jQuery(document).keyup(function(event) {
                    var src = (event.srcElement || event.target);
                    if (src != null && src.nodeType == 1) {
                        var nodeName = src.nodeName.toLowerCase();
                        if (nodeName == "input" || nodeName == "textarea") {
                            return true;
                        }
                    }
                });
            });
        });
</script>
</html>