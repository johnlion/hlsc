<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/CNode.php';
class AdminNode extends CNode {
	public function __construct() {
		parent::__construct();
		$this->load->library("CiSmarty");
		$this->load->library('CiPage');
		//定义后台模版路径
		//$this->cismarty->assign("THEMEPATH", "/application/themes/admin/default");
	}

/*
public function nodeinsert() {

//传入菜单按钮active状态
$this->cismarty->assign("active", array(__CLASS__, __FUNCTION__));
$title = t("user_list");
$this->cismarty->assign("title", $title);
$this->cismarty->display("user_index.html");
//$this->cismarty->display("admin/default/theme_index.html");
}
 */
}
