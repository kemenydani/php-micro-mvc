<?php

namespace Controllers;

use Core\View;

class Home
{
	public function __construct()
	{
	
	}
	public static function index(){
		View::getInstance()->display('home.tpl');
	}
}