<?php

class Node implements BaseLib {
	public $CI;
	public $dbprefix;
	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->CI->load->library('CiToPinyin');
		$this->CI->load->library('CiPage');
		$this->CI->load->helper('Common');
		$this->dbprefix = $this->CI->db->dbprefix;
	}

	//<modulename>_<functionname>

	/**
	 *@author [jack] <[<email address>]>
	 *@param  [param] $[name] [<description>]
	 *@return [Obj] [<description>]
	 */
	public function install($param = array()) {

	}

	/**
	 *@author [jack] <[<email address>]>
	 *@param  [param] $[name] [<description>]
	 *@return [Obj] [<description>]
	 */
	public function uninstall($param = array()) {

	}

	/**
	 *@author [jack] <[<email address>]>
	 *@param  [param] $[name] [<description>]
	 *@return [Obj] [<description>]
	 */

	public function delete($param = array()) {

		if (!empty($param)) {

			//$sql = "delete from {$this->dbprefix}node where nid={$param['id']}";

			//$result= $this->CI->db->query( $sql );

			if (!empty($param['nidtype'])) {
				$this->CI->db->delete('node', array('nid' => $param['nid']));
				$result = $this->CI->db->delete("node_{$param['nidtype']}", array('nid' => $param['nid']));

			} else {

				$query = $this->CI->db->get('node', array('nid' => $param['nid']));
				$childTable = $query->result_array();
				$childTableName = $childTable[0]['nidtype'];
				$this->CI->db->delete('node', array('nid' => $param['nid']));
				$result = $this->CI->db->delete("node_$childTableName", array('nid' => $param['nid']));
				// $childTable[0]['nidtype'];

			}

			if ($result) {

				$data = array(
					'data' => array(),
					'stauts' => 1,
					'message' => '删除成功 !',
				);

			} else {

				$data = array(
					'data' => array(),
					'stauts' => 1,
					'message' => '删除失败 !',
				);

			}

		}

	}

	/**
	 *@author [jack] <[<email address>]>
	 *@param  [param] $[name] [<description>]
	 *@return [Obj] [<description>]
	 */
	public function update($param = array()) {

	}

	/**
	 * [select 查询]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function select($param = array()) {
		/* ----------------------------------------------
		 * 返回数据集 $data 初始化
		 * $param['data']记录总录
		 * $param['status']处理状态 0失败或未处理，1成功
		 * $param['message']处理消息
		 * ----------------------------------------------
		 */
		$data = array(
			'data' => array(),
			'status' => 0,
			'message' => t('search_failed'),
		);

		/* ----------------------------------------------
		 * 翻页 Page
		 * $param['sql_count']记录总录
		 * $param['sql']页面的实体数据
		 * ----------------------------------------------
		 */
		extract($param);
		$offset = $param['page'] - 1;
		$limit = ' LIMIT ' . $offset . ',' . $param['page_size'];

		/* $where 子句  可自行修改 */
		$where = " where n.nidtype='{$data['nidtype']}'";

		/* 记录总数 */
		$param['sql_count'] = trim("
		select  count(1) as total  from {$this->dbprefix}node  as n
		LEFT JOIN {$this->dbprefix}node_{$data['nidtype']} as nc
		on n.nid = nc.nid {$where} ");

		/* 真实数据 */
		$param['sql'] = trim("
		select * from {$this->dbprefix}node  as n
		LEFT JOIN {$this->dbprefix}node_{$data['nidtype']} as nc
		on n.nid = nc.nid  {$where} {$limit} ");

		$data = $this->CI->cipage->page_data_select($param['sql']); //取得数据库真实数据
		$data['pagebanner'] = $this->CI->cipage->page_banner($param); //取得翻页导航条

		cprint($data);
		exit();
		//$this->cipage->page_func($param);

		exit();
		if (!empty($param)) {

			exit();
			if (@$param['issingle'] and !empty($param['nid'])) {

				$query = $this->CI->db->get('node', array('nid' => $param['nid']));
				$childTable = $query->result_array();
				$childTableName = $childTable[0]['nidtype'];
				$childQuery = $this->CI->db->get("$childTableName", array('nid' => $param['nid']));

				$result = $this->CI->db->get($tbName, $page_size, (($page - 1) * $page_size))->result_array();
				$childResult = $childQuery->result_array();

				if (!empty($childResult)) {
					$data = array(
						'data' => $childResult,
						'stauts' => 1,
						'message' => '查询成功 !',
					);

				} else {

					$data = array(
						'data' => array(),
						'stauts' => 1,
						'message' => '查询失败 !',
					);

				}

			} else {
				if (!empty($param['nidtype'])) {

					$sql = "select * from {$this->dbprefix}node  as n
							LEFT JOIN {$this->dbprefix}node_{$param['nidtype']} as nc
							on n.nid = nc.nid ";
					$result = $this->CI->db->query($sql);
					$data = $result->result_array();
					if (!empty($data)) {

						$data = array(
							'data' => $data,
							'stauts' => 1,
							'message' => '查询成功 !',
						);

					} else {

						$data = array(
							'data' => array(),
							'stauts' => 1,
							'message' => '查询失败 !',
						);

					}
				}

			}

		} else {

		}

	}

	/**
	 *@author [jack] <[<email address>]>
	 *@param  [param] $[name] [<description>]
	 *@return [Obj] [<description>]
	 */
	public function insert($param = array()) {

		if (!empty($param)) {
			$time = time();
			$param['addtime'] = $time;
			$param['modifytime'] = $time;
			$nodetable['addtime'] = $time;
			$nodetable['modifytime'] = $time;
			$nodetable['nidtype'] = $param['nidtype'];
			$nodetable['uid'] = $param['uid'];
			// $sql="INSERT INTO  {$this->dbprefix}node (`nidtype`,`addtime`,`modifytime`,`uid`) VALUES({$param['nidtype']},$time,$time ,{$param['uid']})";

			$this->CI->db->trans_start();
			$this->CI->db->insert("node", $nodetable);
			$insertID = $this->CI->db->insert_id();

			if ($insertID) {
				$table = "node_" . $param['nidtype'];
				$data['data']['insertid'] = $insertID;
				$data['status'] = 1;
				$data['message'] = t('add_success');
				$param["data"]["nid"] = $insertID;
				//echo $table;
				//print_r($param["data"]);
				//exit;
				$this->CI->db->insert("$table", $param['data']);

			} else {

				$data = array(
					'data' => array(),
					'status' => 0,
					'message' => t('add_failed'),
				);

			}
			$this->CI->db->trans_complete();
			if ($this->CI->db->trans_status() === FALSE) {
				$data = array(
					'data' => array(),
					'status' => 0,
					'message' => t('add_failed'),
				);
			}
			return $data;

		}

	}

	/**
	 *@author [jack] <[<email address>]>
	 *@param  [param] $[name] [<description>]
	 *@return [Obj] [<description>]
	 */
	public function create($param = array()) {

	}

	/**
	 *@author [jack] <[<email address>]>
	 *@param  [param] $[name] [<description>]
	 *@return [Obj] [<description>]
	 */
	public function getlist($limit = 10, $offset = 0) {

	}

	/**
	 * [node_type_insert 添加节点类型]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function node_type_insert($param = array()) {
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
		$param['data'] = deleteRepeatData($param['data'], 'node_type', 'nidtype', $this->CI->db);

		/* 批量或者单个写入记录到 tb role */
		if (count($param['data']) > 0) {
			$this->CI->db->trans_start();
			$this->CI->db->insert_batch('node_type', $param['data']);
			$this->CI->db->trans_complete();
		}
		return $data;
	}

	/**
	 * [node_type_list 节点类型列表的获得]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function node_type_list($param = array('records' => 20, 'offset' => 0)) {
		$data = array(
			'data' => array(),
			'status' => 1,
			'message' => '',
		);
		$query = $this->CI->db->get('node_type', $param['records'], $param['offset']);
		$count = $query->num_rows();
		$data = array(
			'data' => $query->result_array(),
			'status' => 1,
			'message' => 'search_success',
		);
		return $data;
	}

	/**
	 * [node_type_update 节点类型的更新、批量更新]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function node_type_update($param = array()) {
		$data = array(
			'data' => array(),
			'status' => 0,
			'message' => 'add_failed',
		);

		if (count($param) > 0) {
			foreach ($param as $key => $value) {
				$this->CI->db->where('nidtype', $value['nidtype']);
				$this->CI->db->update('node_type', $value);
				if ($this->CI->db->affected_rows() > 0) {
					$nodetypenameAssembles[] = $value['nodetypename'] . ' ' . t('update_success');
				} else {
					$nodetypenameAssembles[] = $value['nodetypename'] . ' ' . t('update_failed');
				}

			}
			$data = array(
				'data' => $nodetypenameAssembles,
				'status' => 0,
				'message' => 'add_failed',
			);

		}

		return $data;

	}

	/**
	 * [node_type_delete 节点类型的删除、批量删除]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function node_type_delete($param = array()) {
		$data = array(
			'data' => array(),
			'status' => 0,
			'message' => t('delete_failed'),
		);
		$count = count($param);
		if ($count > 0 && $count < 2) {
			$this->CI->db->delete('node_type', array('nidtype' => $param[0]['nidtype']));

		}
		if ($count > 1) {
			$where = '';
			foreach ($param as $key => $value) {
				$where[] = "'" . $value['nidtype'] . "'";
			}
			$where = implode(',', $where);
			$wherein = "where `nidtype` in ( {$where} )";

			$sql = "delete from {$this->dbprefix}node_type {$wherein}";
			$this->CI->db->query($sql);
		}
		if ($this->CI->db->affected_rows()) {
			$data = array(
				'data' => array(),
				'status' => 1,
				'message' => t('delete_success'),
			);
		}
		return $data;
	}

}