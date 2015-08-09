<?php 

class Node  implements BaseLib{
	public $CI;
	public $dbprefix;
	public function __construct()
	{
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->dbprefix = $this->CI->db->dbprefix;
	}

	 //<modulename>_<functionname>




	/**
     *@author [jack] <[<email address>]>
     *@param  [param] $[name] [<description>]
     *@return [Obj] [<description>]    
     */
	public function install ($param = array())
	{


	}

	/**
     *@author [jack] <[<email address>]>
     *@param  [param] $[name] [<description>]
     *@return [Obj] [<description>]    
     */
	public function uninstall(  $param = array() )
	{

	}

    /**
     *@author [jack] <[<email address>]>
     *@param  [param] $[name] [<description>]
     *@return [Obj] [<description>]    
     */
	
	public function delete(  $param = array() )
	{
		
		if(!empty($param))
		{
			   
			 	  $sql = "delete from {$this->dbprefix}node where nid={$param['id']}";	
		          $result= $this->CI->db->query( $sql );
		        if($result)
		        {

		        		$result = array( 
								'data' => array(),
								'status' => 0,
								'message' => '没有数据', 
								);
		        }else{

		        	return 'test';
		        } 			


		}
		
	}

 	/**
     *@author [jack] <[<email address>]>
     *@param  [param] $[name] [<description>]
     *@return [Obj] [<description>]    
     */
	public function update(  $param = array() )
	{

	}

	/**
     *@author [jack] <[<email address>]>
     *@param  [param] $[name] [<description>]
     *@return [Obj] [<description>]    
     */
	public function select(  $param = array() )
	{

		 if(empty($param))
		 {



		 }

	}

	/**
     *@author [jack] <[<email address>]>
     *@param  [param] $[name] [<description>]
     *@return [Obj] [<description>]    
     */
	public function insert(  $param = array() )
	{
		 
		print_r( $param );
 		exit();

		 if(!empty($param))
		 {
		 	 $time = time();
		 	 $sql="INSERT INTO  {$this->dbprefix}node (`nidtype`,`addtime`,`modifytime`,`uid`) VALUES({$param['nidtype']},$time,$time ,{$param['uid']})";
		     echo $sql;
		 	 print_r($this->CI->db->query($sql));	
		 }

	}

	/**
     *@author [jack] <[<email address>]>
     *@param  [param] $[name] [<description>]
     *@return [Obj] [<description>]    
     */
	public function create(  $param = array() )
	{

	}

	/**
     *@author [jack] <[<email address>]>
     *@param  [param] $[name] [<description>]
     *@return [Obj] [<description>]    
     */
	public function getlist( $limit = 10, $offset = 0 )
	{

	}

}