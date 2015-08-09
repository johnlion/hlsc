<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/*
 *@Modulename=CiNode
 *@Desc=CiNode
 *@Author=jack
 *@ModifyTime=20150806
 *@Version=1.0
 *@Platform=XMFTHL1.0
 *@Dependence=BaseLib
 */

require_once 'node/node.class.php';

class CiNode extends Node {
	public function __construct() {
		parent::__construct();
	}

}
