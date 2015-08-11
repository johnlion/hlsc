<?php
class Module implements BaseLib {

	public $CI;
	public $dbprefix;

	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->CI->load->helper("common");
		$this->dbprefix = $this->CI->db->dbprefix;
	}

/*
 * --------------------------------------------------------------------
 * Interface
 * --------------------------------------------------------------------
 *
 * And away we go...
 */

	public function install($param = array()) {
		$file = APPPATH . 'libraries/' . $param['file'] . '.php';

		$data = $this->loadini($file);
		return $data;
	}

	public function uninstall($param = array()) {

	}

	public function delete($param = array()) {

	}

	public function update($param = array()) {

	}

	public function insert($param = array()) {

	}

	public function create($param = array()) {

	}
	public function select($param = array()) {

	}

	public function getlist($limit = 10, $offset = 0) {
		/*-----------------------
		 * 获取 表 module的数据
		 *
		 * ----------------------
		 */
		$result = array(
			'data' => array(),
			'status' => 0,
			'message' => '没有数据',
		);
		$query = $this->CI->db->get('module', 200, 0);
		$count = $query->num_rows();

		/*-----------------------
		 * 数据库 module表的数据与文件目录遍历的数据合并
		 *
		 * ----------------------
		 */
		$data = array(
			'querydata' => array(),
			'dirdata' => array(),
		);
		$data['waitwritedata'] = array();
		$data['querydata'] = $query->result_array();
		$data['dirdata'] = $this->dirlist(APPPATH . 'libraries', 'php');
		$data = $this->untree($data, 'modulename');

		/*-----------------------
		 * 插入新检索到的moudules 数据到数据库
		 *
		 * ----------------------
		 */
		if (count($data['waitwritedata'])) {
			$this->CI->db->insert_batch('module', $data['waitwritedata']);
		}

		if ($count > 0) {
			$data = $data['querydata'];
			$result = array(
				'data' => $data,
				'status' => 0,
				'message' => '存在数据',
			);
			return $result;
		} else {

			return $result;
		}
	}

/*
 * --------------------------------------------------------------------
 * Common Fun
 * --------------------------------------------------------------------
 *
 * And away we go...
 */

	/*-----------------------
	 * [untree 反回合并后的数组]
	 * @param array $param['querydata'] [ module 表里的数据集合]
	 * @param array $param['dirdata'] [文件夹 /application/libraries/下文件名称遍历集合]
	 * @param array $param['waitwritedata'] 新增的待写入数据库的数据
	 * ----------------------
	 */
	public function untree($param = array('querdata' => array(), 'dirdata' => array(), 'waitwritedata' => array()), $keyname = '') {
		$querydata_key_arr = array(); //存放已存在的模块名称，用于对比哪些模块仍需导入
		foreach ($param['querydata'] as $key => $svalue) {
			$querydata_key_arr[] = trim($svalue[$keyname]);
		}

		if (count($param) > 0) {
			foreach ($param['dirdata'] as $key => $value) {
				//循环遍历数据库中  module 表里的数据
				if (in_array(trim($value[$keyname]), $querydata_key_arr)) {
					unset($param['dirdata'][$key]);
				}
			}
		}
		//重建索引，并且加入到querydata中
		foreach (array_values($param['dirdata']) as $key => $value) {
			$param['querydata'][] = $value;
			$param['waitwritedata'][] = $value;

		}

		return $param;

	}

	/**
	 * [getList description]
	 * @param  integer $limit  [description]
	 * @param  integer $offset [description]
	 * @return [type]          [description]
	 */
	public function module_getList($limit = 10, $offset = 0) {
		echo 'getList';
		$sql = "select * from  {$this->dbprefix}user limit {$limit},{$offset}";
		$query = $this->CI->db->query($sql);

	}

	/**
	 * [dir_path description]
	 * @param  [type] $path [description]
	 * @return [type]       [description]
	 */
	public function dirpath($path) {
		$path = str_replace('\\', '/', $path);
		if (substr($path, -1) != '/') {
			$path = $path . '/';
		}

		return $path;
	}

	/**
	 * [dir_list description]
	 * @param  [type] $path [description]
	 * @param  string $exts [description]
	 * @param  array  $list [description]
	 * @return [type]       [description]
	 */
	public function dirlist($path = '', $exts = '', $list = array()) {

		$path = $this->dirpath($path);
		$files = glob($path . '*');
		$data = array();

		foreach ($files as $v) {
			if (!$exts || preg_match("/^((?!interface|class).)*\.($exts)/i", $v)) {
				$loadarr = $this->loadini($v);
				if (count($loadarr) > 0) {
					$data[] = $this->loadini($v);

				}

				if (is_dir($v)) {
					//$list = $this->dirlist($v, $exts, $list);
				}
			}
		}

		/*
		if ( count( $data ) >0 ){
		$this->CI->db->insert_batch( $this->dbprefix . 'module',$data );
		$this->CI->db->last_query();
		}
		 */
		return $data;
	}

	/**
	 * [loadini description]加载模块配文件
	 * @param  [type] $file [description]
	 * @return [type]       [description]
	 */
	public function loadini($file) {
		$result = array(
			'data' => array(),
			'status' => 0,
			'message' => '你的用户名或密码错误',
		);
		$condition = array('Modulename', 'Author', 'Desc', 'ModifyTime', 'Version', 'Platform', 'Dependence');
		$partten = array('*@', 'Modulename', 'Author', 'Desc', 'ModifyTime', 'Version', 'Platform', 'Dependence', '=', '\n', '\r', ':');
		$lines = file($file);

		$data = array();
		foreach ($lines as $line_num => $line) {
			$item = array();
			foreach ($condition as $condition_num => $value) {
				if (strpos($line, $value) !== false) {
					$line = str_replace($partten, '', $line);
					$item[$value] = $line;
				}
			}
			if (count($item)) {
				$keyname = array_keys($item);
				$value = array_values($item);
				$data[strtolower($keyname[0])] = trim(str_replace(array("\r\n", "\r", "\n"), "", $value[0]));

			}
			unset($item);
		}
		$data['file'] = $file;
		$data['status'] = 0;
		$data['modifytime'] = time();

		if (count($data) != 9) {
			$data = array();
		}

		return $data;

	}

}