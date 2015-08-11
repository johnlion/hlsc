<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CWxapi extends CI_Controller
{
    public $CI;
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $param = $this->uri->uri_to_assoc(1);

        if (empty($param['token']) && isset($param['token'])) {
            echo "您的token不能为空";
        } else {

            $this->load->library("CiWxapi");
            if (isset($param['echostr']) && !empty($param['echostr'])) {
                $re = $this->ciwxapi->wxapi_checksignature($param);
                if ($re["status"]) {
                    echo $re['data']["echostr"];
                    exit;
                }
                exit;
            }
            $fromarray = $this->ciwxapi->wxapi_fromwxsave(array("xml" => $GLOBALS["HTTP_RAW_POST_DATA"],
                    "token" => $param["token"]));
            $toarray = $this->ciwxapi->wxapi_replay($fromarray["data"]);
            $xml = new SimpleXMLElement('<xml></xml>');
            $this->ciwxapi->data2xml($xml, $toarray["data"]);
            $toarray["data"]["token"] = $param["token"];

            $this->ciwxapi->wxapi_towxsave($toarray["data"]);
            exit($xml->asXML());
        }


    }

    public function test()
    {
        $this->load->library("CiWx");
        $menu = array(
        "button" => array(
                        
                    array(
                        "name" => "菜单1", 
                        "sub_button" => array(
                            array(
                                "type" => "view",
                                "name" => "超链接",
                                "url" => "http://www.soso.com/"),
                            array(
                                "type" => "click",
                                "name" => "点击事件",
                                "key" => "asasdas"),
                            array(
                                "type" => "scancode_push",
                                "name" => "扫码推事件",
                                "key" => "rselfmenu_0_1"),
                            array(
                                "type" => "scancode_waitmsg",
                                "name" => "扫码带提示",
                                "key" => "rselfmenu_0_0"),
                            array(
                                "type" => "pic_sysphoto",
                                "name" => "系统拍照发图",
                                "key" => "rselfmenu_1_0"),
                            )),
                            array(
                        "name" => "菜单2", 
                        "sub_button" => array(
                            array(
                                "type" => "pic_photo_or_album",
                                "name" => "拍照或者相册发图",
                                "key" => "rselfmenu_1_1"),
                            array(
                                "type" => "pic_weixin",
                                "name" => "微信相册发图",
                                "key" => "rselfmenu_1_2"),
                            array(
                                "type" => "location_select",
                                "name" => "发送位置",
                                "key" => "rselfmenu_2_0"),
                                )
                    )     
                ));
        $erro = $this->ciwx->wx_createmenu(array("token" => "kbikwa1411892495", "data" =>
                $menu));
                print_r($erro);


    }
    public function test1()
    {
        $this->load->library("CiWxapi");
        echo "sssss";
    }
}



?>