<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CNode extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->helper("common");
		$this->load->library('CiNode');

	}

	public function index() {

		if (isPost()) {extract($_POST);}
		if (isGet()) {extract($_GET);}
		extract($_POST);
		$param['nidtype'] = $nidtype;
		$param['nid'] = $nid;
		echo "<pre>";
		print_r($param);
		print_r($this->cinode->select($param));

	}

	/**
	 * [nodetypeinsert 节点类型插入或批量插入]
	 * @return [type] [description]
	 */
	public function nodetypeinsert() {

		if (isPost()) {extract($_POST);}
		if (isGet()) {extract($_GET);}
		/** 模拟数据 */
		/* ******************************************************************
		$_POST['data'] = array(
		array(
		'nidtype' => 'appointment',
		'nodetypename' => 'appointment',

		),
		array(
		'nidtype' => 'article',
		'nodetypename' => 'article',

		),
		array(
		'nidtype' => 'designer',
		'nodetypename' => 'designer',
		),
		array(
		'nidtype' => 'house',
		'nodetypename' => 'house',
		),
		array(
		'nidtype' => 'message_eventclick',
		'nodetypename' => 'message_eventclick',
		),
		array(
		'nidtype' => 'message_eventscancode',
		'nodetypename' => 'message_eventscancode',
		),
		array(
		'nidtype' => 'message_image',
		'nodetypename' => 'message_image',
		),
		array(
		'nidtype' => 'message_shortvideo',
		'nodetypename' => 'message_shortvideo',
		),
		array(
		'nidtype' => 'message_text',
		'nodetypename' => 'message_text',
		),
		array(
		'nidtype' => 'message_video',
		'nodetypename' => 'message_video',
		),
		array(
		'nidtype' => 'message_voice',
		'nodetypename' => 'message_voice',
		),
		array(
		'nidtype' => 'message_voicetest',
		'nodetypename' => 'message_voicetest',
		),
		array(
		'nidtype' => 'message_voicetesdfsd',
		'nodetypename' => 'message_voicedsfasdf',
		),
		);
		extract($_POST);
		 *****************************************************************
		 */

		$this->cinode->node_type_insert($data = array('data' => $data));
	}

	/**
	 * [nodetypelist 节点类型列表的获取]
	 * @return [type] [description]
	 */
	public function nodetypelist() {
		if (isPost()) {extract($_POST);}
		if (isGet()) {extract($_GET);}

		/** 模拟数据 */
		$_POST['data'] = array(
			'records' => 20,
			'offset' => 0,

		);
		extract($_POST);
		cprint($this->cinode->node_type_list($data['records'], $data['offset']));
	}

	/**
	 * [nodetypeupdate 节点类型修改更新、批量修改更新]
	 * @return [type] [description]
	 */
	public function nodetypeupdate() {

		if (isPost()) {extract($_POST);}
		if (isGet()) {extract($_GET);}

		/** 模拟数据 */
		/* *****************************************************************
		$_POST['data'] = array(
		array(
		'nidtype' => 'appointment',
		'nodetypename' => '预约',

		),
		array(
		'nidtype' => 'article',
		'nodetypename' => '文章',

		),
		array(
		'nidtype' => 'designer',
		'nodetypename' => '设计师',
		),
		array(
		'nidtype' => 'house',
		'nodetypename' => '房型',
		),
		array(
		'nidtype' => 'message_eventclick',
		'nodetypename' => 'message_eventclick',
		),
		array(
		'nidtype' => 'message_eventscancode',
		'nodetypename' => 'message_eventscancode',
		),
		array(
		'nidtype' => 'message_image',
		'nodetypename' => 'message_image',
		),
		array(
		'nidtype' => 'message_shortvideo',
		'nodetypename' => 'message_shortvideo',
		),
		array(
		'nidtype' => 'message_text',
		'nodetypename' => 'message_text',
		),
		array(
		'nidtype' => 'message_video',
		'nodetypename' => 'message_video',
		),
		array(
		'nidtype' => 'message_voice',
		'nodetypename' => 'message_voice',
		),
		);
		extract($_POST);
		 **/
		cprint($this->cinode->node_type_update($data));
	}

	function nodetypedelete() {
		if (isPost()) {extract($_POST);}
		if (isGet()) {extract($_GET);}

		/** 模拟数据 */
		$_POST['data'] = array(
			array('nidtype' => 'message_voicetesdfsd'),
			array('nidtype' => 'message_voicetest'),
		);
		extract($_POST);

		cprint($this->cinode->node_type_delete($data));

	}

}
