<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <link rel="stylesheet" href="/shuidian/Public/Home/css/new_file.css"/>
    <link rel="stylesheet" href="/shuidian/Public/Home/js/need/layer.css"/>
    <link rel="stylesheet" href="/shuidian/Public/Home/css/mui.min.css">
    <script type="text/javascript" src="/shuidian/Public/Home/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/shuidian/Public/Home/js/layer.js"></script>
    <title>充值记录</title>
    <style>
        body{
            background-color: #efeff4;
        }
        .title {
            padding-top: 10px;
            padding-bottom: 5px;
            padding-left: 11px;
            color: #6d6d72;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <header>
        <a href="/shuidian/index.php/Home/Index/login_id">
            <div class="_left"><img src="/shuidian/Public/Home/images/Arrow_left_icon.png"></div>
            充值记录
        </a>
    </header>
    <div class="banner" style="height: 70px;margin-bottom:0;">
        <img src="/shuidian/Public/Home/images/2017.png" width="100%" height="100%"/>
    </div>

<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div style="margin-top:15px;background-color:#fff;"><strong style="padding-right: 5px;">&emsp;<?php echo ($key); ?>年</strong></div>
    <?php if(is_array($v)): $i = 0; $__LIST__ = $v;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="mui-content">     
            <div class="title">
    
                <strong><?php echo ($key); ?>月</strong><!--  <h5>支出:<span>1111</span>元</h5> -->
            </div>
             <div class="mui-card" style="margin: 2px 10px;">
                <ul class="mui-table-view">
                <?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell mui-media">
                        <a class="mui-navigate-right" href="/shuidian/index.php/Home/Index/detail/id/<?php echo ($vol["ddbh"]); ?>">
                            <img class="mui-media-object mui-pull-left" src="/shuidian/Public/Home/images/cbd.jpg">
                            <div class="mui-media-body">
                                <h4> <?php if($vol["ydlx"] == 1 ): ?>电费充值 <?php else: ?>水费充值<?php endif; ?></h4>
                                <p class='mui-ellipsis'><?php echo ($vol["bcgdrq"]); ?>&emsp;本次交款：<?php echo ($vol["bcjk"]); ?></p>
                            </div>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>

</body>
</html>