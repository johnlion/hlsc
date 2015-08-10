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
			   
			 	  //$sql = "delete from {$this->dbprefix}node where nid={$param['id']}";	

		          //$result= $this->CI->db->query( $sql );

		         if(!empty($param['nidtype']))
		          {
		          	  $this->CI->db->delete('node',array('nid'=>$param['nid']));
		          	$result= $this->CI->db->delete("node_{$param['nidtype']}",array('nid'=>$param['nid']));

		          }else{

		          	 $query= $this->CI->db->get('node',array('nid'=>$param['nid']));
					 $childTable = $query->result_array();
					 $childTableName = $childTable[0]['nidtype'];
		          	 $this->CI->db->delete('node',array('nid'=>$param['nid']));
		          	 $result=  $this->CI->db->delete("node_$childTableName",array('nid'=>$param['nid']));
					 // $childTable[0]['nidtype'];

		          }
		      
			       if($result)
			       {

			       		$data = array(
								'data'=>array(),
								'stauts' => 1,
								'message' => '删除成功 !',
								);

			       }else{

			       			$data = array(
								'data'=>array(),
								'stauts' => 1,
								'message' => '删除失败 !',
								);

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

		 if(!empty($param))
		 {
		 	if(@$param['issingle'] and !empty($param['nid']))
		 	{


			 	$query= $this->CI->db->get('node',array('nid'=>$param['nid']));
				$childTable = $query->result_array();	
				$childTableName = $childTable[0]['nidtype'];
				$childQuery= $this->CI->db->get("$childTableName",array('nid'=>$param['nid']));
				$childResult = $childQuery->result_array();

					 if(!empty($childResult))
					 {
					 			$data = array(
								'data'=>$childResult,
								'stauts' => 1,
								'message' => '查询成功 !',
								);

					 }else{

					 		$data = array(
								'data'=>array(),
								'stauts' => 1,
								'message' => '查询失败 !',
								);

					 }

		 	}else{
		 		   if(!empty($param['nidtype']))
		 		   {

		 		   		$sql = "select * from {$this->dbprefix}node  as n
							LEFT JOIN {$this->dbprefix}node_{$param['nidtype']} as nc 
							on n.nid = nc.nid ";
						$result = $this->CI->db->query($sql);
						$data = $result->result_array() ;
							if(!empty($data)
							{

								$data = array(
								'data'=>$data,
								'stauts' => 1,
								'message' => '查询成功 !',
								);
	

							}else{

								 $data = array(
								'data'=>array(),
								'stauts' => 1,
								'message' => '查询失败 !',
								);

							}
		 		   }

		 			

		 	}


		 }

	}

	/**
     *@author [jack] <[<email address>]>
     *@param  [param] $[name] [<description>]
     *@return [Obj] [<description>]    
     */
	public function insert(  $param = array() )
	{
		 

 		

		 if(!empty($param))
		 {
		 	 $time = time();
		 	 $param['addtime'] = $time;
		 	 $param['modifytime'] = $time;
		 	 $nodetable['addtime'] = $time;
		 	 $nodetable['modifytime'] = $time;
		 	 $nodetable['nidtype'] = $param['nidtype'];
		 	 $nodetable['uid'] = $param['uid'];
		 	// $sql="INSERT INTO  {$this->dbprefix}node (`nidtype`,`addtime`,`modifytime`,`uid`) VALUES({$param['nidtype']},$time,$time ,{$param['uid']})";
		     $this->CI->db->insert("node",$nodetable);
		     $insertID= $this->CI->db->insert_id();


		     if($insertID)
		     {
				$table = "node_".$param['nidtype'];
		     	$data['data']['insertid']=$insertID;
		     	$data['status'] = 1;
		     	$data['message']='success';
				$param["data"]["nid"]=$insertID;
                //echo $table;
                //print_r($param["data"]);
                //exit;
		     	$this->CI->db->insert("$table",$param['data']);

		     }else{

		     	$data = array( 
								'data' => array(),
								'status' => 0,
								'message' => '插入失败！', 
								);	

		     }

		   return $data; 

				 	
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