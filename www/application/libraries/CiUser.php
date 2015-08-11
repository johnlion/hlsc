<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/*
 *@Modulename=CiUser
 *@Desc=CiUser Module
 *@Author=Chandler
 *@ModifyTime=20150806
 *@Version=1.0
 *@Platform=XMFTHL1.0
 *@Dependence=Module1,Module2
 */

require_once 'user/user.class.php';

/**
 *
 */
class CiUser extends User {

	public function __construct() {
		parent::__construct();

	}

}