<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>权限管理</title>
    <link href="/shuidian/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/shuidian/Public/Admin/css/nifty.min.css" rel="stylesheet">
    <link href="/shuidian/Public/Admin/css/nifty-demo-icons.min.css" rel="stylesheet">
    <link href="/shuidian/Public/Admin/css/footable.core.css" rel="stylesheet">
    <script src="/shuidian/Public/Admin/js/jquery-2.2.4.min.js"></script>
    <script src="/shuidian/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/shuidian/Public/Admin/js/nifty.min.js"></script>
    <script src="/shuidian/Public/Admin/js/footable.all.min.js"></script>
    <script src="/shuidian/Public/Admin/js/tables-footable.js"></script>
    <!-- 引入js操作文件 -->
    <!-- <script src="/shuidian/Public/Admin/js/auth.js"></script> -->
    <style>
        hr{margin-top: 0;}
        #content-container{padding-top: 40px;}
        .hwh-page-info a{color: #CCC;}.hwh-page-info a em{font-style: normal;margin: 0 2px;}
        .pages a,  
            .pages span {  
                display: inline-block;  
                padding: 2px 5px;  
                margin: 0 1px;  
                border: 1px solid #f0f0f0;  
                -webkit-border-radius: 3px;  
                -moz-border-radius: 3px;  
                border-radius: 3px;  
            }  
              
            .pages a,  
            .pages li {  
                display: inline-block;  
                list-style: none;  
                text-decoration: none;  
                color: #58A0D3;  
            }  
              
            .pages a.first,  
            .pages a.prev,  
            .pages a.next,  
            .pages a.end {  
                margin: 0;  
            }  
              
            .pages a:hover {  
                border-color: #50A8E6;  
            }  
              
            .pages span.current {  
                background: #50A8E6;  
                color: #FFF;  
                font-weight: 700;  
                border-color: #50A8E6;  
            }  
    </style>
</head>
<body>
<!-- 引入js操作文件 -->
    <script src="/shuidian/Public/Admin/js/auth.js"></script>
<!-- 载入头部文件 -->
        <header id="navbar">
            <div id="navbar-container" class="boxed">
                <div class="navbar-header">
                    <a href="/shuidian/index.php/Admin/Index/index" class="navbar-brand">
                        <img src="/shuidian/Public/Admin/picture/logo.png" alt="Nifty Logo" class="brand-icon">
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
                                    <a href="/shuidian/index.php/Admin/Index/logout" class="btn btn-primary">
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
<!-- 右侧显示内容 -->
<div id="content-container">
    <div id="page-content">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">权限管理</h3>
            </div>
            <div class="panel-body">
                <!-- 新增用户 -->
                <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="15">
                    <thead>
                    <tr>
                        <th data-sort-initial="true" data-toggle="true" class="text-center">用户编号</th>
                        <th class="text-center">权限名称</th>
                        <th data-hide="phone, tablet" class="text-center">上级权限</th>
                        <th data-hide="phone, tablet" class="text-center">控制器</th>
                        <th data-hide="phone, tablet" class="text-center">方法</th>
                        <th data-hide="phone, tablet" class="text-center">是否菜单项</th>
                        <th data-sort-ignore="true" class="text-center">操作</th>
                    </tr>
                    </thead>
                    <div class="pad-btm form-inline">
                        <div class="row">
                            <div class="col-sm-6 text-xs-center">
                                <div class="form-group">
                                    <button class="btn btn-purple" data-toggle="modal" data-target=".bs-example-modal-lg">
                                        <i class="demo-pli-plus"></i> 增加权限
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 text-xs-center text-right">
                                <div class="form-group">
                                    <input id="demo-input-search2" type="text" placeholder="关键字查询" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <tbody class="text-center tbodyTr">
                    <!-- 遍历数据 -->
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($v["id"]); ?></td>
                            <td><?php echo ($v["auth_name"]); ?></td>
                            <td>
                            <?php if(is_array($auth)): $i = 0; $__LIST__ = $auth;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if( $v["id"] == $vol["id"] ): echo ($vol["auth_name"]); endif; endforeach; endif; else: echo "" ;endif; ?>
                            </td>
                            <td><?php echo ($v["auth_c"]); ?></td>
                            <td><?php echo ($v["auth_a"]); ?></td>
                            <td><span class="label label-table label-success">
                            <?php if($v["is_nav"] == 1 ): ?>是
                            <?php else: ?>否<?php endif; ?>
                            </span></td>
                            <td>
                                <button class="demo-modify-rows btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">修改</button>
                                <button class="demo-delete-rowss btn btn-danger btn-xs" >删除</button>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!-- 遍历完毕 -->
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="pages" align="right">
                                <?php echo ($page); ?>
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<!--增加权限信息模块-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">请填写你要增加的权限信息:</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">权限编号</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="AddTrIndexUserTd0" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">权限名称</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="AddTrIndexUserTd1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">上级权限</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="AddTrIndexUserTd2">
                                        <option value="0">作为顶级权限</option>

                                    <!-- 遍历修改权限 -->
                                    <?php if(is_array($top)): $i = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["id"]); ?>" <?php if( $vol["id"] == $vol["pid"] ): ?>selected="selected"<?php endif; ?> ><?php echo ($vol["auth_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <!-- 遍历修改权限完毕 -->

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">控制器</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="AddTrIndexUserTd3">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">方法</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control input-md" id="AddTrIndexUserTd4">
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">菜单项</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="AddTrIndexUserTd5">
                                        <option value="1">是</option>
                                        <option value="0">否</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary demo-btn-addrow" data-dismiss="modal">提交</button>
            </div>
        </div>
    </div>
</div>

<!--修改权限信息模块-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">权限编号</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="TrIndexUserTd0" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">权限名称</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="TrIndexUserTd1" type="text" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">上级权限</label>
                                <div class="col-md-8">
                                    
                                    <select class="form-control" id="TrIndexUserTd2" >
                                        <option value="0">作为顶级权限</option>

                                    <!-- 遍历修改权限 -->
                                    <?php if(is_array($top)): $i = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["id"]); ?>"><?php echo ($vol["auth_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <!-- 遍历修改权限完毕 -->

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">控制器</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="TrIndexUserTd3" type="text">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">方法</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control input-md" id="TrIndexUserTd4">
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">菜单项</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="TrIndexUserTd5">
                                        <option value="1">是</option>
                                        <option value="0">否</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="myModalSuccess">提交</button>
            </div>
        </div>
    </div>
</div>

<!-- 载入左侧 -->
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
                                <img class="img-circle img-sm img-border" src="/shuidian/Public/Admin/images/logo.png" alt="Profile Picture">
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
                            <a href="/shuidian/index.php/Admin/Index/logout" class="list-group-item">
                                <i class="demo-pli-unlock icon-lg icon-fw">安全退出</i>
                            </a>
                        </div>
                    </div>
                    <ul id="mainnav-menu" class="list-group">
                        <li class="list-header">菜单导航</li>
                        <li class="active-link">
                            <a href="/shuidian/index.php/Admin/Index/index">
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
                                <?php if(is_array($_SESSION['second'])): $k = 0; $__LIST__ = $_SESSION['second'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$second_v): $mod = ($k % 2 );++$k; if($second_v["pid"] == $top_v["id"] ): ?><li><a href="/shuidian/index.php/Admin/<?php echo ($second_v["auth_c"]); ?>/<?php echo ($second_v["auth_a"]); ?>"><?php echo ($second_v["auth_name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                
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
<script type="text/javascript">
    $(function(){

        /*新建用户信息*/
        var addrow = $('#demo-foo-addrow');
        //点击提交
        $('.demo-btn-addrow').click(function(){
            //获取属性值
            var AddTrIndexUserTd0 = $("#AddTrIndexUserTd0").val();
            var AddTrIndexUserTd1 = $("#AddTrIndexUserTd1").val();
            var AddTrIndexUserTd2 = $("#AddTrIndexUserTd2").val();
            var AddTrIndexUserTd3 = $("#AddTrIndexUserTd3").val();
            var AddTrIndexUserTd4 = $("#AddTrIndexUserTd4").val();
            var AddTrIndexUserTd5 = $("#AddTrIndexUserTd5").val();
            // var footable = addrow.data('footable');
            // var newRow = "<tr><td>"+AddTrIndexUserTd0+"</td><td>"+AddTrIndexUserTd1+"</td><td>"+AddTrIndexUserTd2+"</td><td>"+AddTrIndexUserTd3+"</td><td>"+AddTrIndexUserTd4+"</td><td><span class='label label-table label-success'>"+AddTrIndexUserTd5+"</span></td><td><button class='demo-modify-row btn btn-success btn-xs' data-toggle='modal' data-target='#myModal'>修改</button>&nbsp;<button class='demo-delete-row btn btn-danger btn-xs'>删除</button></td></tr>";
            //footable.appendRow(newRow);

            var id      = AddTrIndexUserTd1;
            var pid     = AddTrIndexUserTd2;
            var auth_c  = AddTrIndexUserTd3;
            var auth_a  = AddTrIndexUserTd4;
            var is_nav  = AddTrIndexUserTd5;
             //组装要发送的数据
            var data = {
                'auth_name' : id,
                 'pid'      : pid,
                'auth_c'    : auth_c,
                'auth_a'    : auth_a,
                'is_nav'    : is_nav
            };
            // console.log(data);
            // return;

            //发送ajax添加请求
            $.ajax({
                'url'   : '/shuidian/index.php/Admin/Auth/auth_add',
                'type'  : 'post',
                'data'  : data,
                'dataType' : 'json',
                'success' : function(response){

                    if(response.code != 10000){
                        //添加失败
                        alert(response.msg);
                        return;
                    }else{
                        //添加成功
                        window.location.reload();
                    }
                }
            });
        });

        function deleterow(){
            alert(1);
        }

        //修改数据
        $(".demo-modify-rows").click(function(){

            /*弹出页面显示输入框*/
            $('#myInput').focus();

            /*获取到你点击那一行的下标*/
            var TrIndex = $(this).parent().parent().index();

            /*获取到你点击的那一行里面的内容*/
            var TrIndexUser = $(".tbodyTr tr:eq("+TrIndex+") td:eq(0)").text();
            $("#myModalLabel").html("正在操作的用户编号为 : "+TrIndexUser);
            
            //获取ID
            var id = TrIndexUser;

            //组装要发送的数据
            var data = {'id':id};

            //发送ajax请求
             $.ajax({
                    'url':'/shuidian/index.php/Admin/Auth/auth_list',
                    'type':'post',
                    'data':data,
                    'dataType':'json',
                    'success':function(response){
                        //console.log(response);
                        if(response.code != 10000){
                            //判断返回结果中的code ，不是10000都代表失败，提示错误信息
                            alert(response.msg);
                            return;
                        }else{
                            //修改成功
                            //将获取到内容赋值给页面里面
                            $("#TrIndexUserTd0").val(response.id);
                            $("#TrIndexUserTd1").val(response.auth_name);
                            $("#TrIndexUserTd2").val(response.pid);
                            $("#TrIndexUserTd3").val(response.auth_c);
                            $("#TrIndexUserTd4").val(response.auth_a);
                            $("#TrIndexUserTd5").val(response.is_nav);
                            
                        }
                    }
                });
            
            /*点击提交*/
            $("#myModalSuccess").click(function(){

                /*获取到弹出页面输入框你改的内容*/
                var newTrIndexUserTd0 = $("#TrIndexUserTd0").val();     //权限id
                var newTrIndexUserTd1 = $("#TrIndexUserTd1").val();     //权限名称
                var newTrIndexUserTd2 = $("#TrIndexUserTd2").val();     //是否顶级权限
                var newTrIndexUserTd3 = $("#TrIndexUserTd3").val();     //控制器
                var newTrIndexUserTd4 = $("#TrIndexUserTd4").val();     //方法
                var newTrIndexUserTd5 = $("#TrIndexUserTd5").val();     //是否菜单项
            
                 //组装要发送的数据
                var data = {
                     'id'       : newTrIndexUserTd0,
                    'auth_name' : newTrIndexUserTd1,
                     'pid'      : newTrIndexUserTd2,
                    'auth_c'    : newTrIndexUserTd3,
                    'auth_a'    : newTrIndexUserTd4,
                    'is_nav'    : newTrIndexUserTd5
                };

                //发送Ajax请求
                $.ajax({
                    'url':'/shuidian/index.php/Admin/Auth/auth_edit',
                    'type':'post',
                    'data':data,
                    'dataType':'json',
                    'success':function(response){
                     //   console.log(response);
                        if(response.code != 10000){
                            //判断返回结果中的code ，不是10000都代表失败，提示错误信息
                            alert(response.msg);
                            return;
                        }else{
                            //修改成功刷新当前页面，同步数据库的数据
                            window.location.reload();
                        }
                    }
                });
                
            });
        });

        //刪除
        $(".demo-delete-rowss").click(function(){
            if(confirm('是否删除'))
            {

                /*获取到你点击那一行的下标*/
                var TrIndex = $(this).parent().parent().index();
                /*获取到你点击的那一行里面的内容*/
                var TrIndexUser = $(".tbodyTr tr:eq("+TrIndex+") td:eq(0)").text();
                //获取id
                var id = TrIndexUser;
                //组装要发生的数据
                var data = {'id' : id};
                // console.log(data);
                // return;
                //发送ajax请求
                $.ajax({
                    'url':'/shuidian/index.php/Admin/Auth/auth_del',
                    'type':'post',
                    'data':data,
                    'dataType':'json',
                    'success':function(response){
                        //console.log(response);
                        if(response.code != 10000){
                            //判断返回结果中的code ，不是10000都代表失败，提示错误信息
                            alert(response.msg);
                            return;
                        }else{
                            //删除成功刷新当前页面，同步数据库数据
                            window.location.reload();
                        }
                    }
                });
            }
        });
    });
</script>
</html>