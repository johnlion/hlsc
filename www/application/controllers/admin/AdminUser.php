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
	public function index($page = 1) {
		if (isPost()) {extract($_POST);}
		if (isGet()) {extract($_GET);}
		//传入菜单按钮active状态
		$this->cismarty->assign("active", array(__CLASS__, __FUNCTION__));
		$title = t("user_list");
		$this->cismarty->assign("title", $title);

		$param['page']      = intval($page);
		$param['page_size'] = 2; //每个分页显示的记录行数
		$param['show_page'] = 5; //banner显示条数
		$userlist           = $this->ciuser->user_get_user($param);
		$this->cismarty->assign("userlist", $userlist['data']);
		$this->cismarty->assign("pages", $userlist['pagebanner']);

		$this->cismarty->display("user_index.html");
		//$this->cismarty->display("admin/default/theme_index.html");
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
		//$this->cismarty->display("admin/default/theme_index.html");

	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:显示编辑用户页面
	 * @Time:2015年8月11日 10:05:28
	 */
	public function edit($uid) {

		if (empty($uid)) {
			var_dump(t("param_error"));
		} else {
			$uid = intval($uid);
		}
		//传入菜单按钮active状态
		$this->cismarty->assign("active", array(__CLASS__, __FUNCTION__));
		$title = t("user_edit");
		$this->cismarty->assign("title", $title);

		$user = $this->ciuser->user_get_user_by_uid($uid);
		$this->cismarty->assign("user", $user['data']);
		$this->cismarty->display("user_edit.html");
		//$this->cismarty->display("admin/default/theme_index.html");

	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:添加用户
	 * @Time:2015年8月10日 11:51:22
	 */
	public function ajax_user_add() {

		$user = array(
			"openid"   => $this->input->post("openid"),
			"headimg"  => $this->input->post("headimg"),
			"realname" => $this->input->post("realname"),
			"sex"      => $this->input->post("sex"),
			"mobile"   => $this->input->post("mobile"),
			"qq"       => $this->input->post("qq"),
			"birthday" => $this->input->post("birthday"),
			"remark"   => $this->input->post("remark"),
			"isdelete" => "0",
			"addtime"  => $this->time,

		);

		echo json_encode($this->ciuser->insert($user));

	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:添加用户
	 * @Time:2015年8月10日 11:51:22
	 */
	public function ajax_user_edit() {

		$uid = intval($this->input->post("uid"));
		if (empty($uid)) {
			$result['status']  = 0;
			$result['data']    = "";
			$result['message'] = t("param_error");
			echo json_encode($result);
		} else {
			$user = array(
				"headimg"  => $this->input->post("headimg"),
				"realname" => $this->input->post("realname"),
				"sex"      => $this->input->post("sex"),
				"mobile"   => $this->input->post("mobile"),
				"qq"       => $this->input->post("qq"),
				"birthday" => $this->input->post("birthday"),
				"remark"   => $this->input->post("remark"),
				"isdelete" => "0",
				"addtime"  => $this->time,

			);

			echo json_encode($this->ciuser->user_update_by_uid($user, $uid));
		}

	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:删除用户
	 * @Time:2015年8月11日 09:12:19
	 */
	public function ajax_user_delete() {

		$uid = intval($this->input->post("uid"));

		echo json_encode($this->ciuser->user_delete_user($uid));

	}

}
