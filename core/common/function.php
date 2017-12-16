<?php
/*
 * Created on 2017-12-15
 *
 *
 * p()
 */

 /***
  * 输出变量或者数组
  */

 function p($var){

	if(is_bool($var)){//检查是否为布尔值
		var_dump($var);

	}else if(is_null($var)){//检查是否为空true
		var_dump(NULL);


	}else{

		echo "<pre style='position:relative; z-index:10000; padding:10px; border-radius:5px; background:#CCC; border:1px solid #999; font-size:14px; line-height:18px; opacity:0.9'>".print_r($var,true)."</pre>";
	}


 }
?>
