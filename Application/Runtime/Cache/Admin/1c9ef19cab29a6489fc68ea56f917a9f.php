<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>控制器列表</title>
    <link href="/shuidian/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/shuidian/Public/Admin/css/nifty.min.css" rel="stylesheet">
    <link href="/shuidian/Public/Admin/css/nifty-demo-icons.min.css" rel="stylesheet">
    <link href="/shuidian/Public/Admin/css/footable.core.css" rel="stylesheet">
    <link href="/shuidian/Public/Admin/css/chosen.min.css" rel="stylesheet">
    <link href="/shuidian/Public/Admin/css/nouislider.min.css" rel="stylesheet">
    <script src="/shuidian/Public/Admin/js/jquery-2.2.4.min.js"></script>
    <script src="/shuidian/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/shuidian/Public/Admin/js/nifty.min.js"></script>
    <script src="/shuidian/Public/Admin/js/footable.all.min.js"></script>
    <script src="/shuidian/Public/Admin/js/tables-footable.js"></script>
    <script src="/shuidian/Public/Admin/js/chosen.jquery.min.js"></script>
    <script src="/shuidian/Public/Admin/js/nouislider.min.js"></script>
    <script src="/shuidian/Public/Admin/js/form-component.js"></script>
    <script src="/shuidian/Public/Admin/js/ui-buttons.js"></script>
    <style>
        /*body{font-size: 15px;}*/
        #content-container{padding-top: 0;}
    </style>
</head>
<body>
    <div id="content-container">
        <div id="page-content">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">控制器列表</h3>
                </div>
                <div class="panel-body">
                    <table id="demo-dt-addrow" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">序号</th>
                                <th class="text-center">控制器编号</th>
                                <th class="text-center">安装时间</th>
                                <th class="text-center">详细位置</th>
                                <th class="text-center">控制器状态</th>
                                <th class="text-center">操作</th>
                            </tr>
                        </thead>
                        <div class="pad-btm form-inline">
                            <div class="row">
                                <div class="col-sm-6 text-xs-center">
                                    <div class="form-group">
                                        <button class="btn btn-purple" data-toggle="modal" data-target=".bs-example-modal-lg">
                                            <i class="demo-pli-plus"></i> 增加控制器
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
                        <tbody class="text-center">
                            <tr>
                                <td>DC - 001</td>
                                <td>2018312174532</td>
                                <td>2018年3月12日</td>
                                <td>陕西陕西安市</td>
                                <td>正常使用中</td>
                                <td>
                                    <button class="demo-delete-rows btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">添加表</button>
                                    <button class="demo-modify-rows btn btn-primary btn-xs">清零</button>
                                    <button class="demo-delete-rows btn btn-danger btn-xs" >删除</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- 增加控制器 -->
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
                                    <label class="col-md-4 control-label text-right">控制器编号</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" id="AddTrIndexUserTd1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-md-4 control-label text-right">详细位置</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" id="AddTrIndexUserTd1">
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
                        <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">菜单项</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="AddTrIndexUserTd5">
                                        <option value="1">是</option>
                                        <option value="0">否</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
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



<!--修改用户信息模块-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">请填写你要增加的用户信息</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">用户编号</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="TrIndexUserTd0" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">用户昵称</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="TrIndexUserTd1" type="text" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">用户角色</label>
                                <div class="col-md-8">
                                    
                                    <select class="form-control" id="TrIndexUserTd2" >
                                        <option value="1">超级管理员</option>
                                    <!-- 遍历修改用户 -->
                                    <?php if(is_array($role)): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["role_id"]); ?>"><?php echo ($vol["role_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <!-- 遍历修改用户完毕 -->

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">用户账号</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="TrIndexUserTd3" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">用户密码</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control input-md" id="TrIndexUserTd4">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label text-right">是否可用</label>
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


</body>
<script>

</script>
</html>