<?php
/*
 * Created on 2017-12-15
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 namespace app\Controller;
  class indexController{


  	public function index(){
  		/*p('nihao');
  		$model=new \core\lib\model();
  		$sql="select * from item";
  	$ret=	$model->query($sql);
  	p($ret->fetchall());
*/

	$data='hello word';
	$this->assign('data',$data);
	$this->dispaly('index/index.html');





  	}


  }



?>
