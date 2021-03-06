<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRole extends CI_Controller {

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
		$this->load->library('CiRole');

	}

	public function insert() {
		/** 模拟数据 */
		$_POST['data'] = array(
			array('rolename' => 'test001'),
			array('rolename' => 'test002'),
			array('rolename' => 'test003'),
		);
		extract($_POST);

		$this->cirole->insert($data = array('data' => $data));

	}

}
