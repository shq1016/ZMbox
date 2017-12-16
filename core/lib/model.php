<?php
/*
 * Created on 2017-12-16
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 namespace core\lib;

 class model extends \PDO
 {
		public function __construct(){

			$dsn='mysql:host=localhost;dbname=test';
			$username='root';
			$password='root';
			try{
				parent::__construct($dsn,$username,$password);

			}catch(\PDOException $e){
				p($e->getMessage());
			}


		}


 }

?>
