<?php 
namespace Admin\Controller;

class ManagerController extends CommonController
{
	public function manager_list()
	{
		if(IS_POST)
		{
			$id = I('post.');
			//查询数据
			$res = M('manager') -> alias('t1') -> field("t1.*, t2.role_name") -> join("left join dbo.ROLE t2 on t1.role_id = t2.role_id") ->  find($id['id']);
			//判断是否查询成功
			if($res)
			{	
				//成功返回数据
				$return = array(
					'code' => 10000,
					'id' => $res['id'],
					'nickname' => $res['nickname'],
					'role_id' => $res['role_id'],
					'username' => $res['username'],
					'status' => $res['status'],
					'msg' => 'success'
				);
				$this -> ajaxReturn($return);
			}else
			{	
				//失败返回失败数据
				$return = array(
					'code' => 10001,
					'msg' => '获取失败！'
				);
				$this -> ajaxReturn($return);
			}
		}else
		{
			$model = D('manager');
			$data = $model -> alias('t1') -> field("t1.*, t2.role_name") -> join("left join dbo.ROLE t2 on t1.role_id = t2.role_id") -> select();
			$this -> assign('data', $data);
			$role = M('role') -> select();
			$this -> assign('role', $role);
			$this -> display();
		}
		
	}

	public function manager_edit()
	{
		if(IS_POST)
    	{
			$data = I('post.');
			//判断权限名称是否为空
			if(empty($data['username']))
			{
				//返回数据
				$return = array(
					'code' 		=> 10002,
					'msg' => '用户账户不能为空！'
				);
				$this -> ajaxReturn($return);
			}
			if(empty($data['password']))
			{
				//返回数据
				$return = array(
					'code' 		=> 10003,
					'msg' => '用户密码不能为空！'
				);
				$this -> ajaxReturn($return);
			}
			$data['password'] = encrypt_password($data['password']);
			//根据用户名查询数据库
			$res = M('manager') -> save($data);
			//验证是否修改成功
			if($res)
			{
				//返回数据
				$return = array(
					'code' 		=> 10000,
					'msg' => 'success'
				);
				$this -> ajaxReturn($return);
			}else
			{
				//登录失败 返回数据
				$return = array(
					'code' => 10001,
					'msg' => '修改失败！'
				);
				$this -> ajaxReturn($return);
			}
    	}
	}

	public function manager_add()
	{
		if(IS_POST)
		{
			$data = I('post.');
			//判断权限名称是否为空
			if(empty($data['username']))
			{
				$return = array(
					'code'	=>	10002,
					'msg'	=> '用户账号不能为空'
				);
				$this -> ajaxReturn($return);
			}
			if(empty($data['password']))
			{
				$return = array(
					'code'	=>	10003,
					'msg'	=> '用户密码不能为空！'
				);
				$this -> ajaxReturn($return);
			}
			$model = M('manager');
			$data['password'] = encrypt_password($data['password']);
			$res = $model -> add($data);
			if($res)
			{
				$return = array(
					'code'	=> 10000,
					'msg'	=> 'success'
				);
				$this -> ajaxReturn($return);
			}else
			{
				$return = array(
					'code'	=>	10001,
					'msg'	=> '添加权限失败！'
				);
				$this -> ajaxReturn($return);
			}
		}
	}

	public function manager_del()
	{
		$id = I('post.');
		$model = M('manager');
		$res = $model -> delete($id['id']);
		if($res){
			$return = array(
				'code' => 10000,
				'msg' => 'success'
			);
			$this -> ajaxReturn($return);
		}else{
			$return = array(
				'code' => 10001,
				'msg' => '删除失败！'
			);
			$this -> ajaxReturn($return);
		}
	}
}





