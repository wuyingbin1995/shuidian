<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {

    public function index()
    {
           echo $_SERVER['HTTP_HOST'];
    }
}

// http://www.shuidian.com:8080/alipay/return_url.php?
// total_amount=0.01                                                                   //总付款金额
// &timestamp=2018-01-10+14%3A21%3A53                                                  //付款时间
// &sign=YAFJZlgmI9S7yKsiffbqcA8AY%2BGktgqBx17n5z3
//     %2FLxRRbyYcMuDqtINlYKDbm68BWss9ol8B%2FeS0kaRLhUP9XH31v9gLCD1HEmNh0Hs
//     %2BoQJbLbCBrpE2NM63pgdZcHuEWC1s%2BViag02x8%2B5ZnOxawKhToTt6dAjAT3FPz4xNB9mY0U4PF
//     %2BeSh1cD2R70F8T7Nb0Zj6jn8erOmfLE5BCcYeanFbu4CSNi
//     %2FHJB41f5TDhSXw1ty3rx1HCHOjTX4OjBVqowwsqrlqcal3QVeSRgSP8USwOjbrp1Au4kBfM
//     %2B1S%2FKSFH1j3sSBrTtGhNYJrL%2BGdIi8IYxAyx0XW7c3gPCAA%3D%3D
// &trade_no=2018011021001004840534525360                                              //订单号
// &sign_type=RSA2                                                                     //加密方式
// &auth_app_id=2017120600413837                                                       //你的appid
// &charset=UTF8                                                                       //字符集
// &seller_id=2088821544480831                                                         //卖方ID
// &method=alipay.trade.wap.pay.return                                                 //方法
// &app_id=2017120600413837                                                            //你的appiid
// &out_trade_no=201811014216702                                                       //出单号
// &version=1.0


			//第五步、修改用户信息表
			// $res['zgdl'] = $res['zgdl'] + $data['bcgdl'];		//总够量	用户表数据+订单表本次购买量
			// $res['zjk'] = $res['zjk'] + $data['bcjk'];			//总交款	用户表数据+订单表本次交款
			// $res['gdcs'] = 	$res['gdcs'] + $data['gdcs'];		//购量次数	用户表数据+订单表购电次数
			// $res['mcgdl'] = $data['bcgdl'];						//末次购量	订单表的本次购量
			// $res['mcjk'] = 										//末次交款	订单表的本次交款
			// $res['mcgdrq'] = 									//末次购量日期	自动生成
			// $res['hhbz'] = 1;									//HHBZ 改为 1