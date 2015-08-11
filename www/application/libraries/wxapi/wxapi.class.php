<?php
/**
*@Modulename=Wxapi
*@Desc:微信通过接口下推数据处理
*@Author=ncgis
*@Time=20150806
*@Version=1.0
*@Platform=XMFTHL1.0
*@Dependence=BaseLib Node Lang
**/
class Wxapi implements BaseLib
{
	public $CI;
	public $dbprefix;
    public $cinode;
    public $ciuser;
    public $token;
	public function __construct( )
	{
		$this->CI = & get_instance();
		$this->CI->load->database();
		$this->dbprefix = $this->CI->db->dbprefix;
        $this->CI->load->library('CiNode');
        $this->cinode=$this->CI->cinode;
        $this->CI->load->library('CiUser');
        $this->ciuser=$this->CI->ciuser;
        $this->CI->load->helper("common");
	}
    
    
   	public function install(  $param = array() ){}
	public function uninstall(  $param = array() ){}
	public function delete(  $param = array() ){}
	public function update(  $param = array() ){}
	public function select(  $param = array() ){}
	public function insert(  $param = array() ){}
	public function create(  $param = array() ){}
	public function getlist( $limit = 10, $offset = 0 ){}
    
    /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[xml] [<用户关注时进行的一系列操作>]             
     *@return [array] [<空>]  
     *@time   [time] [20150807] 
     */
    private function wxapi_addsubscribe($param = array())
    {
       $subscribesms;
       foreach($param as $key=>$v)
       {
         $subscribesms[strtolower($key)] =strval($v); 
       }
       $query = $this->CI->db->get_where('wx_user', array('openid' => $subscribesms["fromusername"],'token'=>$this->token));
       $user= $query->result_array();
       if(count($user)<=0)
       {
            $touser["openid"]=$subscribesms["fromusername"];
            $touser["gid"]=1;
            $touser["addtime"]=time();
            $re=$this->ciuser->insert($touser);
            if($re["status"])
            {
                $wx_user["token"]=$this->token;
                $wx_user["openid"]=$subscribesms["fromusername"];
                $wx_user["uid"]=$re["data"];
                $wx_user["subscribe"]=1;
                if(isset($subscribesms["ticket"])&&!empty($subscribesms["ticket"]))
                {
                    $wx_user["ticket"]=$subscribesms["ticket"];
                }
                $wx_user["subscribe_time"]=time();
                $this->CI->db->insert("wx_user", $wx_user);
            }    
       }
       else if(count($user)>0 && $user["0"]["subscribe"]!=1)
       {
            $wx_user["subscribe"]=1;
            $wx_user["subscribe_time"]=time();
            $this->CI->db->where('openid', $subscribesms["fromusername"]);
            $this->CI->db->update('wx_user', $wx_user);
       }  
    }
    /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[xml] [<取消关注操作>]             
     *@return [array] [<空>]  
     *@time   [time] [20150807] 
     */
    public function wxapi_delsubscribe($param = array())
    {
        
       $unsubscribesms;
       foreach($param as $key=>$v)
       {
         $unsubscribesms[strtolower($key)] =strval($v); 
       }
       $wx_user["subscribe"]=0;
       $this->CI->db->where('openid', $unsubscribesms["fromusername"]);
       $this->CI->db->where('token', $this->token);
       $this->CI->db->update('wx_user', $wx_user);    
    }
    /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[xml] [<微信验证推送的消息xml数据>]             
     *@return [array] [<返回数组>]  
     *@time   [time] [20150807] 
     */
     
    
    private function wxapi_smstoarray($xml)
    {
        $smsobj = new SimpleXMLElement($xml);
        if($smsobj->MsgType!="event")
        {
            foreach($smsobj as $key=>$v)
            {
                $bak[strtolower($key)]=strval($v);
            }
        }
        else
        {
            if(in_array($smsobj->Event,array("CLICK","VIEW","subscribe","unsubscribe","LOCATION","SCAN")))
            {
                
                if($smsobj->Event=="subscribe")
                {
                   $this->wxapi_addsubscribe($smsobj);
                }
                else if($smsobj->Event=="unsubscribe")
                {
                    $this->wxapi_delsubscribe($smsobj);
                }
                foreach($smsobj as $key=>$v)
                {
                    $bak[strtolower($key)]=strval($v);
                }
            }
            else if(in_array($smsobj->Event,array("scancode_push","scancode_waitmsg")))
            { 
                foreach($smsobj as $key=>$v)
                {
                    if($key!="ScanCodeInfo")
                    {
                        $bak[strtolower($key)]=strval($v);
                    }
                    else
                    {
                        $bak["scancodeinfo"]["scantype"]=strval($v->ScanType);
                        $bak["scancodeinfo"]["scanresult"]=strval($v->ScanResult);
                    }
                    
                }
            }
            else if(in_array($smsobj->Event,array("pic_sysphoto","pic_photo_or_album","pic_weixin")))
            {
                foreach($smsobj as $key=>$v)
                {
                    if($key!="SendPicsInfo")
                    {
                        $bak[strtolower($key)]=strval($v);
                    }
                    else
                    {
                        $bak["sendpicsinfo"]["count"]=strval($v->Count);
                        foreach($v->PicList->item as $v1)
                        {
                           $bak["sendpicsinfo"]["piclist"]["picmd5sum"][]=strval($v1->PicMd5Sum);
                        }
                    }
                
                }
            }
            else if($smsobj->Event=="location_select")
            {
                foreach($smsobj as $key=>$v)
                {
                    if($key!="SendLocationInfo")
                    {
                        $bak[strtolower($key)]=strval($v);
                    }
                    else
                    {
                        $bak["sendlocationinfo"]["location_x"]=strval($v->Location_X);
                        $bak["sendlocationinfo"]["location_y"]=strval($v->Location_Y);
                        $bak["sendlocationinfo"]["scale"]=strval($v->Scale);
                        $bak["sendlocationinfo"]["label"]=strval($v->Label);
                        $bak["sendlocationinfo"]["poiname"]=strval($v->Poiname);                          
                    }
                
                }
            }
        }
        return $bak;
        
    }
    /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[signature] [<微信验证推送的数据>] 
     *                $[timestamp] [<微信验证推送的数据>] 
     *                $[nonce] [<微信验证推送的数据>]
     *                $[echostr] [<微信验证推送的数据>]
     *@return [array] [<所包含data status message 三个的数组，成功 status 1 data 返回 echostr  失败 0  data 为空>]  
     *@time   [time] [20150806] 
     */
    
    public function wxapi_checksignature($param=array())
    {
        
        if(!empty($param))
        { 
            $signature = $param["signature"];
            $timestamp = $param["timestamp"];
            $nonce = $param["nonce"];
    		$query = $this->CI->db->get_where('wxapi_config', array('token' => $param["token"]));
            $re=$query->result();
            if(empty($re))
            {
               $back["data"]=array();
               $back["status"]="0";
               $back["message"]=t("wxapi_signatureerror"); 
            }
            else
            {
                $tmpArr = array($param['token'], $timestamp, $nonce);
        		sort($tmpArr, SORT_STRING);
        		$tmpStr = implode( $tmpArr );
        		$tmpStr = sha1( $tmpStr );
                $back["data"]=array("echostr"=>$param['echostr']);
                $back["status"]="1";
                $back["message"]=t("wxapi_signaturesuccess");  
            }
    		return $back;	
        }	 
    }
    
    /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[token] [<推送的token 帐号的唯一标识>] 
     *                $[xml] [<获取的微信推送过来的的消息xml>] 
     *@return [array] []  
     *@time   [time] [20150806] 
     */
    public function wxapi_fromwxsave($param=array())
    {
        if(!empty($param["token"])&&!empty($param["xml"]))
        {
            $this->token=$param["token"];
            $smsarray = $this->wxapi_smstoarray($param["xml"]);
            $smsarray["token"]=$param["token"];
            $smsarray["type"]=1; //存储标识为来自微信的消息
            switch ($smsarray["msgtype"])
            {
                case "text":
                    $func="text";
                    break;
                case "image":
                    $func="image";
                    break;
                case "voice":
                    $func="voice";
                    break;
                case "video":
                    $func="video";
                    break;
                case "shortvideo":
                    $func="shortvideo";
                    break;
                case "location":
                    $func="location";
                    break;
                case "link":
                    $func="link";
                    break;
                case "event":
                    $func="event";
                    break;
                default:
                    $func="null";
                    break;
            }
            if($func=="null")
            {
                $back["data"]=array();
                $back["status"]="0";
                $back["message"]=$this->CI->lang->line("fmessage_nqualified"); 
            }
            else
            {
                if($func!="event")
                {
                     $user=$this->ciuser->user_get_uid_by_openid($smsarray["fromusername"]);
                     if($user["status"]&&!empty($user["data"]["uid"]))
                     {
                        $uid=$user["data"]["uid"];
                     }
                     else
                     {
                        $uid=-1;
                     }
                     $date=array
                     (
                        "data"=>$smsarray,
                        "nidtype"=>"message_".$func,
                        "uid"=>$uid
,
                     );
                    $re=$this->cinode->insert($date);
                  
                }
                else
                {
                     $func="wxapi_".$func;
                     $this->$func($smsarray);
                }
                $back["data"]=$smsarray;
                $back["status"]="1";
                $back["message"]=t("wxapi_xml2arraysuccess");
            }
        }
        else
        {


            $back["data"]=array();
            $back["status"]="0";
            $back["message"]=t("wxapi_xml2arrayerror");
        }
       
        return $back;
        
    }


    
    /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[param] [<获取的微信推送过来的的消息array数据>] 
     *@return [array] [返回需要回复的数据]  
     *@time   [time] [20150810] 
     */
    public function  wxapi_event($param=array())
    {
        if(!empty($param))
        {
            $user=$this->ciuser->user_get_uid_by_openid($param["fromusername"]);
            if($user["status"]&&!empty($user["data"]["uid"]))
            {
                $uid=$user["data"]["uid"];
            }
            else
            {
                $uid=-1;
            }
            if(in_array($param["event"],array("CLICK","VIEW","subscribe","unsubscribe","SCAN","LOCATION")))
            {
                
                $tablenext="CLICK";
                $date=array
                 (
                    "data"=>$param,
                    "nidtype"=>"message_event".strtolower($tablenext),
                    "uid"=>$uid,
                 );
                $re=$this->cinode->insert($date);
            }
            else if(in_array($param["event"],array("scancode_push","scancode_waitmsg","pic_sysphoto","pic_photo_or_album","pic_weixin","location_select")))
            {
                
                $tablenext="scancode";
                
                if(in_array($param["event"],array("scancode_push","scancode_waitmsg")))
                {
                    $param["scancodeinfo"]=serialize($param["scancodeinfo"]);  
                }
                else if(in_array($param["event"],array("pic_sysphoto","pic_photo_or_album","pic_weixin")))
                {
                    
                    $param["sendpicsinfo"]=serialize($param["sendpicsinfo"]); 
                   
                }
                else if(in_array($param["event"],array("location_select")))
                {
                    $param["sendlocationinfo"]=serialize($param["sendlocationinfo"]);  
                }
                
                $date=array
                 (
                    "data"=>$param,
                    "nidtype"=>"message_event".strtolower($tablenext),
                    "uid"=>$uid,
                 );
                 $re=$this->cinode->insert($date);
            }
        }
        
    }
    
    /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[param] [<获取的微信推送过来的的消息array数据，包含token>] 
     *@return [array] [返回需要回复的数组array]  
     *@time   [time] [20150810]
     *@desc   主要完成回复策略的完成,返回的数据注意键值的大小写，以便转成xml时不需要做过多处理
     */
    public function wxapi_replay($param=array())
    {
        //由现在未定回复策略。统一将数据转发给多客服 
         $data["ToUserName"]=$param["fromusername"];
         $data["FromUserName"]=$param["tousername"];
         $data["CreateTime"]=time();
         $data["MsgType"]="transfer_customer_service";
         $bak["data"]=$data;
         $bak["status"]=1;
         $bak["message"]=t("wxapi_replaysuccess");
         return $bak;
    }
     
     /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[param] [<获取的微信推送过来的的消息array数据，不包含包含token>] 
     *@return [array] [返回需要回复的数组xml]  
     *@time   [time] [20150810]
     *@desc   将数组转换为xml 
     */
   	public  function data2xml($xml, $data, $item = 'item') {
		foreach ($data as $key => $value) {
			is_numeric($key) && $key = $item;
			if (is_array($value) || is_object($value)) {
				$child = $xml->addChild($key);
				$this->data2xml($child, $value, $item);
			}else {
				if (is_numeric($value)) {
					$child = $xml->addChild($key, $value);
				}else {
					$child = $xml->addChild($key);
					$node = dom_import_simplexml($child);
					$node->appendChild($node->ownerDocument->createCDATASection($value));
				}
			}
		}
	}
    
    /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[param] [<获取的微信推送过来的的消息array数据，包含token>] 
     *@return [array] [空]  
     *@time   [time] [20150810]
     *@desc   将发送数据存储
     */
    public function wxapi_towxsave($param=array())
    {
        $param["type"]=2;       
        if(in_array($param["MsgType"],array("transfer_customer_service","text")))
        {
            foreach($param as $key=>$v)
            {
                $data[strtolower($key)]=strval($v);
            }
            $tablenext="text";
             $user=$this->ciuser->user_get_uid_by_openid($data["tousername"]);
             if($user["status"]&&!empty($user["data"]["uid"]))
             {
                $uid=$user["data"]["uid"];
             }
             else
             {
                $uid=-1;
             }
            $date=array
             (
                "data"=>$data,
                "nidtype"=>"message_".strtolower($tablenext),
                "uid"=>$uid,
             );
             $re=$this->cinode->insert($date);            
        }
    }
 }