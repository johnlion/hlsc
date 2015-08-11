<?php
/*
 *@Desc:主题功能基础类
 *@Author:Luffy mail@aoxiang.me
 *@Time:2015年8月6日 14:09:29
 */

class Theme implements BaseLib {

	public $CI;
	public $table;
	public $theme_path;
	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->CI->load->helper("common");
		$this->table = strtolower($this->CI->db->dbprefix . __CLASS__);

		//定义前台模板文件夹
		define("DESKTOP", "desktop");
		//定义后台模板文件夹
		define("ADMIN", "admin");
		//获取模板路径位置
		$this->theme_path = APPPATH . THEME . '/' . DESKTOP;
		$this->theme_admin_path = APPPATH . THEME . '/' . ADMIN;
	}

	public function install($param = array()) {

	}

	public function uninstall($param = array()) {

	}

	public function create($param = array()) {

	}

	public function insert($param = array()) {
		if ($this->CI->db->insert($this->table, $param)) {
			return $this->CI->db->insert_id();
		} else {
			return false;
		}

	}
	public function delete($param = array()) {

	}
	public function update($param = array()) {

	}
	public function select($param = array()) {

	}
	public function getlist($limit = 10, $offset = 0) {

	}

	public function theme_getOne($sql = "", $limited = false) {

		if (!empty($sql)) {
			if ($limited == false) {
				$sql = trim($sql . ' LIMIT 1');
			}

			$query = $this->CI->db->query($sql);
			$query = $query->result_array();

			$result = current($query[0]);
		} else {
			$result = false; // t("param_error");
		}
		return $result;
		/*
	//获取表中所有字段名
	$fields = $this->CI->db->list_fields($this->table);

	if(is_array($param))
	{
	//检查是否存在该字段
	if(in_array($param[0],$fields))
	{
	$this->CI->db->select($param[0]);

	if(isset($param[1]) && is_array($param[1]))
	{
	foreach($param[1] as $key=>$val)
	{
	if(in_array($key,$fields))
	{
	$this->CI->db->where($key,$val);
	}else
	{
	$return['message'] = $this->CI->lang->line("fields_not_exist");
	}
	}
	}

	$query = $this->CI->db->get($this->table);

	$query =  $query->result_array();
	$result['data'] = $query[0][$param[0]];
	}else
	{
	$return['message'] = $this->CI->lang->line("fields_not_exist");
	}
	}else
	{
	$return['message'] = t("param_error");
	}*/

	}
	public function theme_getRow($sql = "", $limited = false) {

		if (!empty($sql)) {
			if ($limited == false) {
				$sql = trim($sql . ' LIMIT 1');
			}

			$query = $this->CI->db->query($sql);
			$query = $query->result_array();

			$result = $query[0];
		} else {
			$result = false;
		}
		return $result;
	}
	public function theme_desktop_theme() {
		$result = array(
			'data' => array(),
			'status' => 0,
			'message' => '',
		);
		$sql = "SELECT themeid,title,themepath,version,status FROM " . $this->table . " WHERE status = 1";

		$theme = $this->theme_getRow($sql);

		if (empty($theme)) {
			$result['message'] = t("no_data");
		} else {

			$result['data'] = $theme;
		}
		return $result;
	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:获取模板目录中模板信息
	 * @Time:2015年8月7日 15:57:54
	 */
	public function theme_get_theme_by_path($is_desktop = DESKTOP) {
		$result = array(
			'data' => array(),
			'status' => 0,
			'message' => '',
		);
		$apppath = substr(APPPATH, strlen(FCPATH));
		$themes[] = NULL;
		if ($is_desktop === DESKTOP) {
			$theme_path = $this->theme_path;
			$is_desktop = DESKTOP;
		} else {
			$theme_path = $this->theme_admin_path;
			$is_desktop = ADMIN;
		}
		if (false != ($handle = opendir($theme_path))) {
			$i = 0;
			while (false !== ($file = readdir($handle))) {
				//去掉"“.”、“..”以及带“.xxx”后缀的文件
				if ($file != "." && $file != ".." && !strpos($file, ".")) {
					$themes[$i] = array(
						"name" => $file,
						"path" => $apppath . THEME . "/" . $is_desktop . "/" . $file,
						"full_path" => $theme_path . "/" . $file,
						"screenshot" => "/" . $apppath . THEME . "/" . $is_desktop . "/" . $file . "/theme.png",
					);
					$i++;
				}
			}
		}
		//关闭句柄
		closedir($handle);
		$result['data'] = $themes;
		return $result;
	}

	/**
	 * @author Luffy <mail@aoxiang.me>
	 * @Desc:设置模板
	 * @Time:2015年8月7日 22:56:48
	 */
	public function theme_set_theme() {
		$result = array(
			'data' => array(),
			'status' => 0,
			'message' => '',
		);
		$array['title'] = $this->CI->input->post("title");
		$array['themepath'] = $this->CI->input->post("themepath");
		$array['version'] = $this->CI->input->post("version");
		if ($this->CI->db->update($this->table, $array, 'themeid = 1')) {

			return true;
		} else {
			return false;
		}
	}

	public function theme_path($themetype = '') {
		$this->CI->db->where('themetype', $themetype);
		$query = $this->CI->db->get('theme');

		exit();
	}
}