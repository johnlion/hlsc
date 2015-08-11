<?php
/*
*@Desc:后台订单控制器
*@Author:Luffy mail@aoxiang.me
*@Time:2015年8月8日 23:20:47
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminOrder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library("CiSmarty");
		//$this->load->library('CiTheme');
		//定义后台模版路径
		$this->cismarty->assign("THEMEPATH","/application/themes/admin/default");

		//取得当前按钮
		$this->load->helper("admin_menu");
		$this->cismarty->assign("admin_menu",admin_menu());

		$this->load->helper("common");
		
	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:后台订单列表显示
	 * @Time:2015年8月8日 23:22:08
	 */
	public function index()
	{
	
		//传入菜单按钮active状态
		$this->cismarty->assign("active",array(__CLASS__,__FUNCTION__));
		$title = t("order_list");
		$this->cismarty->assign("title",$title);
		$this->cismarty->display("admin/default/order_index.html");
		//$this->cismarty->display("admin/default/theme_index.html");
	}

}
