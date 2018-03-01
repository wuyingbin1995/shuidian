<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <script src="/Public/Admin/js/jquery-2.2.4.min.js"></script>
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts-all-3.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map//Public/Admin/js/china.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map//Public/Admin/js/world.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
    <style>hr{margin-top: 0;}</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="page-title">
                    <h3 class="text-overflow">首页</h3><hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12" style="height: 700px">
                <div id="HomePageTop" style="height: 100%"></div>
            </div>
        </div>
    </div>
</body>
<script>
    var dom = document.getElementById("HomePageTop");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    var weatherIcons = {
        'Sunny': './data/asset/img/weather/sunny_128.png',
        'Cloudy': './data/asset/img/weather/cloudy_128.png',
        'Showers': './data/asset/img/weather/showers_128.png'
    };
    option = {
        title: {
            text: "海湾管理系统详情",
            subtext: "用户状态统计表",
            left: 'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            bottom: 10,
            left: 'center',
            data: ['用户状态:正常', '用户状态:故障','用户状态:停用','用户状态:未启用']
        },
        series : [
            {
                type: 'pie',
                radius : '65%',
                center: ['50%', '50%'],
                selectedMode: 'single',
                data:[
                    {value:1000,name:"用户状态:正常"},
                    {value:1000,name:"用户状态:故障"},
                    {value:1000,name:"用户状态:停用"},
                    {value:600,name:"用户状态:未启用"}
                ],
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };
    ;
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
</script>
</html>