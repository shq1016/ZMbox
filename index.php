<?php
/*
 * Created on 2017-12-15
 *入口文件
 *1、定义常量
 *2、加载函数库
 *3、启动框架
 */
  define('APP_PATH',realpath('./'));
  define('CORE',APP_PATH.'/core');
  define('APP',APP_PATH.'/app');
  define('MODULE','app');
  define('DEBUG',true);

  if(DEBUG){

  	ini_set('display_error','On');

  }else{
  	ini_set('display_error','Off');
  }

 include CORE.'/common/function.php';
 include CORE.'/zmbox.php';
 spl_autoload_register('\core\zmbox::load');




\core\zmbox::run();
