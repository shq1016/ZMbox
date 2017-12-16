<?php
/*
 * Created on 2017-12-15
 *xxx.com/index/index
 *1、隐藏index.php
 *2、获取URL参数部分
 *3、返回对应控制器和方法
 */
 namespace core\lib;

 class route{

	public $ctrl;//第一个控制器
	public $action;//第二个参数方法
	public function __construct(){

		//当获取的值存在，并且不能为/时,因为在没有参数时，那么就只有/
		if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!='/'){
			$path=$_SERVER['REQUEST_URI'];
			$patharr=explode('/',trim($path,'/'));//trim 这里去除首尾的'/'，然后只剩  index/index,原来可能是/index/index/  也有可能是/index/index
			//p($patharr);

			if(isset($patharr[0])){
				$this->ctrl=$patharr[0];
				unset($patharr[0]);//如果已经存在就销毁
			}
			if(isset($patharr[1])){
				$this->action=$patharr[1];
				unset($patharr[1]);
			}else{
				$this->action='index';
			}
			//URL相关参数转换为GET
			$count= count($patharr)+2;
			$i=2;
			while($i<$count){
				if(isset($patharr[$i+1])){//判断数组是否越界,因为有时候url里面没有对应某个参数
					$_GET[$patharr[$i]]=$patharr[$i+1];
				}
				$i=$i+2;

			}
			p($_GET);

		}else{//默认输出  xxx.com/index/index
		$this->ctrl='index';
		$this->action='index';

		}

	}
 }
?>
