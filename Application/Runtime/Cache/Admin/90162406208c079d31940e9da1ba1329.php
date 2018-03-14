<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>控制器时钟管理</title>
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
                    <h3 class="panel-title">控制器时钟管理</h3>
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
                        <!-- <div class="pad-btm form-inline">
                            <div class="row">
                                <div class="col-sm-6 text-xs-center">
                                    <div class="form-group">
                                        <button class="btn btn-purple" data-toggle="modal" data-target=".bs-example-modal-lg">
                                            <i class="demo-pli-plus"></i> 增加
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-xs-center text-right">
                                    <div class="form-group">
                                        <input id="demo-input-search2" type="text" placeholder="关键字查询" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <tbody class="text-center">
                            <tr>
                                <td>DC - 001</td>
                                <td>2018312174532</td>
                                <td>2018年3月12日</td>
                                <td>陕西陕西安市</td>
                                <td>正常使用中</td>
                                <td>
                                    <button class="demo-modify-rows btn btn-primary btn-xs">修改控制器时间</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>

</script>
</html>