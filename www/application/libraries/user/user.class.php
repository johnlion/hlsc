<?php
/*
*@Desc:用户功能基础类
*@Author:Luffy mail@aoxiang.me
*@Time:2015年8月10日 10:08:01
*/

class User implements BaseLib{

	public $CI;
	public $table;
	public function __construct( )
	{
		$this->CI = & get_instance();
		$this->CI->load->database();
		$this->CI->load->helper("common");
		$this->CI->load->library("CiPage");
		$this->table = strtolower($this->CI->db->dbprefix.__CLASS__);
		/*//定义前台模板文件夹
		define("DESKTOP","desktop");
		//定义后台模板文件夹
		define("ADMIN","admin");
		//获取模板路径位置
		$this->theme_path = APPPATH . THEME . '/'.DESKTOP;
		$this->theme_admin_path = APPPATH . THEME . '/'.ADMIN;*/
	}

	public function install(  $param = array() )
	{

	}

	public function uninstall(  $param = array() )
	{

	}

	public function create(  $param = array() )
	{

	}

	public function insert(  $param = array() )
	{

		if($this->CI->db->insert($this->table,$param))
		{
			
			$result = array( 
				'data' => $this->CI->db->insert_id(),
				'status' => 1,
				'message' => t("add_user_success"), 
			);
		}else
		{
			$result = array(
				'data' => array(),
				'status' => 0,
				'message' => t("add_user_failed"), 
			);
		}

		return $result;

		
	}
	public function delete(  $param = array() )
	{
		
	}
	public function update(  $param = array() )
	{

	}
	public function select(  	$param = array() )
	{

	}
	public function getlist( $limit = 10, $offset = 0 )
	{

	}
	
	/**
	 * [user_getOne 获取一个字段]
	 * @param  string  $sql     [sql]
	 * @param  boolean $limited [description]
	 * @return [array]           [description]
	 */
	public function user_getOne($sql = "",$limited = false)
	{
		
		if(!empty($sql))
		{
			if ($limited == false)
	        {
	            $sql = trim($sql . ' LIMIT 1');
	        }
			
			$query = $this->CI->db->query($sql);
			$query = $query->result_array();
			
			$result = current($query[0]);
		}else
		{
			$result = false;// t("param_error");
		}
		return $result;

	}
	public function user_getRow($sql = "",$limited = false)
	{
		
		if(!empty($sql))
		{
			if ($limited == false)
	        {
	            $sql = trim($sql . ' LIMIT 1');
	        }
			
			$query = $this->CI->db->query($sql);
			$query = $query->result_array();
			
			$result = $query[0];
		}else
		{
			$result = false;
		}
		return $result;
	}

	/**
	 * [user_get_user 获取所有用户信息]
	 * @param  [int] $limit [description]
	 * @return [array]        [description]
	 */
	public function user_get_user($param = array())
	{
		$offset = $param['page'] - 1;
		$limit = ' LIMIT ' . $offset * $param['page_size']. ',' . $param['page_size'];

		
		//记录总条数
		$param['sql_count'] = "SELECT COUNT(uid) AS total FROM ".$this->table;
		$param['sql'] = "SELECT uid,openid,headimg,realname,mobile,qq,sex,birthday,provinceid,cityid,areaid,address,cardid,wallet,paypass,gid,remark,addtime ";
		$param['sql'] .= " FROM ".$this->table." ORDER BY uid ASC ".$limit;
		
		$data = $this->CI->cipage->page_data_select($param['sql']);
		$data['pagebanner'] = $this->CI->cipage->page_banner($param);
		
		return $data;
	}

	/**
	 * [user_get_uid_by_openid 通过OPENID获取uid]
	 * @return [type] [description]
	 * 
	 */
	public function user_get_uid_by_openid($openid = false)
	{
		$result = array(
				'data' => array(),
				'status' => 0,
				'message' => "", 
			);
		if($openid)
		{
			$this->CI->db->where("openid",$openid);
			$data = $this->CI->db->get($this->table);

			$data = $data->result_array();
			if(isset($data[0]))
			{
				$result['data'] = $data[0];
				$result['status'] = 1;
			}else
			{
				$result['message'] = t("no_data");
			}
			
		}else
		{
			$result['message'] = t("param_error");
		}
		return $result;
	
	}


	/**
	 * [user_get_user_by_uid 通过uid获取用户信息]
	 * @return [type] [description]
	 * 
	 */
	public function user_get_user_by_uid($uid = false)
	{
		$result = array(
				'data' => array(),
				'status' => 0,
				'message' => "", 
			);
		if($uid)
		{
			$this->CI->db->where("uid",$uid);
			$data = $this->CI->db->get($this->table);
			$data = $data->result_array();
			$result['data'] = $data[0];
			$result['status'] = 1;
		}else
		{
			$result['message'] = t("param_error");
		}
		return $result;
	
	}


	/**
	 * [user_delete_user 删除用户，这里只给用户做删除标记，不会删除数据]
	 * @return [type] [description]
	 * 
	 */
	public function user_delete_user($id)
	{
		$result = array(
				'data' => array(),
				'status' => 0,
				'message' => "", 
			);

		if(empty($id))
		{
			$result['message'] = t("param_error");
		}else
		{
			$id = intval($id);
		}
		
		$this->CI->db->where("uid",$id);
		if($this->CI->db->update($this->table,array("isdelete"=>"1")))
		{
			$result['status'] = 1;
			$result['message'] = t("delete_user_success");
		}else
		{
			$result['message'] = t("delete_user_failed");
		}

		return $result;

	}


	/**
	 * [user_update_by_uid 通过UID更新用户信息]
	 * @param  [type] $user [description]
	 * @param  [type] $uid  [description]
	 * @return [type]       [description]
	 */
	public function user_update_by_uid($user,$uid)
	{

		$result = array(
				'data' => array(),
				'status' => 0,
				'message' => "", 
			);

		if(empty($id) || empty($user))
		{
			$result['message'] = t("param_error");
		}else
		{
			$id = intval($id);
		}

		$this->CI->db->where("uid",$uid);

		if($this->CI->db->update($this->table,$user))
		{

			$result['status'] = 1;
			$result['message'] = t("edit_user_success");
		}else
		{

			$result['message'] = t("edit_user_failed");
		}

		return $result;
	}
}