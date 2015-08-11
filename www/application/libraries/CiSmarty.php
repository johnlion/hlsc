<?php
/*
 *@Modulename=CiSmarty
 *@Desc=CiSmarty
 *@Author=Rodney Rehm,Uwe Tews,Monte Ohrt
 *@ModifyTime=20150806
 *@version 3.1-DEV
 *@Platform=XMFTHL1.0
 *@Dependence=BaseLib
 */
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

require_once 'smarty/Smarty.class.php';
class CiSmarty extends Smarty {
	function CiSmarty() {

		parent::__construct();

		if ($this->is_mobile()) {
			$$uri = 'mobile';
		}

		if ($this->is_weixin()) {
			$$uri = 'weixin';
		}

		$uri = explode('/', $_SERVER['REQUEST_URI']);
		$uri[1] = !isset($uri[1]) ? '' : $uri[1];

		switch ($uri[1]) {
		case 'admin':
			$this->template_dir = APPPATH . THEME_ADMIN . '/';

			break;
		case 'mobile':
			$this->template_dir = APPPATH . THEME_MOBILE . '/';
		case 'weixin':
			$this->template_dir = APPPATH . THEME_MOBILE . '/';
		case 'pc':
			$this->template_dir = APPPATH . THEME_PC . '/';
			break;
		default:
			$this->template_dir = APPPATH . THEME_MOBILE . '/';
			break;
		}

		$this->compile_dir = APPPATH . 'cache/' . 'templates_c/';
		$this->left_delimiter = '{';
		$this->right_delimiter = '}';
	}

	function is_weixin() {
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
			return true;
		}
		return false;
	}

	function is_mobile() {
		if (stripos($_SERVER['HTTP_USER_AGENT'], "android") != false || stripos($_SERVER['HTTP_USER_AGENT'], "ios") != false || stripos($_SERVER['HTTP_USER_AGENT'], "wp") != false) {
			return true;
		} else {
			return false;
		}
	}

}
?>
