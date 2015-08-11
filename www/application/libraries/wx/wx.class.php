<?php
/**
*@Modulename=Wx
*@Desc:主动对接微信的接口数据
*@Author=ncgis
*@Time=201508010
*@Version=1.0
*@Platform=XMFTHL1.0
*@Dependence=BaseLib Node Lang User
**/
class Wx implements BaseLib
{
    public $CI;
	public $dbprefix;
    public $cinode;
    public $ciuser;
	public function __construct( )
	{
		$this->CI = & get_instance();
		$this->CI->load->database();
		$this->dbprefix = $this->CI->db->dbprefix;
        $this->CI->load->library('CiUser');
        $this->CI->load->helper("common");
        $this->ciuser=$this->CI->ciuser;
        
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
     *@param  [param] $[param] [<$token后台用户唯一标识或者用户openid>]             
     *@return [array] [<返回最新有效的accesstoken>]  
     *@time   [time] [20150807] 
     */
    public function wx_getaccesstoken($param=array())
    {
        
        if(isset($param["token"])&&!empty($param["token"]))
        {
            
            //此处是通过token获取accesstoken;
            $query = $this->CI->db->get_where('wx_config', array('token' => $param["token"]));
            $wx_config = $query->result_array();
            if(count($wx_config)<=0)
            {
                $bak["data"]=array();
                $bak["status"]=0;
                $bak["message"]=t("wx_accesstokenerror");
                return $bak;
            }
            if(empty($wx_config["0"]["access_token"])||$wx_config["0"]["access_token_time"]+7200<time())
            {
                 $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$wx_config["0"]["appid"]."&secret=".$wx_config["0"]["appsecret"];
                 $array=$this->wx_excurl($url,"GET");
                 if($array["status"]==1&&isset($array["data"]["access_token"])&&!empty($array["data"]["access_token"]))
                 {
                    //更新数据表
                    $data=array
                    (
                        "access_token"=>$array["data"]["access_token"],
                        "access_token_time"=>time(),
                    );
                    $this->CI->db->where('token', $param["token"]);
                    $this->CI->db->update('wx_config', $data); 
                    $bak["data"]["access_token"]=$array["data"]["access_token"];
                    $bak["status"]=1;
                    $bak["message"]=t("wx_accesstokensuccess");
                 }
                 else
                 {
                    $bak["data"]=$array["data"];
                    $bak["status"]=0;
                    $bak["message"]=t("wx_accesstokenerror");
                 }     
            }
            else
            {
                    $bak["data"]=$wx_config["0"]["access_token"];
                    $bak["status"]=1;
                    $bak["message"]=t("wx_accesstokensuccess");
            }  
            return  $bak; 
        }
        else if(isset($param["openid"])&&!empty($param["openid"]))
        {
            //此处是通过某一个openid获取accesstoken;
            //$this->CI->db->where('openid', $param["openid"]);
            $query = $this->CI->db->get_where('wx_user', array('openid' => $param["openid"]));
            $wx_user = $query->result_array();
            return $this->wx_getaccesstoken(array("token"=>$wx_user["0"]["token"]));   
        } 
    }
    
    /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[token] [<用户唯一token>]
     *                $[next_openid][选填 不填从第一个拉取]              
     *@return [array] [<返回相应的数据，具体数据参照微信给出>]  
     *@time   [time] [20150811] 
     *@desc   封装请求用户列表，并更行用户列表 用户数量大的话此函数调用时比较费时
     */
    public function wx_getopenidlist($param=array())
    {   
        
        if(!empty($param["token"])&&isset($param["token"]))
        { 
            $access_token=$this->wx_getaccesstoken(array("token"=>$param["token"]));
            if(!empty($param["openid"])&&isset($param["openid"]))
            {
                $url="https://api.weixin.qq.com/cgi-bin/user/get?access_token=".$access_token["data"]."&next_openid=".$param["openid"];
            }
            else
            {
                $url="https://api.weixin.qq.com/cgi-bin/user/get?access_token=".$access_token["data"];
            }
            $re=$this->wx_excurl($url,"GET");
            if($re["status"])
            {
               $bak["data"]=$re["data"];
               $bak["status"]=1;
               $bak["message"]=t("wx_getopenidlistsuccess"); 
              // print_r($re["data"]["data"]["openid"]);
              // exit;
               foreach($re["data"]["data"]["openid"] as $key=>$v)
               {
                     //print_r($re["data"]["data"]["openid"]);
                        //exit;
                     $user=$this->ciuser->user_get_uid_by_openid($v);
                     if(!$user["status"])
                     {
                        $touser["openid"]=$v;
                        $touser["gid"]=1;
                        $touser["addtime"]=time();
                        
                        $re=$this->ciuser->insert($touser);
                        if($re["status"])
                        {
                            $wx_user["token"]=$param["token"];
                            $wx_user["openid"]=$v;
                            $wx_user["uid"]=$re["data"];
                            $wx_user["subscribe"]=1;
                            $wx_user["subscribe_time"]=time();
                            $this->CI->db->insert("wx_user", $wx_user);
                        }    
                     }
                     else
                     {
                        $query = $this->CI->db->get_where('wx_user', array('openid' => $v,'token'=>$param["token"]));
                        $wx_user= $query->result_array();
                        if(count($wx_user)>0 && $wx_user["0"]["subscribe"]!=1)
                        {
                            $wx_user["subscribe"]=1;
                            $wx_user["subscribe_time"]=time();
                            $this->CI->db->where('openid', $v["fromusername"]);
                            $this->CI->db->update('wx_user', $wx_user);
                        }
                     }
               }
            }
            else
            {
                $bak["status"]=0;
                $bak["data"]=$re["data"];
                $bak["message"]=t("wx_getopenidlisterror"); 
                
            }
            return $bak;
           
        }
        else
        {
            $bak["data"]=array();
            $bak["status"]=0;
            $bak["message"]=t("wx_argument_error");
        }
        return  $bak;
    }
    
    /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[token] 必选参数 微信账号唯一标识符
     *                $[openid] 用户的openid            
     *@return [array] [<返回相应的数据，具体数据参照微信给出>]  
     *@time   [time] [20150811] 
     *@desc   封装获取详细的用户信息的接口
     */
    public function  wx_getwxuserinfo($param=array())
    {
        if(empty($param["token"])||empty($param["openid"]))
        {
            $bak["data"]=array();
            $bak["status"]=0;
            $bak["message"]=t("wx_argument_error");
        }
        else
        {
            $access_token=$this->wx_getaccesstoken(array("token"=>$param["token"]));
            $url="https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token["data"]."&openid=".$param["openid"];
            $re=$this->wx_excurl($url,"GET");
            if($re["status"]&&!empty($re["data"]["subscribe"]))
            {
                
                $this->CI->db->where('openid', $param["openid"]);
                $this->CI->db->update('wx_user', $re["data"]);
                $bak["status"]=1;
                $bak["message"]=t("wx_getwxuserinfosuccess");
                $bak["data"]=$re["data"];  
            }
            else
            {
                $query = $this->CI->db->get_where('wx_user', array('openid' => $param["openid"],'token'=>$param["token"]));
                $wx_user= $query->result_array();
                if(count($wx_user)>0 && $wx_user["0"]["subscribe"]==1)
                {
                    $data["subscribe"]=0;
                    $this->CI->db->where('openid', $param["openid"]);
                    $this->CI->db->update('wx_user', $data);  
                }
                $bak["status"]=0;
                $bak["message"]=t("wx_getwxuserinfoerror");
                $bak["data"]=$re["data"]; 
            }
            
            
        }
        return $bak;
        
    }
    /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[token] 必选参数 微信账号唯一标识符
     *                $[menu] 菜单的数组          
     *@return [array] [<返回相应的数据，具体数据参照微信给出>]  
     *@time   [time] [20150811] 
     *@desc   封装创建接口
     */
    public function wx_createmenu($param=array())
    {
        if(empty($param["token"])||empty($param["data"]))
        {
            $bak["data"]=array();
            $bak["status"]=0;
            $bak["message"]=t("wx_argument_error");  
        }
        else
        {
            $access_token=$this->wx_getaccesstoken(array("token"=>$param["token"]));
            $url="https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token["data"]; //print_r($param["data"]);
            $menujson=$this->DecodeUnicode(json_encode($param["data"]));
            $re=$this->wx_excurl($url,"POST",$menujson);
            if($re["status"]&&$re["data"]["errcode"]=="errcode")
            {
                $bak["data"]=$re["data"];
                $bak["status"]=1;
                $bak["message"]=t("wx_createmenusuccess");   
            }
            else
            {
                $bak["data"]=$re["data"];
                $bak["status"]=0;
                $bak["message"]=t("wx_createmenuerror");
            }
        }
        return $bak;    
    }
    
    /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[str] json 数组的字符串         
     *@return [$str] [<合格的字符串>]  
     *@time   [time] [20150811] 
     *@desc   过滤创建菜单不合格的字符串
     */
    private function  DecodeUnicode($str)
    {
        return preg_replace_callback('/\\\\u([0-9a-f]{4})/i',
            create_function(
                '$matches',
                'return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UCS-2BE");'
            ),
            $str);
    }
    
    
    
    
    
    
    
    
     /**
     *@author [ncgis] <[swust_ncgis@163.com]>
     *@param  [param] $[param] [<$url提交地址 $data提交的数据，$M 提交的方法>]             
     *@return [array] [<返回相应的数据，具体数据参照微信给出>]  
     *@time   [time] [20150810] 
     *@desc 封装curl函数 无法上传下载
     */
    public function wx_excurl($url,$method="POST",$data)
    {
        $curl=curl_init();
        curl_setopt($curl,CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        if(!empty($data))
        {
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,false);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        $R=curl_exec($curl);
        if(curl_errno($curl))
        {
            $ERRARRAY=array("errcode"=>1,"errmsg"=>'CURRLERROR'.curl_error($curl));
            $bak["data"]=$ERRARRAY;
            $bak["status"]=0;
            $bak["message"]=t("wx_excurlerror");
        }
        else
        {
            $Re = json_decode($R,true);
            $bak["status"]=1;
            $bak["message"]=t("wx_excurlsuccess");
            $bak["data"]=$Re;
        }
        curl_close($curl);
        return $bak;     
    }
}

?>