<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CModule extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->helper("common");
		$this->load->library('CiModule');
		$this->load->library('CiPage');

	}

	public function insert() {
		$data = array(
			'data' => array(),
			'stauts' => 0,
			'message' => t('禁止在后台注册模块'),
		);
		return $data;

	}

	/**
	 * [delete 停止使用模块]
	 * @return [type] [description]
	 */
	public function delete() {

	}

	public function create() {

	}

	public function update() {

	}

	public function select() {

	}

	public function uninstall() {
		/*
		if ( isPost ){ extract( $_POST ); }
		if ( isGet  ){ extract( $_GET ); }
		 */

		/**
		 * 虚拟数据
		 */
		$_POST['data'] = array(
			array(
				'moduleid' => 4,
				'modulename' => 'CiUser',

			),
			array(
				'moduleid' => 2,
				'modulename' => 'CiNode',

			),
			array(
				'moduleid' => 3,
				'modulename' => 'CiTheme',

			),
		);
		extract($_POST);
		foreach ($data as $key => $value) {
			$tempfileArr[$key] = $this->cimodule->install(array('file' => $value['modulename']));
			$tempfileArr[$key]['status'] = 0;
			$this->db->where('moduleid', $value['moduleid']);
			$this->db->update('module', $tempfileArr[$key]);
			if ($this->db->affected_rows() > 0) {
				$modulenameAssembles[] = $value['modulename'] . '1 ' . t('modules_uinstalled');
			} else {
				$modulenameAssembles[] = $value['modulename'] . ' 2' . t('please_try_again_later');
			}

		}

		echo '<pre>';
		print_r($modulenameAssembles);
	}

	public function install() {
		/*
		if ( isPost ){ extract( $_POST ); }
		if ( isGet  ){ extract( $_GET ) }
		 */

		/**
		 * 虚拟数据
		 */
		$_POST['data'] = array(
			array(
				'moduleid' => 4,
				'modulename' => 'CiUser',

			),
			array(
				'moduleid' => 2,
				'modulename' => 'CiNode',

			),
			array(
				'moduleid' => 3,
				'modulename' => 'CiTheme',

			),
		);
		extract($_POST);
		foreach ($data as $key => $value) {
			$tempfileArr[$key] = $this->cimodule->install(array('file' => $value['modulename']));
			$tempfileArr[$key]['status'] = 1;
			$this->db->where('moduleid', $value['moduleid']);
			$this->db->update('module', $tempfileArr[$key]);
			if ($this->db->affected_rows() > 0) {
				$modulenameAssembles[] = $value['modulename'] . ' ' . t('modules_installed');
			} else {
				$modulenameAssembles[] = $value['modulename'] . ' ' . t('modules_install_failed');
			}

		}

		$data = array(
			'data' => array(),
			'modifytime' => time(),
			'status' => 1,
			'message' => $modulenameAssembles,
		);

		echo '<pre>';
		print_r($modulenameAssembles);
	}

	public function index() {

		echo '123423';
		exit();
		$text = $this->load->library('CiModule');

		echo '<pre/>';
		$data = $this->cimodule->getlist(500, 0);
		print_r($data);
		//print_r(	$this->cimodule->dirlist( APPPATH . 'libraries'  ) );
	}

}
