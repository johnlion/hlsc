<?php

class RBAC {

	public $CI;
	public $dbprefix;

	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->CI->load->helper("common");
		$this->dbprefix = $this->CI->db->dbprefix;
	}

}
