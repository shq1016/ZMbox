<?php
/*
 * Created on 2017-12-15
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
namespace core;

class zmbox{

	public static $classMap=array();
	public $assign;

	//启动框架方法
	static	public function run(){


		$route=new \core\lib\route();
		$ctrlClass=$route->ctrl;
		$action=$route->action;
		$ctrlfile=APP.'/Controller/'.$ctrlClass.'Controller.php';
		$cltr='\\'.MODULE.'\Controller\\'.$ctrlClass.'Controller';
		if(is_file($ctrlfile)){
			include $ctrlfile;
echo $cltr;
			$controller=new $cltr();
			$controller->$action();
		}else{


			throw new \Exception('找不到控制器'.$ctrlClass);
		}
	}

	static public function load($class){
		//自动加载类库
		//new \core\route()




		if(isset($classMap[$class])){


			return true;

		}else{

			//把反斜线转换为正斜线，因为命名空间实例化是使用反斜线

			$class=str_replace('\\','/',$class);
			 $file=APP_PATH.'/'.$class.'.php';



			if(is_file($file)){
				include $file;
				self::$classMap[$class]=$class;

			}else{

				return false;
			}

		}

	}

	public function assign($data){



	}
	public function display($file){

	}




}

?>
