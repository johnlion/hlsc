<?php

class User {

	public $CI;
	public $dbprefix;

	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->dbprefix = $this->CI->db->dbprefix;
	}

	/*
	 *-----------------------------------------
	 *用户管理
	 */

	/**
	 * [select 用户查询]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function select($param = array('records' => 20, 'offset' => 0)) {

		$data = array(
			'data' => array(),
			'status' => 1,
			'message' => '',
		);
		$query = $this->CI->db->get('user', $param['records'], $param['offset']);
		$count = $query->num_rows();
		$data = array(
			'data' => $query->result_array(),
			'status' => 1,
			'message' => 'search_success',
		);
		return $data;

	}

	/**
	 * [update 用户编辑]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function update($param = array('uid' => 0)) {

	}

	/**
	 * [delete 用户删除]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function delete($param = array('uid' => 0)) {

	}

	/**
	 * [insert 用户添加]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function insert($param = array()) {
		if (count($param) == 0) {

		}

	}
}