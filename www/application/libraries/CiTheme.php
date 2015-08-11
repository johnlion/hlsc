<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

/*
*@Modulename=Theme
*@Desc=主题功能模块
*@Author=Luffy
*@Time=2015年8月6日 15:43:08
*@Version=1.0
*@Platform=XMFTHL1.0
*@Dependence=Module1,Module2
*/
require("theme/theme.class.php");
class CiTheme extends theme{

	public function __construct()
	{
		parent::__construct();
		
	}

}
