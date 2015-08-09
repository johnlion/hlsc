<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/*
 *@Modulename=CiWxapi
 *@Desc=Module
 *@Author=Wanda
 *@ModifyTime=20150806
 *@Version=1.0
 *@Platform=XMFTHL1.0
 *@Dependence=
 */

require_once 'wxapi/wxapi.class.php';

/**
 *
 */
class CiWxapi extends Wxapi {

	public function __construct() {
		parent::__construct();

	}

}