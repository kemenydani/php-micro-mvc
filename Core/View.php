<?php

namespace Core;

/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 2017. 06. 27.
 * Time: 14:09
 */
class View extends \Smarty {
	
	// Smarty setup
	const _CACHING_ENABLED_ = false;
	const _TEMPLATE_DIR_ = 'resources/templates';
	const _COMPILE_DIR_ = 'Storage/compiled';
	const _CACHE_DIR_ = 'Storage/cache';
	
	// Template globals
	
	const _TEMPLATE_GLOBALS_ = [
		'base' => BASE,
		'assets' => BASE . 'resources/assets',
		'jsBase' => BASE . 'resources/assets/js',
		'cssBase' => BASE . 'resources/assets/css'
	];
	
	/**
	 * Class references of the models
	 * Benefit: Easy data access directly from the template
	 */
	const _MODELS_ = [
		'Home' => \Models\Article::class,
		'Article' => \Models\Article::class
	];
	
	public static $_instance = null;
	
	public static function getInstance(){
		if(self::$_instance === null){
			// Initial Smarty settings
			self::$_instance = new View();
			self::$_instance->setTemplateDir(static::_TEMPLATE_DIR_);
			self::$_instance->setCompileDir(static::_COMPILE_DIR_);
			self::$_instance->setCacheDir(static::_CACHE_DIR_);
			self::$_instance->caching = static::_CACHING_ENABLED_;
			// Additional stuff
			self::$_instance->assign(static::_MODELS_);
			self::$_instance->assign(static::_TEMPLATE_GLOBALS_);
		}
		return self::$_instance;
	}

}