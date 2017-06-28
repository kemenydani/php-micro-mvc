<?php

namespace Controllers;

use Core\View;
use Core\Request;

/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 2017. 06. 27.
 * Time: 14:16
 */

class Article {

	public static function index(){
		
		var_dump(Request::get('page'));
		
		$model = new \Models\Article();
		$articles = $model::fetch();
		
		View::getInstance()->assign('articles', $articles)
							->display('article.list.tpl');
	}
	
	public static function read($params){
		var_dump($params);
	}
	
}