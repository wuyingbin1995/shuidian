<?php
namespace Admin\Controller;

class IndexController extends CommonController 
{
	//首页
    public function index()
    {
    	$this->display();
    }

    //登出
    public function logout()
    {
		//登出时直接删除所有session
		session(null);
		//登出成功跳回登录页面
		$this -> redirect('Admin/Login/login');
	}

	//首页图表
    public function homepage()
    {
    	$this->display();
    }
}