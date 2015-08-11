<?php
/*
 *@Desc:后台主题控制器
 *@Author:Luffy mail@aoxiang.me
 *@Time:2015年8月6日 14:10:29
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminTheme extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library("CiSmarty");
		$this->load->library('CiTheme');
		//定义后台模版路径
		$this->cismarty->assign("THEMEPATH", THEME_ADMIN);
		//取得当前按钮
		$this->load->helper("admin_menu");
		$this->cismarty->assign("admin_menu", admin_menu());

		$this->load->helper("common");

	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:后台模板显示
	 * @Time:2015年8月7日 22:56:48
	 */
	public function index() {

		//获取前台模板路径
		$themes = $this->citheme->theme_get_theme_by_path();

		//获取当前启用的模板信息
		$now_theme = $this->citheme->theme_desktop_theme();
		$this->cismarty->assign("now_theme", $now_theme['data']);

		$this->cismarty->assign("themes", $themes['data']);

		//传入菜单按钮active状态
		$this->cismarty->assign("active", array(__CLASS__, __FUNCTION__));
		$title = t("theme_setting");
		$this->cismarty->assign("title", $title);
		$this->cismarty->display("admin/default/theme_index.html");
	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:ajax设置模板
	 * @Time:2015年8月7日 22:56:48
	 */
	public function ajax_set_theme() {
		//$title = $this->input->post("title");
		//$path = $this->input->post("themepath");
		if ($this->citheme->theme_set_theme()) {
			$result = array("status" => "1", "error" => "0", "msg" => $this->input->post("title"));
		} else {
			$result = array("status" => "0", "error" => "1", "msg" => "");
		}

		echo json_encode($result);
	}
	/*public function choose()
{
$this->load->library('CiTheme');

//传入按钮active状态
$this->cismarty->assign("active",array(__CLASS__,__FUNCTION__));
$this->cismarty->display("admin/default/theme_setting.html");
}*/

}
