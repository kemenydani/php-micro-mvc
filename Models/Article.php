<?php

namespace Models;
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 2017. 06. 27.
 * Time: 14:04
 */
class Article extends \Core\DB
{
	public function __construct(){
	
	}

	public static function fetch(){
		$data = [];
		$query = Article::getInstance()->query("SELECT * FROM articles");
		if($query->rowCount()){
			$data = $query->fetchAll(\PDO::FETCH_OBJ);
		}
		return $data;
	}
}