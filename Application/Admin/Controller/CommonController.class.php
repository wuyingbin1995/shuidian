<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller
{
	//登录判断
	public function __construct()
	{
		//先调用父类构造函数
		parent::__construct();
		//判断登录
		if(!session('?manager_info'))
		{
			//没有登录，跳转到登录页面
			// echo '没有登录';die;
			$this -> redirect('Admin/Login/login');
		}
		//调用getnav方法
		$this -> getnav();
		//检测是否拥有当前页面的访问权限
		$this -> checkauth();
	}

	//用于获取左侧菜单权限
	public function getnav()
	{
		//判断session中有没有菜单权限
		if(session('?top') && session('?second'))
		{
			return;
		}
		//获取当前登录管理员的role_id
		$role_id = session('manager_info.role_id');
		if($role_id == 1)
		{
			//超级管理员 
			//查询顶级权限
			$top = M('Auth') -> where("pid = 0 and is_nav = 1") -> select();
			//查询二级权限
			$second = M('Auth') -> where("pid > 0 and is_nav = 1") -> select();
		}else
		{
			//查询角色信息
			$role = M('role') -> where(array('role_id' => $role_id)) -> find();
			//获取角色信息中的role_auth_ids
			$role_auth_ids = $role['role_auth_ids'];
			//查询拥有的权限的详细信息
			//拥有的顶级权限
			$top = M('Auth') -> where("pid = 0 and is_nav = 1 and id in ({$role_auth_ids})") -> select();
			//拥有的二级权限
			$second = M('Auth') -> where("pid > 0 and is_nav = 1 and id in ({$role_auth_ids})") -> select();
		}
		//保存菜单权限信息到session  减少对数据库的查询
		session('role_auth_ids', $role_auth_ids);
		session('top', $top);
		session('second', $second);
	}

	/**
	 * 权限检测
	 * @return [type] [description]
	 */
	public function checkauth()
	{
		//获取当前登录管理员拥有的权限
		$role_id = session('manager_info.role_id');
		if($role_id == 1)
		{
			//超级管理员不需要进行权限检测
			return;
		}
		//获取当前访问的页面是哪个权限
		//获取当前访问的控制器名称 和方法名称  组装成 “控制器-方法” 格式
		$c = CONTROLLER_NAME;//当前控制器名称
		$a = ACTION_NAME;//当前方法名称
		//dump($c);dump($a);//die;
		$ac = $c . '-' . $a;
		//如果是访问的首页，跳过检测，直接访问
		if(strtolower($ac) == 'index-index')
		{
			return;
		}
		//如果是退出操作，跳过检测，直接访问。
		if(strtolower($ac) == 'index-logout')
		{
			return;
		}
		//如果是访问的首页，跳过检测，直接访问
		if(strtolower($ac) == 'index-homepage')
		{
			return;
		}
		//获取角色信息
		$role = M('Role') -> where(array('role_id' => $role_id)) -> find();
		//dump($role);
		//判断当前访问的页面对应的权限 是否在其拥有的权限中 $ac 是否在 $role['role_auth_ac']
		$role_auth_ac = explode(',', $role['role_auth_ac']);
		//dump($role_auth_ac);die;
		if(!in_array($ac, $role_auth_ac))
		{
			if(IS_AJAX)
			{
				$return = array(
					'code' => '10005',
					'msg' => '没有权限访问该方法'
				);
				$this -> ajaxReturn($return);
				return;
				die;
			}else
			{
				//没有权限访问该页面
				$this -> error("没有权限访问该方法", U('Admin/Index/index'));
			}
			
			
		}
	}
}