<?php 
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller
{
	//ajax登陆
    public function login()
    {	

    	//判断是否是ajax请求
    	if(IS_POST)
    	{
    		//接收ajax 请求数据
			$data = I('post.');
			//根据用户名查询数据库
			$user = D('Manager') -> where( array('username' => $data['username']) ) -> find();
			//验证用户和密码是否正确
			if($user && $user['password'] == encrypt_password($data['password']) )
			{
				//登录成功
				$role = M('role') -> where(array('role_id' => $user['role_id'])) -> find();
				session('role_info', $role);
				//设置登录标识
				session('manager_info', $user);
				//返回数据
				$return = array(
					'code' => 10000,
					'msg' => 'success'
				);
				$this -> ajaxReturn($return);
			}else
			{
				//登录失败 返回数据
				$return = array(
					'code' => 10001,
					'msg' => '用户名或密码错误'
				);
				$this -> ajaxReturn($return);
			}
    	}else
    	{
    		$this -> display();
    	}
    }
}




