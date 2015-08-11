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

	/**
	 * [index 产品列表]
	 * uri    domain/nidtype/nid/page
	 * @param  string  $nidtype [description]
	 * @param  integer $page    [description]
	 * @param  string  $nid     [description]
	 * @return [type]           [description]
	 */
	public function index($nidtype = '', $nid = '') {

		if (isPost()) {extract($_POST);}
		if (isGet()) {extract($_GET);}
		/* -----------------------------------------------------
		 * Talbe Field
		 * -----------------------------------------------------
		 */
		$param['data'] = array(
			'nidtype' => $nidtype,
			'nid'     => $nid,
		);
		/* -----------------------------------------------------
		 * Page Param
		 * -----------------------------------------------------
		 */
		$param['page']      = isset($page) ? $page : 1;
		$param['page_size'] = 1; //当前页数
		$param['show_page'] = 5; //页面banner能显示页数
		print_r($this->cinode->select($param));
	}

}
