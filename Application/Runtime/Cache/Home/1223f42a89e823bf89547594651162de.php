<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <link rel="stylesheet" href="/Public/Home/css/new_file.css"/>
    <link rel="stylesheet" href="/Public/Home/js/need/layer.css"/>
    <link rel="stylesheet" href="/Public/Home/css/mui.min.css">
    <script type="text/javascript" src="/Public/Home/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/layer.js"></script>
    <script type="text/javascript" src="/Public/Home/js/mui.min.js"></script>
    <title>订单详情</title>
    <style>
        .mui-card{box-shadow: 1px 2px 5px rgba(0,0,0,.3);}
        .mui-table-view-cell:after{right: 15px;}
    </style>
</head>
<body>
    <header>
        <a href="/index.php/Home/Index/record">
            <div class="_left"><img src="/Public/Home/images/Arrow_left_icon.png"></div>
            订单详情
        </a>
    </header>
    <div class="mui-card" style="margin-top:55px;">
        <ul class="mui-table-view">

        <?php if(is_array($gdjlk)): $i = 0; $__LIST__ = $gdjlk;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell mui-text-center">
                <p style="color:#000000;">
                    <img src="/Public/Home/images/success.gif" alt="" style="width: 20px;height: 20px;">
                    <strong>海湾水电费充值系统</strong>
                </p>

                <h3 style="margin: 10px 0"><?php echo ($value["bcjk"]); ?></h3>
                <p style="color:#000000;">充值成功</p>
            </li>
            <li class="mui-table-view-cell">
                交易状态
                <i class="mui-pull-right">充值成功</i>
            </li>
            <li class="mui-table-view-cell">
                充值说明
                <i class="mui-pull-right"> <?php if($value["ydlx"] == 1 ): ?>电费充值<?php else: ?> 水费充值<?php endif; ?></i>
            </li>
			<li class="mui-table-view-cell">
                支付类型
                <i class="mui-pull-right"> <?php if($value["zflx"] == 1 ): ?>微信<?php else: ?> 支付宝<?php endif; ?></i>
            </li>
            <li class="mui-table-view-cell">
                充值号码
                <i class="mui-pull-right"><?php echo ($value["yhdh"]); ?></i>
            </li>
            <li class="mui-table-view-cell">
                充值住址
                <i class="mui-pull-right"><?php echo ($value["yhdz"]); ?></i>
            </li>
            <li class="mui-table-view-cell">
                充值金额
                <i class="mui-pull-right"><?php echo ($value["bcjk"]); ?></i>
            </li>
            <li class="mui-table-view-cell">
                充值时间
                <i class="mui-pull-right"><?php echo ($value["bcgdrq"]); ?></i>
            </li>
            <li class="mui-table-view-cell">
                订单编号
                <i class="mui-pull-right"><?php echo ($value["ddbh"]); ?></i>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>
    <!-- <div class="mui-card">
        <ul class="mui-table-view">
            <li class="mui-table-view-cell">
                <a class="mui-navigate-right">添加标签</a>
            </li>
            <li class="mui-table-view-cell">
                <a class="mui-navigate-right">查看往来记录</a>
            </li>
        </ul>
    </div>
    <div class="mui-card">
        <ul class="mui-table-view">
            <li class="mui-table-view-cell">
                <a class="mui-navigate-right">对此订单有疑问</a>
            </li>
        </ul>
    </div> -->
</body>
</html>