<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CWxapi extends CI_Controller 
{
    //public func
    public $CI;
   	public function __construct() 
    { 
        //$this->CI = & get_instance();
		//$this->CI->load->database();
        parent::__construct(); 
        
    }

	public function index()
	{
        $param=$this->uri->uri_to_assoc(1);
       
	    if(empty($param['token'])&&isset($param['token']))
        {
            echo "您的token不能为空";
        }
        else
        {
          
            $this->load->library( "ciwxapi" );
          
            if(isset($param['echostr'])&&!empty($param['echostr']))
            {
                $re=$this->ciwxapi->wxapi_checksignature($param);
                if($re["status"])
                {
                    echo $re['data']["echostr"];
                    exit;
                }
                exit;
            }
            //$this->ciwxapi->text();
            //$this->load->library( "ciwxapi" );
            $this->ciwxapi->wxapi_fromwxsave(array("xml"=>$GLOBALS["HTTP_RAW_POST_DATA"],"token"=>$param["token"]));
        }
        
        
	}
    
    public function test()
    {
        $this->load->library( "ciwxapi" );
        $this->ciwxapi->text();
    }
}



?>