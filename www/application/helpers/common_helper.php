<?php
/*
 *@Desc:公共函数包
 *@Author:Luffy mail@aoxiang.me
 *@Time:2015年8月7日 09:17:34
 */

/**
 * @author Luffy <mail@aoxiang.me>
 * @Desc:显示语言包对应值

 * 使用方法
 * [example]
 * $this->load->helper("common");
 * t('chandler 是一个笨蛋');
 */
function t($param = "") {
	if (!empty($param)) {
		$CI = &get_instance();
		//这里还需要根据IP地址判断所在地区，在通过地区指定所使用的语言包

		$CI->lang->load("common");

		$result = $CI->lang->line($param);
		if (empty($result)) {
			return $CI->lang->line("no_language");
		} else {
			return $result;
		}
	}
}

/**
 * [isAjax 判断是否为Get/Post/Ajax提交]
 * [author]chandler
 * @return boolean [description]
 */
function isAjax() {
	if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		return true;
	} else {
		return false;
	}
}

/**
 * 是否是GET提交的
 */
function isGet() {
	return $_SERVER['REQUEST_METHOD'] == 'GET' ? true : false;
}

/**
 * 是否是POST提交
 * @return int
 */
function isPost() {
	return ($_SERVER['REQUEST_METHOD'] == 'POST' && checkurlHash($GLOBALS['verify']) && (empty($_SERVER['HTTP_REFERER']) || preg_replace("~https?:\/\/([^\:\/]+).*~i", "\\1", $_SERVER['HTTP_REFERER']) == preg_replace("~([^\:]+).*~", "\\1", $_SERVER['HTTP_HOST']))) ? 1 : 0;
}

function cprint($data) {
	echo '<pre>';
	print_r($data);
}

/**
 * [deleteRepeatData deleteRepeatData 与数据库的数据进行比对，去除待写入数据中重复的数据]
 * @param  array  $data  [description]
 * @param  string $table [description]
 * @param  [type] $db    [description]
 * @return [type]        [description]
 */
function deleteRepeatData($data = array(), $table = '', $db = '') {
	/* 去重复，并按序单条插入
	foreach ($data as $key => $value) {
	$this->db->where('rolename', $value['rolename']);
	$q = $this->db->get($table);

	if ($q->num_rows() > 0) {
	$this->db->where('user_id', $id);
	$this->db->update('profile', $data);
	} else {
	$this->db->set('user_id', $id);
	$this->db->insert('profile', $data);
	}
	}
	//print_R($db);
	 */

	foreach ($data as $key => $value) {
		$db->where('rolename', $value['rolename']);
		$q = $db->get($table);

		if ($q->num_rows() > 0) {
			unset($data[$key]);
		}
	}
	return array_values($data);
}
