<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>设置数据采集</title>
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
                        <form method="post" action="/shuidian/index.php/Admin/Kongzhiiqiguanli/Shujucaiji" onSubmit="return check(this)">
                            <div class="panel-body">
                                <select style="width: 100%;padding: 5px 12px;" data-placeholder="Choose a Country..." name="kzqa" id="demo-chosen-select" tabindex="2">
                                    <option value="" >请选择你要操作的控制器!</option>
                                    <option value="001">001 - 号控制器</option>
                                    <option value="002">002 - 号控制器</option>
                                    <option value="003">003 - 号控制器</option>
                                    <option value="004">004 - 号控制器</option>
                                    <option value="005">005 - 号控制器</option>
                                    <option value="006">006 - 号控制器</option>
                                </select>
                            </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">填写参数:</h3>
                        </div>
                        
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">每屏显示时间(秒)</label>
                                            <input type="number" name="mpxssj" id="mpxssj" class="form-control" min="3" max="10" placeholder="3 ~ 10">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">数据采集间隔(秒)</label>
                                            <input type="number" name="sjcjjg" id="sjcjjg" class="form-control" min="1" max="99" placeholder="1 ~ 99">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">自动循显项数</label>
                                            <input type="number" name="zdxxxs" id="zdxxxs" class="form-control" min="1" max="4" placeholder="1 ~ 4">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">自动循显项序号</label>
                                            <input type="number" name="zdxxxxh" id="zdxxxxh" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">按键显示项数</label>
                                            <input type="number" name="ajxsxs" id="ajxsxs" class="form-control" min="1" max="4" placeholder="1 ~ 4">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">按键显示项序号</label>
                                            <input type="number" name="ajxsxxh" id="ajxsxxh" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">通信等待时(秒)</label>
                                            <input type="number" name="txdds" id="txdds" class="form-control" min="1" max="9" placeholder="1 ~ 9">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- <div class="form-group">
                                            <label class="control-label">自动循显项序号</label>
                                            <input type="url" class="form-control">
                                        </div> -->
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="checkbox" checked="checked" id="xuan">
                                            <label class="control-label">控制器(显示项为:1.总购电量;2.总用电量;3.总剩余电量;4.瞬时总有功功率.)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-right">
                                <!-- <button class="btn btn-warning">重新填写</button> -->
                                <button type="submit" class="btn btn-success">确定提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function check(fr){
    if($("#xuan").is(":checked")==false ){
        alert('您必须勾选控制器的复选框');
        return false;
    }
    if(fr.kzqa.value==''){
        alert('您必须选择控制器');
        fr.kzqa.focus();
        return false;
    }
    if(fr.mpxssj.value==''){
        alert('您必须输入每屏显示时间');
        fr.mpxssj.focus();
        return false;
    }
    if(fr.sjcjjg.value==''){
        alert('您必须输入数据采集间隔');
        fr.sjcjjg.focus();
        return false;
    }
    if(fr.zdxxxs.value==''){
        alert('您必须输入自动循显项数');
        fr.zdxxxs.focus();
        return false;
    }
    if(fr.zdxxxxh.value==''){
        alert('您必须输入自动循显项序号');
        fr.zdxxxxh.focus();
        return false;
    }
    if(fr.ajxsxs.value==''){
        alert('您必须输入按键显示项数');
        fr.ajxsxs.focus();
        return false;
    }
    if(fr.ajxsxxh.value==''){
        alert('您必须输入按键显示项序号');
        fr.ajxsxxh.focus();
        return false;
    }
    if(fr.txdds.value==''){
        alert('您必须输入通信等待时');
        fr.txdds.focus();
        return false;
    }    
}
</script>
</html>