<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <link rel="stylesheet" href="/shuidian/Public/Home/css/new_file.css"/>
    <link rel="stylesheet" href="/shuidian/Public/Home/js/need/layer.css"/>
    <link rel="stylesheet" href="/shuidian/Public/Home/css/mui.min.css">
    <script type="text/javascript" src="/shuidian/Public/Home/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="/shuidian/Public/Home/js/layer.js"></script>
    <title>水表充值</title>
</head>
<body>
<!-- <header style="box-shadow: 0 1px 6px #ccc">
    <a href="/shuidian/index.php/Home/Index/index">
        <div class="_left"><img src="/shuidian/Public/Home/images/Arrow_left_icon.png"></div>
        水表充值
    </a>
</header> -->
<div class="banner" style="margin-top: 0;">
    <img src="/shuidian/Public/Home/images/shuika.jpg" width="100%" height="100%"/>
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
        <input type="hidden" id="money" disabled>
        <div class="mui-input-row">
            <label>手机号码:</label>
            <input type="tel" id="Phone" placeholder="你要充值的手机号码" maxlength="11">
        </div>
        <!-- <div class="mui-input-row">
            <label>确认号码:</label>
            <input type="tel" id="QRPhone" class="mui-input-clear" placeholder="确认充值的手机号码" maxlength="11">
        </div> --><!--
            <div class="mui-input-row">
                <label>充值金额:</label>
                <input type="number" id="Many" placeholder="金额必须为10元以上"/>
            </div>-->
        <div class="mui-input-row">
                <label>房屋地址:</label>
			     <select id='hehe'>
				 <option value='0'></option>
				 </select>
            </div>
			<div class="mui-input-row">
                <label>充值金额:</label>
                <input type="number" id="price" placeholder="输入指定充值的金额" />
            </div> 
			<div class="mui-input-row">
                <label>当前余额:</label>
                <input type="text" id="DQYE" placeholder="请先选择房屋住址" disabled/>
            </div>
        <div class="mui-input-row">
            <label>本次购水:</label>
            <input type="text" id="BCGD"  disabled/>
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
<br/>
<br/>
</body>
<script>
    $(function () {

        /*点击选择充值时添加class*/
        $(".person_wallet_recharge .ul li").click(function (e) {
            $(this).addClass("current").siblings("li").removeClass("current");
            $(this).children(".sel").show(0).parent().siblings().children(".sel").hide(0);
            var data = {'ydlx' : 2};
            $.ajax({
                'url' : '/shuidian/index.php/Home/Index/get_dj',
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
                        //成功
                        $("#money").val(response.zdj);
                        var LiManyText = $(".current h2").text();
                        var LiNewManyText = LiManyText.split("￥");/*把拿到的字符串以￥转化为数组*/
                        var LiMany = LiNewManyText[1];/*拿到这个数组为1 的下标*/
                        var zdj = $("#money").val();
                        if(zdj != ""){
                            var bcgd = LiMany / zdj;
                            var du = Math.floor(bcgd);
                            $("#BCGD").val(du +"吨");
                        }
                        $("#RechargeAmount").html(LiMany);
                            }
                        }
            });
        });
		
		        //输出价格获取购电量
        $('#price').bind('input propertychange',function(){
            //获取商品单价
            var price = $('#price').val();
            //移除选中的属性
            $('.person_wallet_recharge .ul li').removeClass('current');
            $('.person_wallet_recharge .ul li').children(".sel").hide(0);
            var zdj = $('#money').val();    //产品单价
            var bcgd = price / zdj;
            var du = Math.floor(bcgd);
            $("#BCGD").val(du +"吨");
            $("#RechargeAmount").html(price);
            
        });
        //选中充值金额框获取单价
        $("#price").click(function () {
            var price = $('#price').val();
            if(price == ""){
                var data = {'ydlx' : 2};
                $.ajax({
                    'url' : '/shuidian/index.php/Home/Index/get_dj',
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
                            //成功
                            $("#money").val(response.zdj);
                            var zdj = $('#money').val();    //产品单价
                            var bcgd = price / zdj;
                            var du = Math.floor(bcgd);
                            
                        }
                    }   
                });
            }
        });

        //获取姓名
        $('#Phone').bind('input propertychange',function(){
            var PhoneLength = $('#Phone').val();
            if(PhoneLength.length == 11){
                /*如果等于十一位*/
                var LiManyText = $(".current h2").text();
                var LiNewManyText = LiManyText.split("￥");/*把拿到的字符串以￥转化为数组*/
                var LiMany = LiNewManyText[1];
                var Phone = $.trim($("#Phone").val());
                var data = {
                        'phone' : Phone
                    };
					
                //提交订单
                $.ajax({
                    'url' : '/shuidian/index.php/Home/Index/index',
                    'type' : 'post',
                    'data' : data,
                    'dataType' : 'json',
                    'success' : function(response){
				
			
                        if(response.code == 10002){
                            layer.open({
                                content: response.msg,
                                style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                                time: 3
                            });
							
                        }else{
                            //成功
							var opt="<option value='0'>点击选择房屋住址</option>";
							for(var i=0;i<response.length;i++){
							opt+="<option value='"+response[i]['dbccbh']+"'>房屋地址："+response[i]['yhdz']+"</option>";
							}
                            
                            $("#hehe").html(opt);
                        }
                    },
					error:function(){
					alert('网络问题');
					}
                });
            }
        });

        /*点击button触发事件*/
        $("#Btn").click(function () {
            /*获取到你点击充值的钱数*/
            var ManyText = $(".current h2").text();
            // var ddd = $("#RechargeAmount").text();
            // console.log(ddd);
            var manay = $("#price").val();
            /*判断你是否选了充值钱数*/
            if(ManyText == "" && manay == ""){
                /*如果没有选择执行*/
                Many = "";
                layer.open({
                    content: '请选择你要充值的金额!',
                    style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                    time: 3
                });
                return false;
            }
			
			   var dbccbh = $("#hehe").val();
			   if(dbccbh==0){
			     layer.open({
                    content: '请选择你的住址',
                    style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                    time: 3
                });
			   }else{
			    /*获取到你点击充值的钱数*/
            $(".f-overlay").show();
            $(".addvideo").show();
			   }
           
        });

        /*取消充值*/
        $(".cal").click(function (e) {
            $(".f-overlay").hide();
            $(".addvideo").hide();
        });

        /*点击微信支付事件*/
        $("#WechatPayment").click(function(){
            var LiMany = $("#RechargeAmount").text();
            var Phone = $.trim($("#Phone").val());
			var dbccbh = $("#hehe").val();
			var pay_type = 1;
            var data = {
                    'phone' : Phone,
                    'money' : LiMany,
					'dbccbh': dbccbh
                };
            //提交订单
			if(dbccbh==0){
                layer.open({
                    content: '0',
                    style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                    time: 3
                });
                return false;
			}else{
			$.ajax({
                    'url' : '/shuidian/index.php/Home/Index/water_list',
                    'type' : 'post',
                    'data' : data,
                    'dataType' : 'json',
                    'success' : function(response){
						if(response==0){
							layer.open({
								content: '请选择房屋地址',
								style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
								time: 3
							});
						}else{
						 location.href="<?php echo U('Index/weixinpay_js');?>"
						}
                      
                    } 
                });
			}
        });

        /*点击支付宝支付事件*/
        $("#PaypalPayment").click(function(){
            var LiManyText = $(".current h2").text();
            var LiNewManyText = LiManyText.split("￥");/*把拿到的字符串以￥转化为数组*/
            var LiMany = LiNewManyText[1];
            var dbccbh = $("#hehe").val();
            var pay_type = 2;
            var data = {
                    'dbccbh' : dbccbh,
                    'money' : LiMany,
                    'pay_type' : pay_type
                };
            //提交订单
		
			if(dbccbh==0){
			layer.open({
                                content: '请选择房屋地址',
                                style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                                time: 3
                            });
		
			return false;
			}else{
			$.ajax({
                    'url' : '/shuidian/index.php/Home/Index/electric_list',
                    'type' : 'post',
                    'data' : data,
                    'dataType' : 'json',
                    'success' : function(response){
				if(response==0){
				 layer.open({
                                content: '请选择房屋地址',
                                style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                                time: 3
                            });
				}else{
				 location.href="<?php echo U('Index/zhifu');?>"
				}
                      
                    } 
                });
			}
            
        });
        
    });

</script>
</html>