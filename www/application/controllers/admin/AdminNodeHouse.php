<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/CNode.php';
class AdminNodeHouse extends CNode {
	public function __construct() {
		parent::__construct();
		$this->load->library("CiSmarty");
		$this->load->library('CiPage');
		//定义后台模版路径
		$this->cismarty->assign("THEMEPATH", "/application/" . THEME_ADMIN);

		//取得当前按钮
		$this->load->helper("admin_menu");
		$this->cismarty->assign("admin_menu", admin_menu());
		$this->load->helper("common");

	}

/*
public function nodeinsert() {

/**
 * [index 房型列表]
 * uri    domain/nidtype/nid/page
 * @param  string  $nidtype [description]
 * @param  integer $page    [description]
 * @param  string  $nid     [description]
 * @return [type]           [description]
 */
	public function index($nidtype = 'house', $nid = '') {

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
		$datalist           = $this->cinode->select($param);

		/* -----------------------------------------------------
		 * tempplate
		 * -----------------------------------------------------
		 */
		$this->cismarty->assign("datalist", $datalist['data']);
		$this->cismarty->assign("pages", $datalist['pagebanner']);

		/* 传入菜单按钮active状态 */
		$this->cismarty->assign("active", array(__CLASS__, __FUNCTION__));
		$title = t("house_list");
		$this->cismarty->assign("title", $title);

		$this->cismarty->display("nodehouse/nodehouse_index.html");

	}

}
