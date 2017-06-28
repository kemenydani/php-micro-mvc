<?php

namespace Core;
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 2017. 06. 27.
 * Time: 14:15
 */
class Router {
	
	const _DEFAULT_METHOD_ = 'index';
	
	public $controllerFactory;
	public $controller;
	protected static $_instance;
	
	public static function getInstance(){
		if(self::$_instance === null){
			self::$_instance = new Router();
		}
		return self::$_instance;
	}
	
	public function __construct(){
		$this->controllerFactory = new ControllerFactory();
	}
	
	public function load(Request $url){

		if($this->controllerFactory::exists($url::get('page'))){
			$this->controllerFactory::make($url::get('page'));
		} else {
			$this->controllerFactory::make('home');
		}
		
		if($this->controllerFactory::method_exists($url::get('action'))){
			$this->controllerFactory::call_method($url::get('action'));
		} else {
			$this->controllerFactory::call_method('index');
		}

	}
}