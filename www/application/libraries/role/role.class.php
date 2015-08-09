<?php

class Role {

	public $CI;
	public $dbprefix;

	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->dbprefix = $this->CI->db->dbprefix;
		$this->CI->load->helper('common');
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
		$query = $this->CI->db->get('Role', $param['records'], $param['offset']);
		$count = $query->num_rows();
		$data = array(
			'data' => $query->result_array(),
			'status' => 1,
			'message' => 'search_success',
		);
		return $data;

	}

	/**
	 * [update 角色编辑]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function update($param = array('uid' => 0)) {

	}

	/**
	 * [delete 角色删除]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function delete($param = array('uid' => 0)) {

	}

	/**
	 * [insert 角色添加]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function insert($param = array()) {
		$data = array(
			'data' => array(),
			'status' => 0,
			'message' => 'Please_write_Form',
		);

		if (count($param) == 0) {
			return $data;
		}

		/* 数据去重复 */

		//$this->db->where('rolename', $data['rolename'] );
		$param['data'] = deleteRepeatData($param['data'], 'role', $this->CI->db);

		/* 批量或者单个写入记录到 tb role */
		$this->CI->db->trans_start();
		$this->CI->db->insert_batch('role', $param['data']);
		$this->CI->db->trans_complete();
		return $data;

	}
}