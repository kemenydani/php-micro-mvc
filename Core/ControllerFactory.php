<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 2017. 06. 28.
 * Time: 18:41
 */

namespace Core;

class ControllerFactory {
	
	const _DEFAULT_CONTROLLER_ = 'Home';
	const _ROOT_ = 'Controllers\\';
	
	public static $controller;
	
	public static function exists($name){
		return class_exists(static::_ROOT_ . ucfirst($name), true) ? true : false;
	}
	
	public static function make($name){
		$class = static::_ROOT_ . ucfirst($name);
		return self::$controller = new $class;
	}
	
	public static function method_exists($name){
		if(method_exists(self::$controller, strtolower($name))) {
			return true;
		}
		return false;
	}
	
	public static function call_method($name){
		$asd = strtolower($name);
		call_user_func([self::$controller, $asd], []);
	}
	
}