<?php 
namespace Admin\Controller;
use Think\Controller;

class RoleController extends CommonController
{

	// //角色展示
	// public function role_list_cha()
	// {
	// 	$role_id = I('id');
	// 	$res = M('role') -> where(array('role_id'=>$role_id)) -> find();
	// 	if($res){	
	// 		$role_auth_ids = $res['role_auth_ids'];
	// 		//成功返回
	// 		$role_auth_ids=explode(',',$role_auth_ids);
	// 		$return = array(
	// 			'code' => 10000,
	// 			'role_auth_ids' => $role_auth_ids,			
	// 			'msg' => 'success'
	// 		);
	// 		$this -> ajaxReturn($return);
	// 	}else{
	// 		$return = array(
	// 			'code' => 10001,
	// 			'msg' => '查询失败!'
	// 		);
	// 		$this -> ajaxReturn($return);
	// 	}
	// }

	//角色展示
	public function role_list()
	{	
		if(IS_AJAX){
			$role_id = I('id');
			$res = M('role') -> where(array('role_id'=>$role_id)) -> find();
			if($res){	
				$role_auth_ids = $res['role_auth_ids'];
				//成功返回
				$role_auth_ids=explode(',',$role_auth_ids);
				$return = array(
					'code' => 10000,
					'role_auth_ids' => $role_auth_ids,			
					'msg' => 'success'
				);
				$this -> ajaxReturn($return);
			}else{
				$return = array(
					'code' => 10001,
					'msg' => '查询失败!'
				);
				$this -> ajaxReturn($return);
			}
		}else{
			$model = M('role');
	        $data = $model -> select();
	        $auth = M('auth') -> select();
	        //dump($data);
	        //显示拥有的权限
	        for($i=0;$i<count($data);$i++){                                 //循环角色表取出角色拥有的权限id
	           $array=explode(',',$data[$i]['role_auth_ids']);     //取出拥有的权限ID保存到一个新数组里
	           for($a=0;$a<count($array);$a++){                             //循环新数组
	               for($b=0;$b<count($auth );$b++){                         //循环权限表
	                   if($array[$a]==$auth[$b]['id']){                     //判断新数组里的ID 是否等于权限表中的ID
	                       $array[$a]=$auth[$b]['auth_name'];               //等于的话 把权限表中的权限名称 赋值到 新数组里。
	                   }
	               }
	           }
	            $data[$i]['role_auth_idname']=implode(',',$array);
	        }

	        $this -> assign('auth', $data);
			//分页
			$total = $model -> count();
			$pagesize = 16;
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

			//获取所有的顶级权限
			$top = M('Auth') -> where("pid = 0") -> select();
			//获取所有的二级权限
			$second = M('Auth') -> where("pid > 0") -> select();
			//dump($second);die;
			$this -> assign("top",$top);
			$this -> assign("second",$second);
			$this -> display();
		}	
	}

	//分配权限
	public function role_edit()
	{

		if(IS_POST)
		{
			//接收表单数据
			$data = I('post.data');
			// dump($data);die;
			//组装一条数据$role 用于更新到role表
			$role_id = $data[count($data)-1];
			array_pop($data);
			//把id字段组装成字符串形式
			$role['role_auth_ids'] = implode(',', $data);
			//查询权限的详细信息
			$auth = M('Auth') -> where("id in ({$role['role_auth_ids']})") -> select();
			//组装role_auth_ac 格式  控制器名-方法名,控制器名-方法名
			foreach($auth as $k => $v){
				if($v['auth_c'] && $v['auth_a']){
					$role['role_auth_ac'] .= $v['auth_c'] . '-' . $v['auth_a'] . ',';
				}
			}
			//去除最后一个逗号
			$role['role_auth_ac'] = trim($role['role_auth_ac'], ',');
			//修改数据
			$res = M('role') ->data($role)->where("role_id = $role_id")->save();
			if($res !== false)
			{
				$return = array(
					'code' 	=> 10000,
					'msg' 	=> 'success'
				);
				$this -> ajaxReturn($return);
			}else
			{
				$return = array(
					'code'	=> 10001,
					'msg'	=> '分配失败！'
				);
				$this -> ajaxReturn($return);
			}
		}
	}


	//添加角色
	public function role_add()
	{
		if(IS_POST)
		{
			$data = I('post.');
			if(empty($data['role_name']))
			{
				$return = array(
					'code' 	=> 10002,
					'msg'	=> '角色名称不能为空'
				);
				$this -> ajaxReturn($return);
			}
			$model = M('role');
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

	//删除角色
	public function role_del()
	{	
		$id = I('post.role_id');
		$model = M('role');

		$res = $model -> where("role_id = $id") -> delete();

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







