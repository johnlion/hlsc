<?php
/*
 *@Desc:后台按钮链接
 *@Author:Luffy mail@aoxiang.me
 *@Time:2015年5月9日 16:04:46
 */

/*
 *@Desc:后台按钮
 *@Author:Luffy  mail@aoxiang.me
 *@Time:2015年5月9日 11:37:01
 */
function admin_menu() {

/*	return array(
"控制器名"=>array(
'icon'=>'',
'lang'=>t("语言包中对应的key"),
'url'=>'#',
'list'=>array(
'控制器中方法名'=>array(	'icon'=>'',
'lang'=>t("语言包中对应的key"),
'url'=>'路径',
),
'power'=>'return_price'
),*/
	$CI = &get_instance();
	$CI->load->helper("common");

	return array(
		"AdminIndex" => array(
			'icon' => '',
			'lang' => t("console"),
			'url' => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang' => t("console"),
					'url' => '/admin/AdminIndex',
				),
			),
		),
		"AdminOrder" => array(
			'icon' => '',
			'lang' => t("order"),
			'url' => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang' => t("order_list"),
					'url' => '/admin/AdminOrder',
				),
			),
		),
		"AdminUser" => array(
			'icon' => '',
			'lang' => t("user"),
			'url' => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang' => t("user_list"),
					'url' => '/admin/AdminUser',
				),
				'add' => array('icon' => '',
					'lang' => t("user_add"),
					'url' => '/admin/AdminUser/add',
				),
			),
		),
		"AdminTheme" => array(
			'icon' => '',
			'lang' => t("theme"),
			'url' => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang' => t("theme_setting"),
					'url' => '/admin/AdminTheme',
				),
				/*'choose'=>array(	'icon'=>'',
			'lang'=>t("theme_choose"),
			'url'=>'/index.php/admin/AdminTheme/choose',
			),*/
			),
			'power' => 'return_price',
		),

		"Product" => array(
			'icon' => '',
			'lang' => t("product"),
			'url' => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang' => t("product_list"),
					'url' => '/admin/AdminNode/index/product',
				),
				'insert' => array('icon' => '',
					'lang' => t("product_add"),
					'url' => '/admin/AdminNode/nodeinsert/product',
				),
				'update' => array('icon' => '',
					'lang' => t("product_update"),
					'url' => '/admin/AdminNode/nodeupdate/product',
				),
				/*'choose'=>array(	'icon'=>'',
			'lang'=>t("theme_choose"),
			'url'=>'/index.php/admin/AdminTheme/choose',
			),*/
			),
			'power' => 'return_price',
		),

	);

}