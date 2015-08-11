<?php

/*
 * @package                CodeIgniter
 * @author                chandlerxue
 * @since                Version 1.0
 * @date                 2015-08
 *
 * @path                 Codeigniter/application/libraries/page/page.class.php - 文件路径
 * @class                 MY_page - 类名
 * @function         page_bannner - 函数名
 * @form_method 	  get - 表单模式
 * @parameter         $page - 从页面传过来的页码
 * @parameter         $tbName - 表名
 * @parameter         $page_size - 每页显示的记录行数
 * @parameter         $show_page - 每页显示的页码
 * @parameter         $total_page - 计算可以显示多少页面
 * @parameter         $prev - 上一页
 * @parameter         $next - 下一页
 * @parameter         $page_offset - 计算偏移量
 * @parameter         $start - 起始页码
 * @parameter         $end - 结束页码
 * @parameter         $page_banner - 显示数据+分页条
 *
 * @test_version CodeIgniter 2 - 在 CodeIgniter2 测试过
 * @test_table        page - 测试表 page
 * @test_data

create table page(
id int(8) primary key auto_increment,
name char(20) default null
)ENGINE InnoDB default charset=utf8;
insert into page(name) values('name1');

 *@Note:
 *- mysql的limit 1,2 表示的是 起始点,记录条数
 *- 而CI 的limit 1,2 表示的是 记录条数,起始点
 *- 页面显示的记录条数的变化应该是 (传入的页面-1)*每页显示的记录条数
 *
 *@调用函数的代码编写如下
$this->load->library('Page');
/* ----------------------------------------------
 * 返回数据集 $data 初始化
 * $param['data']记录总录
 * $param['status']处理状态 0失败或未处理，1成功
 * $param['message']处理消息
 * ----------------------------------------------
 */
#$data = array(
#	'data' => array(),
#	'status' => 0,
#	'message' => t('search_failed'),
#);

/* ----------------------------------------------
 * 翻页 Page
 * $param['sql_count']记录总录
 * $param['sql']页面的实体数据
 * ----------------------------------------------
 */
#extract($param);
#$where = " where n.nidtype='{$data['nidtype']}'";
#$param['sql_count'] = trim("
#select  count(1) as total  from {$this->dbprefix}node  as n
#LEFT JOIN {$this->dbprefix}node_{$data['nidtype']} as nc
#on n.nid = nc.nid {$where} ");
#$param['sql'] = trim("
#select * from {$this->dbprefix}node  as n
#LEFT JOIN {$this->dbprefix}node_{$data['nidtype']} as nc
#on n.nid = nc.nid  {$where} ");

#$this->CI->cipage->page_banner($param);

/**********************************************************************/
class Page {
	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->CI->load->helper("common");
		$this->dbprefix = $this->CI->db->dbprefix;
	}

	/**
	 * [page_banner 分页banner]
	 * @param  [type] $param [description]
	 *      $param['data'] = array()      sql查询where 子句条件
	 * 		$param['page'] = 1; 		  页面初始化页
	 *		$param['page_size'] = 5;	  每页显示的记录条数
	 *		$param['show_page'] = 5;	  显示多少页
	 *		$param['sql']				  sql记录查询
	 *		$param['sql_count']           记录总数sql查询语句
	 * @return [type]        [description]
	 */
	public function page_banner($param) {

		extract($param);

		/* -----------------------------------------------------
		 * Page 数置初始化
		 * -----------------------------------------------------
		 */
		if ($page == 0 or $page < 0) {
			$page = 1;
		} else {
			$page;
		}

		/* -----------------------------------------------------
		 * 获取总记录数
		 * -----------------------------------------------------
		 */
		$query = $this->CI->db->query($sql_count);
		$data  = $query->result_array();
		if (count($data) > 0) {
			$total = $data[0]['total'];
		}

		//$total = $this->CI->db->get($tbName)->num_rows(); #获取总记录数
		#$page_size = 5;#每页显示的记录行数
		#$show_page = 5;#每页显示的页码
		$total_page  = ceil($total / $page_size); #计算可以显示多少个页面
		$prev        = $page - 1; #上一页
		$next        = $page + 1; #下一页
		$page_offset = ($show_page - 1) / 2; #计算偏移量
		$start       = 1; #起始页页码
		$end         = $total_page; #结束页码
		$page_banner = ''; #显示数据 + 分页条

		/* 页头 */
		$page_banner .= '<div class="row">';
		$page_banner .= '<div class="col-sm-6">';
		$page_banner .= '    <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">总页数' . $total_page . '</div>';
		$page_banner .= '</div>';
		$page_banner .= '<div class="col-sm-6">';
		$page_banner .= '    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">';
		$page_banner .= '        <ul class="pagination">';

		$uri = $this->CI->uri->segments;
		//if (isset($uri[4])) {unset($uri[4]);}

		$uri = '/' . implode('/', $uri) . '?page=';

		@$page_banner .= '<a href="' . $uri . '1">首页</a>&nbsp;&nbsp;'; #首页
		if ($prev < 1) {
			$prev = 1;
		}

		$page_banner .= '<li class="paginate_button previous disabled" aria-controls="dataTable" tabindex="0" id="dataTable_previous"><a href=""' . $uri . $prev . '"">Previous</a>';

		#总页数大于想要显示的页数
		if ($total_page > $show_page) {
			if ($page > $page_offset + 1) {
				$page_banner .= ' ... ';
			}
			if ($page > $page_offset) {
				$start = $page - $page_offset;
				$end   = $total_page > $page + $page_offset ? $page + $page_offset : $total_page;
			} else {
				$start = 1;
				$end   = $total_page > $show_page ? $show_page : $total_page;
			}
			if ($page + $page_offset > $total_page) {
				$start = $start - ($page + $page_offset - $end);
			}
		}

		for ($i = $start; $i <= $end; $i++) {
			//$page_banner .= '<a href="' . $uri . '/' . $i . '">' . $i . '</a>&nbsp;';
			$page_banner .= '<li class="paginate_button " aria-controls="dataTable" tabindex="0"><a href="' . $uri . $i . '">' . $i . '</a>';
		}

		##尾部省略
		#if ($total_page > $show_page and $total_page > $page + $page_offset) {
		#	$page_banner .= ' ... ';
		#}

		if ($next > $total_page) {
			$next = $total_page;
		}

		@$page_banner .= '<li class="paginate_button next" aria-controls="dataTable" tabindex="0" id="dataTable_next"><a href=""' . $_SERVER['http_request_method_unregister(method)'] . '/' . $next . '"">Next</a>';

		//@$page_banner .= '<a href="' . $uri . '/' . $total_page . '">末页</a>&nbsp;&nbsp;'; #末页

		#页码跳转
		#$page_banner .= '
		#        <form action="' . $uri . '" method="get">
		#        到第<input type="text" size="2" name="p" />页
		#        <input type="submit" value="确定" />
		#        </form>';

		/* 页尾  */
		$page_banner .= '        </ul>';
		$page_banner .= '    </div>';
		$page_banner .= '</div>';
		$page_banner .= '</div>';

		return $page_banner;
	}

	function page_data_select($sql) {
		$data = array(
			'data'    => array(),
			'status'  => 0,
			'message' => t('search_failed'),
		);
		$result = array();
		$query  = $this->CI->db->query($sql);
		$result = $query->result_array();
		if (count($result) > 0) {
			$data = array(
				'data'    => $result,
				'status'  => 1,
				'message' => t('search_success'),
			);
		}

		return $data;
	}
}