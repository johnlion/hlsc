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
		//define('THEME','default');
		parent::__construct();
		$this->template_dir = APPPATH . '/' . THEME . '/';
		$this->compile_dir = APPPATH . '/' . THEME . '/' . 'templates_c/';
		$this->left_delimiter = '{';
		$this->right_delimiter = '}';
	}

}
?>
