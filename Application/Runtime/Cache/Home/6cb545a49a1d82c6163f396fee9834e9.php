<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <link rel="stylesheet" href="/Public/Home/css/new_file.css"/>
    <link rel="stylesheet" href="/Public/Home/js/need/layer.css"/>
    <link rel="stylesheet" href="/Public/Home/css/mui.min.css">
    <script type="text/javascript" src="/Public/Home/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/layer.js"></script>
    <title>充值缴费</title>
    <style>
        html,body{
            width: 100%;
            height: 100%;
            background-color: white;
        }
    </style>
</head>
<body>
    <br>
    <form class="mui-input-group mui-card" style="width: 86%;margin: 0 auto 5px;">
    <div class="mui-input-row">
        <label>表计位置:</label>
        <select id='hehe'>
            <option value="0">请选择充值地址</option>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["dbccbh"]); ?>"><?php echo ($v["yhdz"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <div class="mui-input-row">
        <label>充值类型:</label>
        <input type="text" id="ydlxbh" value="" disabled/>
        <input type="hidden" id="ydlx" value="" disabled/>
    </div>
    <div class="mui-input-row">
                <label>累计购量:</label>
                <input type="text" id="zgdl" value="" disabled/>
            </div>
            <div class="mui-input-row">
                <label>累计用量:</label>
                <input type="text" id="zydl" value="" disabled/>
            </div>
            <div class="mui-input-row">
                <label>当日余量:</label>
                <input type="text" id="dqyue" value="" disabled/>
            </div>
    </form>
    <div class="person_wallet_recharge" style="background-color: #ffffff;">
        <ul class="ul">
            <li>
                <h2>10元</h2>
                <div class="sel" style=""></div>
            </li>
            <li>
                <h2>20元</h2>
                <div class="sel" style=""></div>
            </li>
<!--             <li>
                <h2>30元</h2>
                <div class="sel" style=""></div>
            </li> -->
            <li>
                <h2>50元</h2>
                <div class="sel" style=""></div>
            </li>
            <li>
                <h2>100元</h2>
                <div class="sel" style=""></div>
            </li>
            <li>
                <h2>200元</h2>
                <div class="sel" style=""></div>
            </li>
           <!--  <li>
                <h2>300元</h2>
                <div class="sel" style=""></div>
            </li> -->
            <li>
                <h2>500元</h2>
                <div class="sel" style=""></div>
            </li>
            <div style="clear: both;"></div>
        </ul>
        <form class="mui-input-group mui-card" style="width: 91%;margin: 0 auto 5px;">
        <input type="hidden" id="money" value="0" disabled/>
            <div class="mui-input-row">
                <label>充值金额:</label>
                <input type="text" id="price" placeholder="输入指定充值的金额" />
            </div>
            <div class="mui-input-row">
                <label>本次购量:</label>
                <input type="text" id="BCGD" placeholder="请先选择充值金额" disabled/>
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
            $("#price").removeAttr('value');
            var ydlx = $('#ydlx').val();
            var data = {'ydlx' : ydlx};
            //console.log(data);return;
            $.ajax({
                'url' : '/index.php/Home/Index/get_dj',
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
                        //console.log(LiManyText);
                        var LiNewManyText = LiManyText.replace('元','');/*把拿到的字符串以￥转化为数组*/
                        var LiMany = LiNewManyText;/*拿到这个数组为1 的下标*/
                        var zdj = $("#money").val();
                        //console.log(LiMany);
                        if(zdj != ""){
                            var bcgd = LiMany / zdj;
                            var du = Math.floor(bcgd);
                            var ydlx = $('#ydlx').val();
                            $('#price').val(LiManyText);
                            if(ydlx == 1){
                                $("#BCGD").val(du + ' 度');
                                
                            }else{
                                $("#BCGD").val(du + ' 立方米');
                            }
                            
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
            var ydlx = $('#ydlx').val();
            if(ydlx == 1){
                $("#BCGD").val(du + ' 度');
            }else{
                $("#BCGD").val(du + ' 立方米');
            }
            
            $("#RechargeAmount").html(price);
        });

        //选中充值金额框获取单价
        $("#price").click(function () {
            var price = $('#price').val();
            if(price == ""){
                var ydlx = $('#ydlx').val();
                var data = {'ydlx' : ydlx};
                $.ajax({
                    'url' : '/index.php/Home/Index/get_dj',
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

        //获取总用量和余量
		$("#hehe").change(function(){
            //移除选中的属性
            $('.person_wallet_recharge .ul li').removeClass('current');
            $('.person_wallet_recharge .ul li').children(".sel").hide(0);
		    $('#BCGD').removeAttr('value');
            $("#price").removeAttr('value');
            $('#RechargeAmount').text('');
            //获取电表编号
			var eee = $("#hehe").val();
            if(eee != '0'){
                var data = {'dbccbh' : eee};
                $.ajax({
                    'url' : '/index.php/Home/Index/get_dqyue',
                    'type' : 'post',
                    'data': data,
                    'dataType' : 'json',
                    'success' : function(response){
                        if(response.code != 10000){
                            layer.open({
                                content: response.msg,
                                style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                                time: 3
                            });
                        }else{
                            if(response.ydlx == 1){
                                $('#zgdl').val(response.zgdl + ' 度');
                                $('#zydl').val(response.zydl + ' 度');
                                $('#dqyue').val(response.dqyue + ' 度');
                                $('#ydlxbh').val(response.ydlxk);
                                $('#ydlx').val(response.ydlx);
                            }else{
                                $('#zgdl').val(response.zgdl + ' 立方米');
                                $('#zydl').val(response.zydl + ' 立方米');
                                $('#dqyue').val(response.dqyue + ' 立方米');
                                $('#ydlxbh').val(response.ydlxk);
                                $('#ydlx').val(response.ydlx);
                            }
                            
                        }
                    }
                });
            }else{
                layer.open({
                    content: '请选择你要充值的地址!',
                    style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                    time: 3
                });
                $('#zgdl').val('');
                $('#zydl').val('');
                $('#dqyue').val('');
                $('#ydlxbh').val('');
                $('#ydlx').val('');

            }
		});

        /*点击button触发事件*/
        $("#Btn").click(function () {
            var dbccbh = $("#hehe").val();
            if(dbccbh==0){
                layer.open({
                    content: '请选择你要充值的住址',
                    style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                    time: 3
                });
                return;
            }
            /*获取到你点击充值的钱数*/
            var manay = $("#RechargeAmount").text();
            /*判断你是否选了充值钱数*/
            if(manay == ""){
                /*如果没有选择执行*/
                layer.open({
                    content: '请选择你要充值的金额!',
                    style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                    time: 3
                });
                return false;
            }
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
            var LiMany = $("#RechargeAmount").text();
			var dbccbh = $("#hehe").val();
            var data = {
                    'money' : LiMany,
					'dbccbh': dbccbh
                };
             //console.log(data);return;
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
                    'url' : '/index.php/Home/Index/wxzf',
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
						 location.href="<?php echo U('Index/weixinpay_js');?>";
						}
                    } 
                });
			}
        });

        /*点击支付宝支付事件*/
        $("#PaypalPayment").click(function(){
            var LiMany = $("#RechargeAmount").text();   //充值金额
            var dbccbh = $("#hehe").val();              //充值表编号
            var data = {
                    'dbccbh' : dbccbh,
                    'money' : LiMany,
                };
            //提交订单
			if(dbccbh==0){
                layer.open({
                    content: '请选择充值地址',
                    style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                    time: 3
                });
                return false;
			}else{
                $.ajax({
                    'url' : '/index.php/Home/Index/zfyz',
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