<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>欢迎登录 - 海湾管理系统</title>
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/nifty.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/nifty-demo-icons.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/footable.core.css" rel="stylesheet">
    <script src="/Public/Admin/js/jquery-2.2.4.min.js"></script>
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/Public/Admin/js/nifty.min.js"></script>
    <script src="/Public/Admin/js/footable.all.min.js"></script>
    <script src="/Public/Admin/js/tables-footable.js"></script>
    <style>
        #content-container{padding-bottom: 0;}
    </style>
</head>
<body>
<!-- 头部 -->
        <header id="navbar">
            <div id="navbar-container" class="boxed">
                <div class="navbar-header">
                    <a href="/index.php/Admin/Index/index" class="navbar-brand">
                        <img src="/Public/Admin/picture/logo.png" alt="Nifty Logo" class="brand-icon">
                        <!--  -->
                        <div class="brand-title">
                            <span class="brand-text">海湾管理系统</span>
                        </div>
                    </a>
                </div>
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-view-list"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-top-links pull-right">
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <i class="demo-pli-male ic-user"></i>
                                </span>
                                <div class="username hidden-xs">Admin</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">
                                <ul class="head-list">
                                    <li>
                                        <a href="#">
                                            <i class="demo-pli-information icon-lg icon-fw"></i> 技术支持
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> 联系我们
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="demo-pli-mail icon-lg icon-fw"></i> 问题反馈
                                        </a>
                                    </li>
                                </ul>
                                <div class="pad-all text-right">
                                    <a href="/index.php/Admin/Index/logout" class="btn btn-primary">
                                        <i class="demo-pli-unlock"></i> 安全退出
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--<li></li>-->
                    </ul>
                </div>
            </div>
        </header>
        <div id="container" class="effect aside-float aside-bright mainnav-lg">
<!-- 右侧 -->
        <div id="content-container">
	    	<iframe id="Iframe" src="/index.php/Admin/Index/homepage" frameborder="0" width="100%" height="100%" scrolling="no"></iframe>
		</div>
<!-- 左侧 -->
<!-- 左侧 -->
<nav id="mainnav-container">
    <div id="mainnav">
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap">
                            <div class="pad-btm">
                                <span class="label label-success pull-right"><?php if($_SESSION['manager_info']['role_id']== 1 ): ?>超级管理员<?php else: echo ($_SESSION['role_info']['role_name']); endif; ?></span>
                                <img class="img-circle img-sm img-border" src="/Public/Admin/images/logo.png" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name"><?php echo ($_SESSION['manager_info']['nickname']); ?></p>
                                <span class="mnp-desc">欢迎回来,<?php if($_SESSION['manager_info']['role_id']== 1 ): ?>超级管理员<?php else: echo ($_SESSION['role_info']['role_name']); endif; ?>!</span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="/index.php/Admin/Index/logout" class="list-group-item">
                                <i class="demo-pli-unlock icon-lg icon-fw">安全退出</i>
                            </a>
                        </div>
                    </div>
                    <ul id="mainnav-menu" class="list-group">
                        <li class="list-header">菜单导航</li>
                        <li class="active-link">
                            <a href="/index.php/Admin/Index/index">
                                <i class="demo-psi-home"></i>
                                <span class="menu-title">
                                    <strong>首页</strong>
                                </span>
                            </a>
                        </li>
                        <!-- 遍历顶级权限 -->
                        <?php if(is_array($_SESSION['top'])): $k = 0; $__LIST__ = $_SESSION['top'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$top_v): $mod = ($k % 2 );++$k;?><li>
                            <a href="#">
                                <i class="demo-pli-remove-user"></i>
                                <span class="menu-title">
                                    <strong><?php echo ($top_v["auth_name"]); ?></strong>
                                </span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                                <!-- 遍历二级权限 -->
                                <?php if(is_array($_SESSION['second'])): $k = 0; $__LIST__ = $_SESSION['second'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$second_v): $mod = ($k % 2 );++$k; if($second_v["pid"] == $top_v["id"] ): ?><li><a href="/index.php/Admin/<?php echo ($second_v["auth_c"]); ?>/<?php echo ($second_v["auth_a"]); ?>"><?php echo ($second_v["auth_name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                
                            </ul>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
           
<footer id="footer">
    <p class="text-center"> Copyright&#0169; 2017 东铖智能科技版权所有</p>
</footer>
<button class="scroll-top btn">
    <i class="pci-chevron chevron-up"></i>
    </button>
 </div>
</body>
<script>
    $(function(){
        var BodyHeight = $(document.body).height();
        var NavbarContentHeight = $(".navbar-content").height();
        var NewContentContainer = BodyHeight-NavbarContentHeight+30;
        $("#content-container").css({"height":NewContentContainer+"px"});
    });
</script>
</html>