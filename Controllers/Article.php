<?php

namespace Controllers;
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 2017. 06. 27.
 * Time: 14:16
 */

class Article {

	public static function index(){
		
		$model = new \Models\Article();
		$articles = $model::fetch();
		
		\Core\View::getInstance()->assign('articles', $articles)
							->display('article.list.tpl');
	}
	
	public static function read($params){
		var_dump($params);
	}
	
}