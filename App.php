<?php
/**
 * 项目入口文件
 * @author 燕睿涛(luluyrt@163.com)
 * @time 2015年1月3日 13:11:31
 */
class App{
	protected static $apppath = null;
	private static function init(){
		self::$apppath = realpath(dirname("./"));

		include_once("./core/Autoload.php");
		$Autoload = new core\Autoload();
		$Autoload->addNamespace("vendor", self::$apppath.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR);
		$Autoload->register();
	}

	public static function run(){
		self::init();
		new vendor\test1\hello();
		$test = new vendor\test2\world();
		$test->sayhello();
	}
}

App::run();