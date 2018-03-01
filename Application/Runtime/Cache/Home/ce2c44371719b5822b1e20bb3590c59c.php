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
<br>

<!--     <header>
        <a href="/index.php/Home/Index/login_id">
            <div class="_left"><img src="/Public/Home/images/Arrow_left_icon.png"></div>
            充值记录
        </a>
    </header>
 -->    <!--<div class="banner" style="height: 70px;margin-bottom:0;">
        <img src="/Public/Home/images/2017.png" width="100%" height="100%"/>
    </div>-->
<form class="mui-input-group mui-card" style="width: 96%;margin: 0 auto 5px;">
    <div class="mui-input-row">
        <label>表计位置:</label>
        <select id='hehe'>
            <option value="0">请选择查询地址</option>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vl): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vl["dbccbh"]); ?>"><?php echo ($vl["yhdz"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <div class="mui-input-row">
        <label>用表类型:</label>
        <input type="text" id="ydlxbh" value="" disabled/>
        <input type="hidden" id="ydlx" value="" disabled/>
    </div>
    <div class="mui-input-row">
                <label>累计购量:</label>
                <input type="text" id="zgdl" value="" disabled/>
            </div>
            <div class="mui-input-row">
                <label>累计用量:</label>
                <input type="text" id="zydl" value="" disabled/>
            </div>
            <div class="mui-input-row">
                <label>当日余量:</label>
                <input type="text" id="dqyue" value="" disabled/>
            </div>
    </form>
<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div style="margin-top:15px;background-color:#fff;" align="center"><strong style="padding-right: 5px;">&emsp;<?php echo ($key); ?>年</strong></div>
    <?php if(is_array($v)): $i = 0; $__LIST__ = $v;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="mui-content">     
            <div class="title">
    
                <strong><?php echo ($key); ?>月</strong><!--  <h5>支出:<span>1111</span>元</h5> -->
            </div>
             <div class="mui-card" style="margin: 2px 10px;">
                <ul class="mui-table-view">
                <?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell mui-media">
                        <a class="mui-navigate-right" href="/index.php/Home/Index/detail/id/<?php echo ($vol["ddbh"]); ?>">
                            <img class="mui-media-object mui-pull-left" src="/Public/Home/images/cbd.jpg">
                            <div class="mui-media-body">
                                <!-- <h4> <?php if($vol["ydlx"] == 1 ): ?>充值缴费 <?php else: ?>充值缴费<?php endif; ?></h4> -->
                                <br>
                                <p class='mui-ellipsis'><?php echo ($vol["bcgdrq"]); ?>&emsp;本次充值：<?php echo ($vol["bcjk"]); ?>元</p>
                            </div>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>

</body>
</html>
<script>
    $(function(){
        //获取购电量余量等数据
        $("#hehe").change(function(){
            var eee = $("#hehe").val();
            if(eee != '0'){
                var data = {'dbccbh' : eee};
                //console.log(data);
                $.ajax({
                    'url' : '/index.php/Home/Index/get_dqyue',
                    'type' : 'post',
                    'data': data,
                    'dataType' : 'json',
                    'success' : function(response){
                        if(response.code != 10000){
                            layer.open({
                                content: response.msg,
                                style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                                time: 3
                            });
                        }else{
                            if(response.ydlx == 1){
                                $('#zgdl').val(response.zgdl + ' 度');
                                $('#zydl').val(response.zydl + ' 度');
                                $('#dqyue').val(response.dqyue + ' 度');
                                $('#ydlxbh').val(response.ydlxk);
                                $('#ydlx').val(response.ydlx);
                            }else{
                                $('#zgdl').val(response.zgdl + ' 立方米');
                                $('#zydl').val(response.zydl + ' 立方米');
                                $('#dqyue').val(response.dqyue + ' 立方米');
                                $('#ydlxbh').val(response.ydlxk);
                                $('#ydlx').val(response.ydlx);
                            }
                            
                        }
                    }
                });
            }else{
                layer.open({
                    content: '请选择你要查询的地址!',
                    style: 'background:rgba(0,0,0,0.6); color:#fff; border:none;',
                    time: 3
                });
                $('#zgdl').val('');
                $('#zydl').val('');
                $('#dqyue').val('');
                $('#ydlxbh').val('');
                $('#ydlx').val('');
            }
        });
    });
</script>