<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{

    //充值登陆
    public function login_cz()
    {
        if(IS_POST){
            $tel = I('name');
            $yhdh = I('phone');
            //查询
            $res = M('maindbf')->where(array('yhdh'=>I('phone'),'yhxm'=>I('name')))->select();
            if(empty($res))
            {
                $return = array(
                    'code' => 10001,
                    'msg' => '姓名或手机错误'
                );
                $this -> ajaxReturn($return);
            }else{
                session('user_info', $res);
                $return = array(
                    'code' => 10000,
                    'msg' => 'success'
                );
                $this -> ajaxReturn($return);
            }
        }else{
           $this -> display();
        }
    }

    //选择充值类型页面
    public function index()
    {   
        //是否是查询用户地址
        if(IS_POST)
        {   
            //获取查询信息 
            $tel = I('phone');      //手机号
            $ydlx= session('shuidian'); //用电类型 在电费页面的方法生成
            //查询			
            $res = M('maindbf')->field('yhdz,yhbh,dbccbh') -> where(array('yhdh'=>$tel,'ydlx'=>$ydlx)) -> select();
            //判断查询
            if(empty($res))
            {
                //为空的话返回错误信息
                $array = array(
                    'code' => 10002,
                    'msg' => '该地址不存在'
                );
                $this -> ajaxReturn($array);
            }else
            {
                //不为空返回查询出来的信息
                $this -> ajaxReturn($res);
            }
        }else
        {
            //不是查询用户地址就展示页面
            $this -> display();
        }	
    }

    //微信公众号支付
    public function wxzf()
    {   
		//微信支付
		if(IS_POST){
			//获取查询信息
			$dbccbh = I('dbccbh'); 	 //表编号
            //$money =I('money')*100;    //缴费金额
            $money = 1;    //缴费金额
			
            //判断表编号是否为空
            if($dbccbh==0)
            {
                //为空返回错误信息
			   $this -> ajaxReturn(0);
            }else
            {
                //不为空，保存到session，返回成功信息
                session('dbccbh',$dbccbh);	//表编号
                session('money',$money);	//RMB
                $this -> ajaxReturn(1);
		   }
		}else{
			$this -> display();
		}
    }
	
	//支付回调
	public function zfhd()
	{
        //接收返回的post信息
        $zfhd=$_POST;
        //查询该订单是插入到订单表
        $pd=M('gdjlk')->where(array('ddbh'=>$zfhd['trade_no'])) -> count();
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
            $bcgdl = $zfhd['total_amount'] / $zdj;         //本次购电量
    		$bcgdl= $bcgdl*100;
            $bcgdl = floor($bcgdl);
            $bcgdl = $bcgdl/100;
            $bcgdrq = date('Y-m-d H:i:s');  //本次购量日期
            //第四步、订单表插入数据
            //组装要插入的数据
    		$gdcs=$res['gdcs']+1;			            //购电次数	      		      
            $data = array(
                'yhbh'      => $res['yhbh'],            //用户编号
                'ydlx'      => $res['ydlx'],            //用量类型
                'yhxm'      => $res['yhxm'],            //用户姓名
                'yhdz'      => $res['yhdz'],            //用户地址
                'yhdh'      => $res['yhdh'],            //用户电话
                'bcgdl'     => $bcgdl,                  //本次购量 
                'bcjk'      => $zfhd['total_amount'],   //本次交款                  
                'bcgdrq'    => $zfhd['notify_time'],    //本次购量日期 
                'zgdl'      => $res['zgdl'] + $bcgdl,   //总购量
                'zjk'       => $res['zjk'] + $zfhd['total_amount'],    //总交款
                'zdj'       => $res['zdj'],             //单价            
                'yuer'      => $res['yuer']+ $bcgdl,    //余额       
                'gdcs'      => $gdcs,                   //购量次数      GDCS        
                'btbh1'     => $res['btbh1'],
                'dbccbh'    => $res['dbccbh'],          //dbccbh-表出厂编号
                'zflx'      => 2,                       //支付类型  
                'ddbh'      => $zfhd['trade_no']        //订单编号

            );
	
            //添加订单到订单表
        	$data_g=array(
        		'zgdl' 	=> $res['zgdl'] + $data['bcgdl'],		//总够量	用户表数据+订单表本次购买量
        		'zjk' 	=> $res['zjk'] + $data['bcjk'],			//总交款	用户表数据+订单表本次交款
        		'gdcs' 	=> $gdcs,		                		//购量次数	用户表数据+订单表购电次数
        		'mcgdl' => $data['bcgdl'],						//末次购量	订单表的本次购量
        		'mcjk' 	=> $data['bcjk'],						//末次交款	订单表的本次交款
        		'mcgdrq'=> $data['bcgdrq'],						//末次购量日期	自动生成
        		'hhbz' 	=> 1									//HHBZ 改为 1
        	);
            //插入订单表
        	$res_pd = M('gdjlk') -> add($data);
            //修改用户表
        	$maindbf_g=M('maindbf') -> where(array('dbccbh'=>$zfhd['out_trade_no'][1]))->data($data_g) -> save();
            //返回成功信息
        	echo "success";	
        }else
        {
            //插入的话返回成功信息
            echo "success";	
        }
		       
	}

    //支付宝支付
    public function zhifu()
    {
	    //获取查询信息        
        $dbccbh = session('dbccbh');      //表编号
        $money = session('money');    //缴费金额
        //查询 
        $res = M('maindbf') -> where(array('dbccbh'=>$dbccbh)) -> find();
        //获取对应表编号的支付类型
		$shuidian= $res['ydlx'];
        //判断查询出来的数据是否为空
        if(empty($res))
        {
			//为空且支付类型等于1的话返回错误信息
			if( $shuidian==1)
            {
				$this->error('您无法充值电费');
            //为空且支付类型等于2的话返回错误信息
			}elseif($shuidian==2)
            {
				$this->error('您无法充值水费');
            //否则提升错误信息
			}else
            {
				$this->error('您无法充值');	
			}
        }else
        {
            //不为空且缴费类型等于1的话组装发送商品的描述为充值电费
            if( $shuidian==1)
            {		
				$chongzhi='充值电费';
            //不为空且缴费类型等于2的话组装发送商品的描述为充值电费
			}elseif($shuidian==2)
            {		
				$chongzhi='充值水费';
            //否则组装发送的商品描述为充值中
			}else
            {			
				$chongzhi='充值中';
			}
			$time=time();    //订单号
            //发送支付链接    
            /**
             * 支付宝支付demo地址
             * 订单编号：WIDout_trade_no = 时间戳-电表编号；    
             * 商品描述：WIDsubject = 商品描述；    
             * 缴费金额：WIDtotal_amount = 缴费金额
            **/
			echo curlPost("http://zncanting.com/alipay/wappay/pay.php",array('WIDout_trade_no'=>$time.'-'. $dbccbh,'WIDsubject'=>$chongzhi,'WIDtotal_amount'=> $money));
		}
    } 

    //支付宝支付处理
    public function zfyz()
    {
        //判断是否是Ajaxpost提交
        if(IS_POST)
        {
            //获取查询信息
			$dbccbh = I('dbccbh'); 	 //表编号
            //$money =I('money');    //缴费金额
            $money = 0.01;    //缴费金额
            //判断表编号是否为空
            if($dbccbh==0)
            {
                //为空返回错误信息
			   $this -> ajaxReturn(0);
            }else
            {
                //不为空，保存到session，返回成功信息
                session('dbccbh',$dbccbh);	//表编号
                session('money',$money);	//RMB
                $this -> ajaxReturn(1);
		   }
        // }else
        // {
        //     //不是Ajaxpost提交
        //     session('shuidian',I('shuidian'));  //获取get里面的水电类型
        //     //等于1
        //     if(I('shuidian')==1)
        //     {
        //         //跳转到电费充值页面
        //         $this -> display('index/electric_list');
        //     //等于2
        //     }elseif(I('shuidian')==2)
        //     {
        //         //跳转到水费充值页面
        //         $this -> display('index/water_list');
        //     }else
        //     {	
        //         //其他参数提示错误信息
        //         $this -> error('错误提示：找程序员！');
        //     }
		}
    }

    //获取单价
    public function get_dj()
    {   
        //判断是否是ajaxpost提交
        if(IS_POST)
        {
            //获取用电量类型
            $ydlx = I('ydlx');
            //查询单价
            $res = M('ydlxk') -> where("YDLXBH = $ydlx") -> find();
            //判断商品是否存在
            if(!$res)
            {
                //不存在返回错误信息
                $return = array(
                    'code' => 10001,
                    'msg' => '获取单价失败'
                );
                $this -> ajaxReturn($return);
            }else
            {
                //成功，返回单价和成功信息
                $return = array(
                    'code' => 10000,
                    'msg' => 'success',
                    'zdj' => $res['zdj']
                );
                $this -> ajaxReturn($return);
            }
        }
    }

    //查询登陆
	public function login_id()
    {
        $this -> display();
	}

    //登陆判断
    public function login_denglu()
    {   
        //获取查询信息
        $tel = I('phone');      //手机
        $name = I('name');      //姓名
        //查询
        $res = M('maindbf')->where(array('yhdh'=>I('phone'),'yhxm'=>I('name')))->select();
        //判断是否为空
        if(empty($res))
        {
            //登陆失败返回错误信息
            $return = array(
                'code' => 10001,
                'msg' => '姓名或手机错误'
            );
            $this -> ajaxReturn($return);
        }else
        {
            //登陆成功
            session('user_info',$res); //把用户电话存放到session中方便记录查询
            //session('user_yhdz',$res);  //把用户地址存放到session中方便记录查询
            //返回登陆成功信息
            $return = array(
                'code' => 10000,
                'msg' => 'success'
            );
            $this -> ajaxReturn($return);
        }
    }

    //充值页面
    public function recharge()
    {
        $name = session("user_info");
        $this -> assign('data', $name);
        $this -> display();
    }

    //获取当前余额
    public function get_dqyue()
    {
        if(IS_POST){
            $data = I('post.dbccbh');
            $res = M('maindbf') -> where(array('dbccbh' => $data)) -> find();
            $ydlxk = M('ydlxk') -> where(array('ydlxbh' => $res['ydlx'])) -> find();

            $dqyue = $res['zgdl'] - $res['zydl'];
            if(!$res){
                $return = array(
                    'code' => 10001,
                    'msg' => '该住址不存在'
                );
                $this -> ajaxReturn($return);
            }else{
                $return = array(
                    'code' => 10000,
                    'zgdl' => $res['zgdl'],
                    'zydl' => $res['zydl'],
                    'dqyue' => $dqyue,
                    'ydlxk' => $ydlxk['ydlxmc'],
                    'ydlx' => $res['ydlx'],
                    'msg' => 'success'
                );
                $this -> ajaxReturn($return);
            }
        }
    }

    //充值记录
    public function record()
    {
        //获取查询信息 在login_denglu控制器
        $tel = session('user_info');
        $yhdh = $tel[0]['yhdh'];
        $yhxm = $tel[0]['yhxm'];
        //dump($yhdh);die;
        //$user_yhdz = session('user_yhdz');
        //查询
        $res = M('gdjlk') -> where(array('yhdh'=>$yhdh,'yhxm'=>$yhxm)) -> order('BCGDRQ desc') -> select();
        //时间戳转化为时间
        for($i=0;$i<count($res);$i++)
        {
            $res[$i]['bcgdrq'] = date('Y-m-d',strtotime($res[$i]['bcgdrq']));
        }
        //数组按月归档
        for($n=0;$n<count($res);$n++)                                                   //循环第一层数据
        {    
            if( $res[$n] != '')                                                         //第一层数据不为空的话，阻止打空的数据进行第二次循环
            {
                for($a=$n;$a<count($res);$a++)                                          //进入第二层循环
                {         
                    $data_n = strtotime($res[$n]['bcgdrq']);                            //转化第一层循环数据'购电日期'为时间戳
                    $data_a = strtotime($res[$a]['bcgdrq']);                            //转化第二层循环数据'购电日期'为时间戳
                    if(date('Y',$data_n) == date('Y',$data_a))                          //第一层'购电日期'的年等于第二层'购电日期'的年的话 ↓
                    {    
                        if(date('m',$data_n) == date('m',$data_a))                      //第二层'购电日期'的月等于第二层'购电日期'的月的话 ↓
                        {     
                            $data1[date('Y',$data_n)][date('m',$data_n)][]= $res[$a] ;  //把判断完的数据赋值到新数组$data1[年][月][]里面
                            $res[$a] ='';                                               //把源数据赋值为空 进入第二次循环，重新判断
                        }
                    }
                }
            }
        }
        $name = session("user_info");
        $this -> assign('data', $name);
        $ydlxk = M('ydlxk') -> select();
        //dump($ydlxk);die;
        $this -> assign('ydlxk', $ydlxk);
        $this -> assign("data1", $data1);
        $this -> display('index/Record');
    }

    //详情
    public function detail()
    {   
        //获取查询信息
		$tel = session('user_info'); //获取手机号     在登陆页面已获取
        $tel = $tel[0]['yhdh'];
        $id = I('id');  //获取地址栏传过来的订单编号
        //查询
        $data = M('gdjlk') -> where(array('ddbh' => $id, 'yhdh' => $tel)) -> select();
        //赋值到模板变量
		$this -> assign('gdjlk', $data);
        $this -> display();
    }

    //缴费成功页面
    public function success()
    {
        //获取同步过来的数据
		$zfhd=$_GET;
		$zfhd['out_trade_no']=explode('-',$zfhd['out_trade_no']);     //分解订单号获取电表编号  订单号组成：时间戳-电表编号
        //查询缴费的类型
		$res = M('maindbf')->field('ydlx') -> where(array('dbccbh'=>$zfhd['out_trade_no'][1])) -> find();     //查询缴费类型
        //判断缴费类型
        if($res['ydlx']==1)
        {
            $zfhd['body']='电表充值';
        }elseif($res['ydlx']==2)
        {
            $zfhd['body']='水表充值';
        }
        //把获取到的数据赋值到模板变量
		$this->assign('data',$zfhd);
        $this -> display();
    }

    /**
     * 微信 公众号jssdk支付
     */
    public function weixinpay_js(){
        // 此处根据实际业务情况生成订单 然后拿着订单去支付
		$dbccbh = session('dbccbh');
		$money = session('money');
        // 用时间戳虚拟一个订单号  （请根据实际业务更改）
        $out_trade_no=time().'-'.$dbccbh.'-'.$money;
        // 组合url
        $url=U('Api/Weixinpay/pay',array('out_trade_no'=>$out_trade_no),false);
        // 前往支付
        redirect($url);
    }

}