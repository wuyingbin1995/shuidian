<?php 

//手机号加密的函数
function encrypt_phone($phone){
	return substr($phone, 0, 3) . '****' . substr($phone, 7, 4);
}

//密码加密的函数
function encrypt_password($password){
	$salt = 'dfskngflmgkosmfdofdlgf';//盐 加盐
	$key = substr($salt, 3, 8);
	return md5(md5($password) . $key);
}

/**
 * 使用curl获取远程数据
 * @param  string $url url连接
 * @return string      获取到的数据
 */
function curl_get_contents($url){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);                //设置访问的url地址
    // curl_setopt($ch,CURLOPT_HEADER,1);               //是否显示头部信息
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);               //设置超时
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);   //用户访问代理 User-Agent
    curl_setopt($ch, CURLOPT_REFERER,$_SERVER['HTTP_HOST']);        //设置 referer
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);          //跟踪301
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        //返回结果
    $r=curl_exec($ch);
    curl_close($ch);
    return $r;
}

/**
 * 微信支付
 * @param  string   $openId     openid
 * @param  string   $goods      商品名称
 * @param  string   $attach     附加参数,我们可以选择传递一个参数,比如订单ID
 * @param  string   $order_sn   订单号
 * @param  string   $total_fee  金额
 */
function wxpay($openId,$goods,$order_sn,$total_fee,$attach){
    require_once APP_ROOT."/Api/wxpay/lib/WxPay.Api.php";
    require_once APP_ROOT."/Api/wxpay/payment/WxPay.JsApiPay.php";
    require_once APP_ROOT.'/Api/wxpay/payment/log.php';

    //初始化日志
    $logHandler= new CLogFileHandler(APP_ROOT."/Api/wxpay/logs/".date('Y-m-d').'.log');
    $log = Log::Init($logHandler, 15);

    $tools = new JsApiPay();
    if(empty($openId)) $openId = $tools->GetOpenid();

    $input = new WxPayUnifiedOrder();
    $input->SetBody($goods);                 //商品名称
    $input->SetAttach($attach);                  //附加参数,可填可不填,填写的话,里边字符串不能出现空格
    $input->SetOut_trade_no($order_sn);          //订单号
    $input->SetTotal_fee($total_fee);            //支付金额,单位:分
    $input->SetTime_start(date("YmdHis"));       //支付发起时间
    $input->SetTime_expire(date("YmdHis", time() + 600));//支付超时
    $input->SetGoods_tag("test3");
    //$input->SetNotify_url("http://".$_SERVER['HTTP_HOST']."/payment.php");  //支付回调验证地址
    $input->SetNotify_url("http://".$_SERVER['HTTP_HOST']."/payment.php/WexinApi/WeixinPay/notify");
    $input->SetTrade_type("JSAPI");              //支付类型
    $input->SetOpenid($openId);                  //用户openID
    $order = WxPayApi::unifiedOrder($input);    //统一下单

    $jsApiParameters = $tools->GetJsApiParameters($order);

    return $jsApiParameters;
}

/**
 * 使用curl获取远程数据
 * @param  string $url url连接
 * @return string      获取到的数据
 */
function curl_get_content($url){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);                //设置访问的url地址
    // curl_setopt($ch,CURLOPT_HEADER,1);               //是否显示头部信息
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);               //设置超时
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);   //用户访问代理 User-Agent
    curl_setopt($ch, CURLOPT_REFERER,$_SERVER['HTTP_HOST']);        //设置 referer
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);          //跟踪301
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        //返回结果
    $r=curl_exec($ch);
    curl_close($ch);
    return $r;
}