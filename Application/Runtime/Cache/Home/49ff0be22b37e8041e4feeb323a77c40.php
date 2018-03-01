<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/Public/Home/css/bootstrap.css">
    <script src="/Public/Home/js/jquery-3.2.1.min.js"></script>
    <script src="/Public/Home/js/bootstrap.min.js"></script>
    <title>支付结果</title>
    <style>
        /*html,body{width: 100%;height: 100%;background-image: url("/Public/Home/images/success_bg.png");background-repeat: no-repeat;background-size: 100% 100%}*/
        .SuccImg{
            height: 160px;
        }

        .SuccImg img{
            width: 100%;
            height: 100%;
        }
        h4 {
            margin-top: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="row text-center" style="background: #19b5ff;">
                <div class="col-xs-2 navbar-brand">
                    <span class="glyphicon glyphicon-menu-left" aria-hidden="true" style="color:#ffffff;"></span>
                </div>
                <div class="col-xs-8 navbar-brand" style="color:#ffffff;">充值结果</div>
                <div class="col-xs-2 navbar-brand">
                    <div class="dropdown">
                        <span id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                              class="glyphicon glyphicon-option-vertical" aria-hidden="true"
                              style="color:#ffffff;"></span>
                        <ul class="dropdown-menu" aria-labelledby="drop2" style="left: -65px;min-width: 95px;">
                            <li><a href="http://zncanting.com/shuidian/">继续充值</a></li>
                            <li><a href="./Login_id.html">充值记录</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="http://zncanting.com/shuidian/">回到首页</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="row" style="padding-top: 55px;margin-bottom: 10px">
        <div class="col-xs-offset-3 col-xs-6 text-center SuccImg">
            <img src="/Public/Home/images/success.gif">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12" style="background-image: url('/Public/Home/images/success_bg.png');background-size: 100% 100%;padding-bottom: 70px">
            <div class="row">
                <h3 class="col-xs-12 text-center" style="color:#FFF;margin-top: 30px">充值成功!</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h4 style="margin-bottom: 15px">订单详情</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 text-right"><h4>充值类型 : </h4></div>
                <div class="col-xs-6 text-left"><h4><?php echo ($data["body"]); ?></h4></div>
            </div>
            <div class="row">
                <div class="col-xs-6 text-right"><h4>充值时间 : </h4></div>
                <div class="col-xs-6 text-left"><h4><?php echo ($data["timestamp"]); ?></h4></div>
            </div>
            <div class="row">
                <div class="col-xs-6 text-right"><h4>充值金额 : </h4></div>
                <div class="col-xs-6 text-left"><h4><?php echo ($data["total_amount"]); ?>元</h4></div>
            </div>
           <!--  <div class="row">
                <div class="col-xs-6 text-right"><h4>本次购量 : </h4></div>
                <div class="col-xs-6 text-left"><h4>888.888度</h4></div>
            </div> -->
            <div class="row">
                <div class="col-xs-6 text-right"><h4>订单编号: </h4></div>
                <div class="col-xs-6 text-left"><h4 style='word-wrap:break-word;'><?php echo ($data["trade_no"]); ?></h4></div>
				
            </div>
		
            <br><br>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 text-right">
                            <button type="button" id="JXCZ" class="btn btn-primary">&nbsp;&nbsp;继续充值&nbsp;&nbsp;
                            </button>
                        </div>
                        <div class="col-xs-6 text-left">
                            <button type="button" id="CZJL" class="btn btn-primary">&nbsp;&nbsp;充值记录&nbsp;&nbsp;
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $(function () {
        setTimeout(con, 2900);
        function con() {
            $(".SuccessDHImg").hide();
        }
        $("#JXCZ").click(function () {
            window.location.href = "http://zncanting.com/shuidian/";
        });
        $("#CZJL").click(function () {
            window.location.href = "./Login_id.html";
        });
    });
</script>
</html>