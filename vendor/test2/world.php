<?php
namespace vendor\test2;
/**
 * 测试文件
 * @author 燕睿涛(luluyrt@163.com)
 * @time 2015年1月3日 13:54:37
 */
use vendor\test1 as vendor1;
class world extends vendor1\hello
{
	public function __construct(){
		echo "加载了[ vendor/test2/world.php]文件\r";
	}
}