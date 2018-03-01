<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <link rel="stylesheet" href="/Public/Home/css/new_file.css"/>
    <link rel="stylesheet" href="/Public/Home/js/need/layer.css"/>
    <link rel="stylesheet" href="/Public/Home/css/mui.min.css">
    <script type="text/javascript" src="/Public/Home/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="/Public/Home/js/layer.js"></script>
    <title>充值</title>
</head>
<body>
<header style="box-shadow: 0 1px 6px #ccc">
    <a href="/index.php/Home/Index/index">
        <div class="_left"><img src="/Public/Home/images/Arrow_left_icon.png"></div>
        水表充值
    </a>
</header>
<div class="banner">
    <img src="/Public/Home/images/banner.png" width="100%" height="100%"/>
</div>
<div class="person_wallet_recharge">
    <ul class="ul">
        <li>
            <h2>￥10</h2>
            <div class="sel" style=""></div>
        </li>
        <li>
            <h2>￥20</h2>
            <div class="sel" style=""></div>
        </li>
        <li>
            <h2>￥30</h2>
            <div class="sel" style=""></div>
        </li>
        <li>
            <h2>￥50</h2>
            <div class="sel" style=""></div>
        </li>
        <li>
            <h2>￥100</h2>
            <div class="sel" style=""></div>
        </li>
        <li>
            <h2>￥300</h2>
            <div class="sel" style=""></div>
        </li>
        <div style="clear: both;"></div>
    </ul>
    <form class="mui-input-group mui-card" style="width: 91%;margin: 0 auto 5px;">
        <div class="mui-input-row">
            <label>手机号码:</label>
            <input type="tel" id="Phone" placeholder="你要充值的手机号码" maxlength="11">
        </div>
        <div class="mui-input-row">
            <label>确认号码:</label>
            <input type="tel" id="QRPhone" class="mui-input-clear" placeholder="确认充值的手机号码" maxlength="11">
        </div><!--
            <div class="mui-input-row">
                <label>充值金额:</label>
                <input type="number" id="Many" placeholder="金额必须为10元以上"/>
            </div>-->
        <div class="mui-input-row">
            <label>用户姓名:</label>
            <input type="text" id="UserName"  disabled/>
        </div>
<!--         <div class="mui-input-row">
            <label>账户余额:</label>
            <input type="number" id="SYMany"  disabled/>
        </div> -->
        <div class="mui-input-row">
            <label>本次购电:</label>
            <input type="number" id="BCGD"  disabled/>
        </div>
    </form>
    <div class="agreement"><p>点击确定，即表示您已经确认充值信息!</p></div>
    <div id="Btn" class="botton" disabled="disabled">确定</div>
    <div class="f-overlay"></div>
    <div class="addvideo" style="display: none;">
        <h3>本次充值金额:<span id="RechargeAmount"></span>元</h3>
        <ul>
            <li><a id="WechatPayment">微信支付</a></li>
            <li><a id="PaypalPayment">支付宝支付</a></li>
            <li class="cal">取消</li>
        </ul>
    </div>
</div>
</body>
<script>
    $(function () {
        /*点击选择充值时添加class*/
        $(".person_wallet_recharge .ul li").click(function (e) {
            $(this).addClass("current").siblings("li").removeClass("current");
            $(this).children(".sel").show(0).parent().siblings().children(".sel").hide(0);

            setTimeout(SettimeoutMany,1);
            function SettimeoutMany() {
                var LiManyText = $(".current h2").text();
                var LiNewManyText = LiManyText.split("￥");/*把拿到的字符串以￥转化为数组*/
                var LiMany = LiNewManyText[1];/*拿到这个数组为1 的下标*/
                $("#RechargeAmount").html(LiMany);
            }
        });
        /*离开第一次输入的手机号码*/
        $("#Phone").blur(function(){
            /*获取值并去掉空格*/
            Phone = $.trim($("#Phone").val());
            /*判断第一次输入的手机号码是否为十一位*/
            if(Phone.length == 11){
                /*如果等于十一位*/
                /*离开第二次输入的手机号码*/
                $("#QRPhone").blur(function(){
                    var LiManyText = $(".current h2").text();
                    var LiNewManyText = LiManyText.split("￥");/*把拿到的字符串以￥转化为数组*/
                    var LiMany = LiNewManyText[1];
                    var Phone = $.trim($("#Phone").val());
                    var data = {
                            'phone' : Phone,
                            'money' : LiMany,
                        };
                    //提交订单
                    $.ajax({
                        'url' : '/index.php/Home/Index/index',
                        'type' : 'post',
                        'data' : data,
                        'dataType' : 'json',
                        'success' : function(response){
                            if(response.code != 10000){
                                console.log(response);
                                return;
                            }else{
                                //成功
                                $("#UserName").val(response.name);
                                $("#BCGD").val(response.bcgdl);
                            }
                        }
                    });

                    /*获取值并去掉空格*/
                    QRPhone = $.trim($("#QRPhone").val());
                    /*判断两次的长度和手机号码是否相等*/
                    if( Phone.length == QRPhone.length && Phone ==QRPhone ){
                        var TwoLiManyText = $(".current h2").text();
                        if(TwoLiManyText == ""){
                            layer.open({
                                content: '请选择充值金额!',
                                style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                                time: 3
                            });
                        }else{
                            
                            }
                    }else{
                        /*如果不一样*/
                        layer.open({
                            content: '两次输入的手机号码不一样',
                            style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                            time: 3
                        });
                    }
                })
            }else{
                /*如果不等于十一位*/
                layer.open({
                    content: '手机号码格式不正确!',
                    style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                    time: 3
                });
                return false;
            }
        });
        /*点击button触发事件*/
        $("#Btn").click(function () {
            /*获取到你点击充值的钱数*/
            $(".f-overlay").show();
            $(".addvideo").show();
        });
        /*取消充值*/
        $(".cal").click(function (e) {
            $(".f-overlay").hide();
            $(".addvideo").hide();
        });
        /*点击微信支付事件*/
        $("#WechatPayment").click(function(){
            var LiManyText = $(".current h2").text();
            var LiNewManyText = LiManyText.split("￥");/*把拿到的字符串以￥转化为数组*/
            var LiMany = LiNewManyText[1];
            var Phone = $.trim($("#Phone").val());
            var pay_type = 0;
            var data = {
                    'phone' : Phone,
                    'money' : LiMany,
                    'pay_type' : pay_type
                };
                // console.log(data);
                // return;
            //提交订单
            $.ajax({
                    'url' : '/index.php/Home/Water/water_list',
                    'type' : 'post',
                    'data' : data,
                    'dataType' : 'json',
                    'success' : function(response){
                        if(response.code != 10000){
                            console.log(response);
                            return;
                        }else{
                            //成功
                            // $("#UserName").val(response.name);
                            // $("#BCGD").val(response.bcgdl);
                        }
                    } 
                });
        });
        /*点击支付宝支付事件*/
        $("#PaypalPayment").click(function(){

        });
    });
</script>
</html>