<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/CNode.php';
class AdminNode extends CNode {
	public function __construct() {
		parent::__construct();
		$this->load->library("CiSmarty");
		$this->load->library('CiTheme');
		//定义后台模版路径
		$this->cismarty->assign("THEMEPATH", "/application/themes/admin/default");
	}

	/**
	 * [index 列出目录]
	 * @return [type] [description]
	 */
	public function index() {

		//传入菜单按钮active状态
		$this->cismarty->assign("active", array(__CLASS__, __FUNCTION__));
		$title = t("user_list");
		$this->cismarty->assign("title", $title);
		$this->cismarty->display("admin/default/user_index.html");
		//$this->cismarty->display("admin/default/theme_index.html");
	}

	public function nodeinsert() {

		//传入菜单按钮active状态
		$this->cismarty->assign("active", array(__CLASS__, __FUNCTION__));
		$title = t("user_list");
		$this->cismarty->assign("title", $title);
		$this->cismarty->display("admin/default/user_index.html");
		//$this->cismarty->display("admin/default/theme_index.html");
	}
}
