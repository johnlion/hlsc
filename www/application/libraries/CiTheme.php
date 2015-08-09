<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/*
 *@Modulename=CiTheme
 *@Desc=CiTheme
 *@Author=Lufffy
 *@ModifyTime=20150806
 *@Version=1.0
 *@Platform=XMFTHL1.0
 *@Dependence=BaseLib
 */
class CiTheme {

	public $CI;
	public function __construct($params) {
		$this->CI = &get_instance();
	}

}
