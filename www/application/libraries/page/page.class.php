<?php

class Page {
	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->CI->load->helper("common");
		$this->dbprefix = $this->CI->db->dbprefix;
	}

/*
 * @package                CodeIgniter
 * @author                ken
 * @since                Version 1.0
 * @date                 2015-07
 *
 * @path                 Codeigniter/application/libraries/page/page.class.php - 文件路径
 * @class                 MY_page - 类名
 * @function         page_func - 函数名
 * @form_method get - 表单模式
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
$this->load->library('MY_Page');
if(@$_GET['p'] == null){
$page = 1;
}else{
$page= $_GET['p'];
}
$tbName = 'page';
$page_size = 5;
$show_page = 5;
$data['page_banner'] = $this->my_page->page_func($tbName,  $page_size, $show_page, $page);
$result = $this->CI->db->get($tbName, $page_size, (($page-1)*$page_size))->result_array();
$data['result'] = $result;
 **/
	#分页函数
	public function page_func($tbName = '', $page_size = '', $show_page = '', $page = '') {

		if ($page == 0 or $page < 0) {
			$page = 1;
		} else {
			$page;
		}
		$total = $this->CI->db->get($tbName)->num_rows(); #获取总记录数
		#$page_size = 5;#每页显示的记录行数
		#$show_page = 5;#每页显示的页码
		$total_page = ceil($total / $page_size); #计算可以显示多少个页面
		$prev = $page - 1; #上一页
		$next = $page + 1; #下一页
		$page_offset = ($show_page - 1) / 2; #计算偏移量
		$start = 1; #起始页页码
		$end = $total_page; #结束页码
		$page_banner = ''; #显示数据 + 分页条

		@$page_banner = '<a href="' . $_SERVER['PHP_SELF'] . '?p=1">首页</a>&nbsp;&nbsp;'; #首页
		if ($prev < 1) {
			$prev = 1;
		}
		@$page_banner .= '<a href="' . $_SERVER['PHP_SELF'] . '?p=' . $prev . '">上一页</a>&nbsp;&nbsp;'; #上一页

		#总页数大于想要显示的页数
		if ($total_page > $show_page) {
			if ($page > $page_offset + 1) {
				$page_banner .= ' ... ';
			}
			if ($page > $page_offset) {
				$start = $page - $page_offset;
				$end = $total_page > $page + $page_offset ? $page + $page_offset : $total_page;
			} else {
				$start = 1;
				$end = $total_page > $show_page ? $show_page : $total_page;
			}
			if ($page + $page_offset > $total_page) {
				$start = $start - ($page + $page_offset - $end);
			}
		}

		for ($i = $start; $i <= $end; $i++) {
			$page_banner .= '<a href="' . $_SERVER['PHP_SELF'] . '?p=' . $i . '">' . $i . '</a>&nbsp;';
		}

		#尾部省略
		if ($total_page > $show_page and $total_page > $page + $page_offset) {
			$page_banner .= ' ... ';
		}

		if ($next > $total_page) {
			$next = $total_page;
		}
		@$page_banner .= '<a href="' . $_SERVER['PHP_SELF'] . '?p=' . $next . '">下一页</a>&nbsp;&nbsp;'; #下一页
		@$page_banner .= '<a href="' . $_SERVER['PHP_SELF'] . '?p=' . $total_page . '">末页</a>&nbsp;&nbsp;'; #末页

		@$page_banner .= '<span>共&nbsp;' . $total_page . '&nbsp;页</span>'; #显示页码总条数

		#页码跳转
		$page_banner .= '
                <form action="' . $_SERVER['PHP_SELF'] . '" method="get">
                到第<input type="text" size="2" name="p" />页
                <input type="submit" value="确定" />
                </form>';

		return $page_banner;
	}
}