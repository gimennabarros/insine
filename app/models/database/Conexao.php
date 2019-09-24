<?php  

class Conexao {

	private static $instance;

	public static function getConn() {

		if(!isset(self::$instance)){
			self::$instance = new \PDO('mysql:host=localhost;dbname=insine;charset=utf8','root','');
		}
		
		return self::$instance;

	}

}