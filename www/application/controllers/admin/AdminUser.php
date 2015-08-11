<?php
/*
 *@Desc:后台订单控制器
 *@Author:Luffy mail@aoxiang.me
 *@Time:2015年8月8日 23:20:47
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminUser extends CI_Controller {

	public $time;
	public function __construct() {
		parent::__construct();

		$this->load->library("CiSmarty");
		$this->load->library('CiUser');
		//定义后台模版路径
		$this->cismarty->assign("THEMEPATH", "/application/" . THEME_ADMIN);

		//取得当前按钮
		$this->load->helper("admin_menu");
		$this->cismarty->assign("admin_menu", admin_menu());
		$this->load->helper("common");

		$this->time = time();
	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:后台用户列表显示
	 * @Time:2015年8月8日 23:22:08
	 */
	public function index() {

		//传入菜单按钮active状态
		$this->cismarty->assign("active", array(__CLASS__, __FUNCTION__));
		$title = t("user_list");
		$this->cismarty->assign("title", $title);

		$this->cismarty->display("user_index.html");
		//$this->cismarty->display("theme_index.html");
	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:显示添加用户页面
	 * @Time:2015年8月10日 10:42:45
	 */
	public function add() {

		//传入菜单按钮active状态
		$this->cismarty->assign("active", array(__CLASS__, __FUNCTION__));
		$title = t("user_add");
		$this->cismarty->assign("title", $title);
		$this->cismarty->display("user_add.html");
		//$this->cismarty->display("theme_index.html");

	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:添加用户
	 * @Time:2015年8月10日 11:51:22
	 */
	public function user_add() {

		/*$user = array(
		"openid" => $this->input->post("openid"),
		"headimg" => $this->input->post("headimg"),
		"realname" => $this->input->post("realname"),
		"mobile" => $this->input->post("mobile"),
		"qq" => $this->input->post("qq"),
		"birthday" => $this->input->post("birthday"),
		"remark" => $this->input->post("remark"),
		"addtime" => $this->time,
		);*/

		$user = array(
			"openid" => 'asdfasdf',
			'gid' => 1,
			'addtime' => $this->time,
		);

		if ($this->ciuser->insert($user)) {
			echo t("add_user_success");
		} else {
			echo t("add_user_failed");
		}
	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:添加用户
	 * @Time:2015年8月10日 11:51:22
	 */
	public function ajax_add() {

		$user = array(
			"openid" => $this->input->post("openid"),
			"headimg" => $this->input->post("headimg"),
			"realname" => $this->input->post("realname"),
			"mobile" => $this->input->post("mobile"),
			"qq" => $this->input->post("qq"),
			"birthday" => $this->input->post("birthday"),
			"remark" => $this->input->post("remark"),
			"addtime" => $this->time,
		);

		if ($this->ciuser->insert($user)) {
			echo t("add_user_success");
		} else {
			echo t("add_user_failed");
		}
	}

}
