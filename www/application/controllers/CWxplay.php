<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CWxplay extends CI_Controller
{
    public $CI;
    public function __construct()
    {
        parent::__construct();

    }
    public function index($param=array())
    {
        $this->load->library("WxPay.Data");
    }
    
}
