<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
		<link rel="stylesheet" href="/Public/Home/css/new_file.css" />
		<link rel="stylesheet" href="/Public/Home/js/need/layer.css" />
        <link rel="stylesheet" href="/Public/Home/css/mui.min.css">
		<script type="text/javascript" src="/Public/Home/js/jquery-1.8.2.min.js" ></script>
		<script type="text/javascript" src="/Public/Home/js/layer.js" ></script>
		<title>充值</title>
	</head>
	<body>
		<header style="box-shadow: 0 1px 6px #ccc">
			<a href="./SelectCategory.html">
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
                </div>
                <div class="mui-input-row">
                    <label>充值金额:</label>
                    <input type="number" id="Many" placeholder="金额必须为10元以上"/>
                </div>
                <div class="mui-input-row">
                    <label>用户姓名:</label>
                    <input type="number" id="UserName" placeholder="请先填写手机号码" disabled/>
                </div>
                <div class="mui-input-row">
                    <label>账户余额:</label>
                    <input type="number" id="SYMany" placeholder="请先填写手机号码" disabled/>
                </div>
            </form>
            <div class="agreement"><p>点击确定，即表示您已经确认充值信息!</p></div>
            <div id="Btn" class="botton">确定</div>
            <!--<div class="nav">-->
            	<!--<ul>-->
            		<!--<li><a>余额:200元</a></li>-->
            		<!--<li><a>活动规则</a></li>-->
            		<!--<li style="border-right: none;"><a>我的奖品</a></li>-->
            	<!--</ul>-->
            <!--</div>-->
            <div class="f-overlay"></div>
            <div class="addvideo" style="display: none;">
            	<h3>本次充值金额:<span id="RechargeAmount">2000</span>元</h3>
	            <ul>
	            	<li><a id="WechatPayment">微信支付</a></li>
	            	<li><a id="PaypalPayment">支付宝支付</a></li>
	            	<li class="cal">取消</li>
	            </ul>
            </div>
		</div>
	</body>
    <script>
        $(function(){
            var a=10;
            $(".person_wallet_recharge .ul li").click(function(e){
                $(this).addClass("current").siblings("li").removeClass("current");
                $(this).children(".sel").show(0).parent().siblings().children(".sel").hide(0);
                setTimeout(ManyCurrentH2Time,1);
                function ManyCurrentH2Time() {
                    var ManyCurrentH2 = $(".current h2").text();
                    $("#Many").attr({"disabled":"disabled","placeholder":ManyCurrentH2+"元"});
                }
            });

            $(".botton").click(function(e){
                var Many = $("#Many").val();
                if(!$(".person_wallet_recharge .ul li").hasClass('current') && Many ==''){
                    layer.open({
                        content: '请输入或选择金额',
                        style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                        time:3
                    });
                    return false;
                }
                if(!$(".person_wallet_recharge .ul li").hasClass('current')){
                    if( Many < a){
                        layer.open({
                            content: '金额必须是10元以上',
                            style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                            time:3
                        });
                        return false;
                    }
                }
                var CurrentH2 = $(".current h2").text();
                if(CurrentH2 == ""){
                    $("#RechargeAmount").html(Many);
                }else{
                    $("#RechargeAmount").html(CurrentH2);
                }
                $(".f-overlay").show();
                $(".addvideo").show();
            });
            $(".cal").click(function(e){
                $(".f-overlay").hide();
                $(".addvideo").hide();
            })
        });
    </script>
</html>