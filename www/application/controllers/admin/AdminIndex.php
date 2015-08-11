<?php
/*
*@Desc:后台首页控制器
*@Author:Luffy mail@aoxiang.me
*@Time:2015年8月7日 13:43:51
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminIndex extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("CiSmarty");
		//定义后台模版路径
		$this->cismarty->assign("THEMEPATH","/application/themes/admin/default");
		//取得当前按钮
		$this->load->helper("admin_menu");
		$this->cismarty->assign("admin_menu",admin_menu());
		$this->load->helper("common");
		
	}
	public function index()
	{
		$this->load->library('CiTheme');

		//传入标题信息
		$title = t("console");
		$this->cismarty->assign("title",$title);
		//传入菜单按钮active状态
		$this->cismarty->assign("active",array(__CLASS__,__FUNCTION__));
		$this->cismarty->display("admin/default/index.html");

		//$this->cismarty->display("admin/default/theme_setting.html");
		//$this->load->view("welcome_message");
	}


	
}
