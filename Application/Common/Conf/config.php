<?php
return array(
	//'配置项'=>'配置值'
	/* 数据库设置 */
/*    'DB_TYPE'               =>  'sqlsrv',     		// 数据库类型
    'DB_HOST'               =>  'iZdv7vxl2felshZ\SQLEXPRESS', 		// 服务器地址
    'DB_NAME'               =>  'test',          	// 数据库名
    'DB_USER'               =>  'sa',      			// 用户名
    'DB_PWD'                =>  'Dckeji88699469',          	// 密码
    'DB_PREFIX'             =>  'dbo.',    			// 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      		// 数据库编码默认采用utf8*/

     'DB_TYPE'               =>  'sqlsrv',           // 数据库类型
    'DB_HOST'               =>  'TZWWDPD0AJRMFDU\SQLEXPRESS',       // 服务器地址
    'DB_NAME'               =>  'shuidian',             // 数据库名
    'DB_USER'               =>  'sa',               // 用户名
    'DB_PWD'                =>  '123456',           // 密码
    'DB_PREFIX'             =>  'dbo.',             // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',             // 数据库编码默认采用utf8 

    'WEIXINPAY_CONFIG'       => array(
    'APPID'              => 'wx2a1c83dd0d9cf5cc', // 微信支付APPID
    'MCHID'              => '1437613102', // 微信支付MCHID 商户收款账号
    'KEY'                => 'kYoPihADxDmWc0a90oqeDciulnb4DreO', // 微信支付KEY
    'APPSECRET'          => '8d807323a21ca2a01dc3aa453faf5b53', // 公众帐号secert (公众号支付专用)
    'NOTIFY_URL'         => 'http://www.zncanting.com/shuidian/index.php/Api/Weixinpay/notify', // 接收支付状态的连接
    ),
);