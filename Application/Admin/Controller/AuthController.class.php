<?php 
namespace Admin\Controller;
use Think\Controller;
class AuthController extends CommonController
{
	//展示权限列表
	public function auth_list()
	{	
		//判断是否是ajax请求
		if(IS_AJAX)
		{
			$id = I('post.');
			//查询数据
			$res = M('auth') -> find($id['id']);
			//判断是否查询成功
			if($res)
			{	
				//成功返回数据
				$return = array(
					'code' => 10000,
					'id' => $res['id'],
					'auth_name' => $res['auth_name'],
					'pid' => $res['pid'],
					'auth_c' => $res['auth_c'],
					'auth_a' => $res['auth_a'],
					'is_nav' => $res['is_nav'],
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
			//不是ajax请求的话展示数据
			$model = M('auth');
			//分页
			$total = $model -> count();
			$pagesize = 15;

			$page = new \Think\Page($total, $pagesize);
			//定制分页栏显示
			$page -> setConfig('prev', '上一页');
			$page -> setConfig('next', '下一页');
			$page -> setConfig('first', '首页');
			$page -> setConfig('last', '尾页');
			$page -> setConfig('theme', ' %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
			//修改page类的属性rollPage lastSuffix
			$page -> rollPage = 5;
			$page -> lastSuffix = false;
			//获取分页栏代码
			$page_html = $page -> show();
			$this -> assign('page', $page_html);
			//pid显示对应的上级权限
			$auth = $model -> alias('t1') -> field("t1.id, t2.auth_name") -> join("INNER join dbo.AUTH t2 on t1.pid = t2.id") -> select();
			$this -> assign("auth", $auth);
			//分页语句
			$data = $model -> limit($page->firstRow, $page->listRows) -> select();
			$this -> assign("data", $data);
			//获取顶级权限 用于修改和添加权限
			$top = M('Auth') -> where("pid = 0") -> select();
			$this -> assign('top', $top);
			$this->display();
		}
		
	}

	//添加权限
	public function auth_add()
	{
		if(IS_AJAX)
		{
			$data = I('post.');
			//判断权限名称是否为空
			if(empty($data['auth_name']))
			{
				$return = array(
					'code'	=>	10002,
					'msg'	=> '请填写你要增加的权限名称'
				);
				$this -> ajaxReturn($return);
			}
			$model = M('Auth');
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

	//修改权限
	public function auth_edit()
	{
    	if(IS_POST)
    	{
			$data = I('post.');
			//判断权限名称是否为空
			if(empty($data['auth_name']))
			{
				//返回数据
				$return = array(
					'code' 		=> 10002,
					'msg' => '权限名称不能为空！'
				);
				$this -> ajaxReturn($return);
			}
			//根据用户名查询数据库
			$res = M('Auth') -> save($data);
			//验证是否修改成功
			if($res)
			{
				//返回数据
				$return = array(
					'code' 		=> 10000,
					// 'id' 		=> $res['id'],
					// 'auth_name' => $res['auth_name'],
					// 'pid' 		=> $res['pid'],
					// 'auth_c' 	=> $res['auth_c'],
					// 'auth_a' 	=> $res['auth_a'],
					// 'is_nav' 	=> $res['is_nav'],
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

	//删除权限
	public function auth_del()
	{
		$id = I('post.');
		$model = M('auth');
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


