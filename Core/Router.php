<?php

namespace Core;
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 2017. 06. 27.
 * Time: 14:15
 */
class Router {
	
	const _CONTROLLER_ROOT_ = 'Controllers\\';
	const _DEFAULT_CONTROLLER_ = 'Home';
	const _DEFAULT_METHOD_ = 'index';
	
	public static $_controller;
	public static $_method;
	
	public function __construct(){
		echo '1';
	}
	
	public static function init($url){

		$controller_name = isset($url['page']) ? $url['page'] : static::_DEFAULT_CONTROLLER_;
		$controller_path = static::_CONTROLLER_ROOT_ . ucfirst($controller_name);

		if(file_exists($controller_path . '.php')){
			self::$_controller = new $controller_path;
		} else {
			$default_controller_path = static::_CONTROLLER_ROOT_ . static::_DEFAULT_CONTROLLER_;
			self::$_controller = new $default_controller_path;
		}
		
		unset($url['page']);
		
		self::call_method($url);
	}
	
	public static function call_method($url){
		
		if(isset($url['action']) && method_exists(self::$_controller, strtolower($url['action']))){
			self::$_method = strtolower($url['action']);
		} else {
			self::$_method = static::_DEFAULT_METHOD_;
		}
		
		unset($url['action']);
		call_user_func([self::$_controller, self::$_method], $url);
	}
	
}