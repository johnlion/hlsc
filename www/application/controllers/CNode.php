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
		$this->load->library('CiPage');
		$this->load->library('CiToPinyin');
		$this->load->library('CiUpload');

	}

	/**
	 * [index description]
	 * uri    domain/nidtype/nid/page
	 * @param  string  $nidtype [description]
	 * @param  integer $page    [description]
	 * @param  string  $nid     [description]
	 * @return [type]           [description]
	 */
	public function index($nidtype = '', $page = 1, $nid = '') {
		if (isPost()) {extract($_POST);}
		if (isGet()) {extract($_GET);}

		/* -----------------------------------------------------
		 * Talbe Field
		 * -----------------------------------------------------
		 */
		$param['data'] = array(
			'nidtype' => $nidtype,
			'nid' => $nid,
		);
		/* -----------------------------------------------------
		 * Page Param
		 * -----------------------------------------------------
		 */
		$param['page'] = isset($page) ? $page : 1;
		$param['page_size'] = 1; //当前页数
		$param['show_page'] = 5; //每个分页显示的记录行数
		print_r($this->cinode->select($param));
	}

	public function upload() {
		$this->ciupload->index();
		exit();
	}

	public function nodeinsert() {
		if (isPost()) {extract($_POST);}
		if (isGet()) {extract($_GET);}
		/* 模拟数据 */
		/* nodetype  article */
		/*
		$param = array(
		'title' => 'article 3aggggg 3uasdfhg',
		'content' => 'article ddd testarticle 44321423 testarticle testarticle test',
		'uid' => 4,

		);
		$_POST['data'] = array
		(
		'data' => $param,
		'nidtype' => 'article',
		'uid' => 3,
		);
		 */
		/* nodetype  product */
		/*
		$param = array(
		'title' => '豪利精品橱柜002',
		'content' => '大面积纯白色的橱柜适当搭配部分原木的门板，仿佛置身于清新的北欧',
		'description' => '大面积纯白色的橱柜适当搭配部分原木的',
		'rangeprice' => '2000-5000元',
		'price' => '4200',
		'oprice' => '2800',
		'skuid' => 'sku0000001',
		'storagenum' => 50,
		'tid_shipping' => 11,
		'tid_cpfl' => 7,
		'style' => '红色',
		'content' => '大面积纯白色的橱柜适当搭配部分原木的大面积纯白色的橱柜适当搭配部分原木的大面积纯白色的橱柜适当搭配部分原木的大面积纯白色的橱柜适当搭配部分原木的',
		'collocation' => '套餐搭配',
		'detailparts' => '细节配件',
		'qualityassurance' => '品质保障',
		'productparam' => '产品参数',

		);
		$_POST['data'] = array
		(
		'data' => $param,
		'nidtype' => 'product',
		'uid' => 3,
		);
		 */
		/* nodetype designer */
		/*
		$param = array(
		'title' => '设计师/豪利B',
		'description' => '设计师豪利B简介，设计师豪利B简介设计师豪利B简介设计师豪利B简介设计师豪利B简介设计师豪利B简介设计师豪利B简介设计师豪利B简介',
		'content' => '设计师豪利B介绍设计师豪利B介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍',

		);
		$_POST['data'] = array
		(
		'data' => $param,
		'nidtype' => 'designer',
		'uid' => 3,
		);
		 */
		/* nodetype house */

		$param = array(
			'title' => '浪温欧式风情 四房三厅',
			'description' => '设计师豪利B简介，设计师豪利B简介设计师豪利B简介设计师豪利B简介设计师豪利B简介设计师豪利B简介设计师豪利B简介设计师豪利B简介',
			'content' => '设计师豪利B介绍设计师豪利B介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍设计师豪利介绍',
			'roomimg' => 'field.roomimg',
			'housetypeimg' => 'xxx.jpg',
			'tid_housetype' => 16,
		);
		$_POST['data'] = array
		(
			'data' => $param,
			'nidtype' => 'house',
			'uid' => 3,
		);
		extract($_POST);
		//cprint($this->citopinyin->encode('阿里巴巴科技有限公司'));
		//print_r($data);
		//exit();
		cprint($this->cinode->insert($data));

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
