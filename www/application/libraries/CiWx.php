<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/*
 *@Modulename=CiWx
 *@Desc=Module
 *@Author=Wanda
 *@ModifyTime=20150806
 *@Version=1.0
 *@Platform=XMFTHL1.0
 *@Dependence=
 */

require_once 'wx/wx.class.php';

/**
 *
 */
class CiWx extends Wx {

	public function __construct() {
		parent::__construct();

	}

}