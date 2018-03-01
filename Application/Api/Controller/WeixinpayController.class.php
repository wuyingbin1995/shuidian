<?php
namespace Api\Controller;
use Think\Controller;
/**
 * 微信支付
 */
class WeixinpayController extends Controller{
    /**
     * 公众号支付 必须以get形式传递 out_trade_no 参数
     * 示例请看 /Application/Home/Controller/IndexController.class.php
     * 中的wexinpay_js方法
     */
    public function pay(){
        // 导入微信支付sdk
        Vendor('Weixinpay.Weixinpay');
        $wxpay=new \Weixinpay();
        // 获取jssdk需要用到的数据
        $data=$wxpay->getParameters();
		    //dump($data);die;
        // 将数据分配到前台页面
        $assign=array(
            'data'=>json_encode($data)
            );

		//dump($assign);die;
        $this->assign($assign);
        $this->display();
    }

    /**
     * notify_url接收页面
     */
    public function notify(){
        // 获取xml
        $xml=file_get_contents('php://input', 'r');
		//file_put_contents(dirname(__FILE__).'/xml.txt',$xml);
	
        //转成php数组 禁止引用外部xml实体
        libxml_disable_entity_loader(true);
        $zfhd= json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);  

		    file_put_contents(dirname(__FILE__).'/data.txt',$data);

        // 导入微信支付sdk
        Vendor('Weixinpay.Weixinpay');
        $wxpay=new \Weixinpay();
        $result=$wxpay->notify();
        if ($result) {
            // 验证成功 修改数据库的订单状态等 $result['out_trade_no']为订单id
			
			//查询该订单是插入到订单表
            $pd=M('gdjlk')->where(array('ddbh'=>$zfhd['transaction_id'])) -> find();
			 //file_put_contents(dirname(__FILE__).'/gdjlk.txt',$pd);
            //没有插入的话
            if(empty($pd))
            {
                  //从返回的订单编号中获取电表编号
                  $zfhd['out_trade_no']=explode('-',$zfhd['out_trade_no']);
                  //查询该电表编号的数据 获取用电类型
                  $res = M('maindbf') -> where(array('dbccbh'=>$zfhd['out_trade_no'][1])) -> find();
                  //查询该用电类型商品的单价
                  $ydlxk = M('ydlxk') -> where(array('ydlxbh'=>$res['ydlx'])) -> find();
                  //获取该商品的单价
                  $zdj = $ydlxk['zdj'];

                  //第三步、计算出量本次购买的量     本次交款/总单价（$zdj） =  本次购买的量;
                  $bcgdl = ($zfhd['total_fee']/100) / $zdj;         //本次购电量
                  $bcgdl= $bcgdl*100;
                  $bcgdl = floor($bcgdl);
                  $bcgdl = $bcgdl/100;
                  $bcgdrq=date('Y-m-d H:i:s', time());
                  //dump($bcgdrq);die;
                  $bcjk = $zfhd['total_fee'] / 100;
                  //第四步、订单表插入数据
                  //组装要插入的数据
                  $gdcs=$res['gdcs']+1;                           //购电次数                              
                  $data = array(
                        'yhbh'      => $res['yhbh'],            //用户编号
                        'ydlx'      => $res['ydlx'],            //用量类型
                        'yhxm'      => $res['yhxm'],            //用户姓名
                        'yhdz'      => $res['yhdz'],            //用户地址
                        'yhdh'      => $res['yhdh'],            //用户电话
                        'bcgdl'     => $bcgdl,                  //本次购量 
                        'bcjk'      => $bcjk,   //本次交款                  
                        'bcgdrq'    => $bcgdrq,    //本次购量日期 
                        'zgdl'      => $res['zgdl'] + $bcgdl,   //总购量
                        'zjk'       => $res['zjk'] + $bcjk,    //总交款
                        'zdj'       => $res['zdj'],             //单价            
                        'yuer'      => $res['yuer']+ $bcgdl,    //余额       
                        'gdcs'      => $gdcs,                   //购量次数      GDCS        
                        'btbh1'     => $res['btbh1'],
                        'dbccbh'    => $res['dbccbh'],          //dbccbh-表出厂编号
                        'zflx'      => 1,                       //支付类型  
                        'ddbh'      => $zfhd['transaction_id']        //订单编号
                  );
                 
                  
      
                  //修改用户表
                  $data_g=array(
                        'zgdl'      => $res['zgdl'] + $data['bcgdl'],         //总够量 用户表数据+订单表本次购买量
                        'zjk'       => $res['zjk'] + $data['bcjk'],                 //总交款 用户表数据+订单表本次交款
                        'gdcs'      => $gdcs,                                 //购量次数      用户表数据+订单表购电次数
                        'mcgdl' => $data['bcgdl'],                                  //末次购量      订单表的本次购量
                        'mcjk'      => $data['bcjk'],                               //末次交款      订单表的本次交款
                        'mcgdrq'=> $data['bcgdrq'],                                 //末次购量日期    自动生成
                        'hhbz'      => 1                                                  //HHBZ 改为 1
                  );
                  //插入订单表
                  $res_pd = M('gdjlk') -> add($data);
                  
                  //修改用户表
                  $maindbf_g=M('maindbf') -> where(array('dbccbh'=>$zfhd['out_trade_no'][1]))->data($data_g) -> save();
                  //返回成功信息
                $str = "<xml>
                        <return_code><![CDATA[SUCCESS]]></return_code>
                        <return_msg><![CDATA[OK]]></return_msg>
                        </xml>";
				      echo $str;

            }else{
                $str = "<xml>
                        <return_code><![CDATA[SUCCESS]]></return_code>
                        <return_msg><![CDATA[OK]]></return_msg>
                        </xml>";
                echo $str;
			}
		  }
    }
}