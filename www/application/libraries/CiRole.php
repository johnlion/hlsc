<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/*
 *@Modulename=CiRole
 *@Desc=CiRole Module
 *@Author=Chandler
 *@ModifyTime=20150806
 *@Version=1.0
 *@Platform=XMFTHL1.0
 *@Dependence=Module1,Module2
 */

require_once 'role/role.class.php';

/**
 *
 */
class CiRole extends Role {

	public function __construct() {
		parent::__construct();

	}

}