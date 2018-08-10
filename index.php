<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright (c) 2017  All rights reserved.
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | 站点入口
// +----------------------------------------------------------------------

// [ 应用入口文件 ]




// 定义ITKEE根目录,可更改此目录
define('ITKEE_ROOT', __DIR__ . '/');
// 定义应用目录
define('APP_PATH', ITKEE_ROOT.'application/');

//定义网站主域名
define('APP_URL','http://'.$_SERVER['HTTP_HOST']);

//定义网站入口
define('SITE_URL',APP_URL.'/index.php');
define('TMPL_THEMES_NAME','templete/');
define('TMPL_THEMES','public/'.TMPL_THEMES_NAME);

//前台配置
//前台主题
define('HOME_THEMES_NAME','itkee');
define('HOME_THEMES',HOME_THEMES_NAME.'/');
// 定义ITKEE 版本号
define('ITKEE_VERSION', '1.0.1');
// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
