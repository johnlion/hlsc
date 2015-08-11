<?php

class RBAC {

	
	private $url_model;//所访问的模块，如：music
    private $url_action;//所访问的友好url，如：/create/
    private $url_param;//url所带参数 可能是 1 也可能是 id=1&name=test
    private $url_method;
 	public $CI;
	public $dbprefix;

	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->CI->load->library('session');
		$this->CI->load->helper("common");
		$this->dbprefix = $this->CI->db->dbprefix;
		$url = $_SERVER['PHP_SELF'];
       //echo"<pre>"; print_r($_SERVER);
        $arr = explode('/', $url);
        $mo  =explode('/', $_SERVER['REQUEST_URI']);
        $arr = array_slice($arr, array_search('index.php', $arr) + 1, count($arr));


        $this->url_model = isset($mo[1]) ? $mo[1] : '';
        $this->url_action = isset($mo[2]) ?  '/' . $mo[1] . '/' . $mo[2] : 'index';
        $this->url_method = isset($mo[2]) ?  $mo[2] : '';
        //$this->url_param = isset($mo[3]) ? $mo[3] : '';

	}

  public function index()
  {

  	 
  	 print_r( $this->url_model);

  	 print_r($this->url_action );
  }

 

}
