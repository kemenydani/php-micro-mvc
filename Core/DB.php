<?php

namespace Core;

class DB extends \PDO{
	
	public static $_instance;
	
	public static function getInstance(){
		if(self::$_instance === null){
			self::$_instance = new DB('mysql:host=localhost;dbname=live_prepare', 'root', '');
			self::$_instance->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
			self::$_instance->exec("set names utf8");
		}
		return self::$_instance;
	}
	
}