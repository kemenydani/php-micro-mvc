<?php

namespace Controllers;
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 2017. 06. 27.
 * Time: 14:35
 */
class Home
{
	public function __construct()
	{
	
	}
	public static function index(){
		\Core\View::getInstance()->display('home.tpl');
	}
}