<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 2017. 06. 28.
 * Time: 19:03
 */

namespace Core;

class Request {
	
	public static $url;
	protected static $_instance;
	
	public static function getInstance(){
		if(self::$_instance === null){
			self::$_instance = new Request($_GET);
		}
		return self::$_instance;
	}
	
	public function __construct($url){
		self::$url = $url;
	}
	
	public static function get($name){
		if(isset(self::$url[$name])){
			return self::$url[$name];
		}
		return '';
	}
	
	public static function remove($name){
		if(isset(self::$url[$name])){
			unset(self::$url[$name]);
		}
	}
	
}