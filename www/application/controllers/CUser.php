<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CUser extends CI_Controller {

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
		$this->load->library('CiUser');

	}

	public function index() {
		echo 'User CI_Controller';

	}

	public function login() {
		echo 'login';
	}

	public function logout() {
		echo 'logout';
	}

	public function select() {

		$data = $this->ciuser->select($param = array('records' => 20, 'offset' => 0));
		cprint($data);

	}

	public function upadte() {
		# code...
	}

}
