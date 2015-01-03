<?php
namespace vendor\test1;
/**
 * 测试自动加载的类
 * @author 燕睿涛(luluyrt@163.com)
 * @time 2015年1月3日 13:30:43
 */
class hello
{
	public function __construct()
	{
		echo "加载了[ vendor/test1/hello.php ]文件\r";
	}

	public function sayhello(){
		echo "hello, welcome!!";
	}
}