<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>微信支付</title>
</head>

<!-- <body style="text-align: center;">
<button onclick="getOrder()">购买</button> -->

<jquery />
<script>
function onBridgeReady(){
    var data=<?php echo ($data); ?>;
    WeixinJSBridge.invoke(
        'getBrandWCPayRequest', data,
        function(res){
            if(res.err_msg == "get_brand_wcpay_request:ok"){    
                    alert("支付成功!");  
                    window.location.href="http://www.zncanting.com/shuidian/Index.php/Home/Index/login_id";  
                }else if(res.err_msg == "get_brand_wcpay_request:cancel"){    
                    alert("用户取消支付!");    
                }else{    
                    alert("支付失败!");    
                }    
        }
    );
}
 if (typeof WeixinJSBridge == "undefined"){
     if( document.addEventListener ){
         document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
     }else if (document.attachEvent){
         document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
         document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
     }
 }else{
      onBridgeReady();
 }
</script>
</body>
</html>