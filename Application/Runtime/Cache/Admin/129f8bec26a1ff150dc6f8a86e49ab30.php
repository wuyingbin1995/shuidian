<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看控制器所有表数据</title>
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
    <style>
        #content-container{padding-top: 0;}
        .form-control{
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div id="content-container">
        <div id="page-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">控制器选择:</h3>
                        </div>
                        <form>
                            <div class="panel-body">
                                <select style="width: 100%;padding: 5px 12px;" data-placeholder="Choose a Country..." id="demo-chosen-select" tabindex="2">
                                    <option style="display:none" value="False">请选择你要查询的控制器!</option>
                                    <optgroup label="全查">
                                        <option value="QuanCha">查询全部控制器</option>
                                    </optgroup>
                                    <optgroup label="单查">
                                        <option value="001">001 - 号控制器</option>
                                        <option value="002">002 - 号控制器</option>
                                        <option value="003">003 - 号控制器</option>
                                        <option value="004">004 - 号控制器</option>
                                        <option value="005">005 - 号控制器</option>
                                        <option value="006">006 - 号控制器</option>
                                        <option value="001">007 - 号控制器</option>
                                        <option value="002">008 - 号控制器</option>
                                        <option value="003">009 - 号控制器</option>
                                        <option value="004">010 - 号控制器</option>
                                        <option value="005">011 - 号控制器</option>
                                        <option value="006">012 - 号控制器</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">表信息:</h3>
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
                        </div> -->
                        <tbody class="text-center">
                            <tr>
                                <td>DC - 001</td>
                                <td>2018312174532</td>
                                <td>2018年3月12日</td>
                                <td>陕西陕西安市</td>
                                <td>正常使用中</td>
                                <td>
                                    <button class="demo-delete-rows btn btn-danger btn-xs" >换表</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script>
</script>
</html>