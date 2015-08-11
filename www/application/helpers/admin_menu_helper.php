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
		"AdminIndex"        => array(
			'icon' => '',
			'lang' => t("console"),
			'url'  => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang'                  => t("console"),
					'url'                   => '/admin/AdminIndex/index',
				),
			),
		),
		"AdminOrder"        => array(
			'icon' => '',
			'lang' => t("order"),
			'url'  => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang'                  => t("order_list"),
					'url'                   => '/admin/AdminOrder/index',
				),
			),
		),

		"AdminNodeArticle"  => array(
			'icon' => '',
			'lang' => t("article"),
			'url'  => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang'                  => t("article_list"),
					'url'                   => '/admin/AdminNodeArticle/index',
				),
				'add'   => array('icon' => '',
					'lang'                  => t("article_add"),
					'url'                   => '/admin/AdminNodeArticle/add',
				),
			),
		),

		"AdminNodeProduct"  => array(
			'icon'  => '',
			'lang'  => t("product"),
			'url'   => '#',
			'list'  => array(
				'index' => array('icon' => '',
					'lang'                  => t("product_list"),
					'url'                   => '/admin/AdminNodeProduct/index',
				),
				'add'   => array('icon' => '',
					'lang'                  => t("product_add"),
					'url'                   => '/admin/AdminNodeProduct/add',
				),

				/*'choose'=>array(	'icon'=>'',
			'lang'=>t("theme_choose"),
			'url'=>'/index.php/admin/AdminTheme/choose',
			),*/
			),
			'power' => 'return_price',
		),

		"AdminNodeHouse"    => array(
			'icon'  => '',
			'lang'  => t("house"),
			'url'   => '#',
			'list'  => array(
				'index' => array('icon' => '',
					'lang'                  => t("house_list"),
					'url'                   => '/admin/AdminNodeHouse/index',
				),
				'add'   => array('icon' => '',
					'lang'                  => t("house_add"),
					'url'                   => '/admin/AdminNodeHouse/add',
				),

				/*'choose'=>array(	'icon'=>'',
			'lang'=>t("theme_choose"),
			'url'=>'/index.php/admin/AdminTheme/choose',
			),*/
			),
			'power' => 'return_price',
		),

		"AdminNodeDesigner" => array(
			'icon'  => '',
			'lang'  => t("designer"),
			'url'   => '#',
			'list'  => array(
				'index' => array('icon' => '',
					'lang'                  => t("designer_list"),
					'url'                   => '/admin/AdminNodeDesigner/index',
				),
				'add'   => array('icon' => '',
					'lang'                  => t("designer_add"),
					'url'                   => '/admin/AdminNodeDesigner/add',
				),

				/*'choose'=>array(	'icon'=>'',
			'lang'=>t("theme_choose"),
			'url'=>'/index.php/admin/AdminTheme/choose',
			),*/
			),
			'power' => 'return_price',
		),

		"AdminComment"      => array(
			'icon'  => '',
			'lang'  => t("comment"),
			'url'   => '#',
			'list'  => array(
				'index' => array('icon' => '',
					'lang'                  => t("comment_list"),
					'url'                   => '/admin/AdminComment/index',
				),
				'add'   => array('icon' => '',
					'lang'                  => t("comment_add"),
					'url'                   => '/admin/AdminComment/add',
				),

				/*'choose'=>array(	'icon'=>'',
			'lang'=>t("theme_choose"),
			'url'=>'/index.php/admin/AdminTheme/choose',
			),*/
			),
			'power' => 'return_price',
		),

		"AdminAppointment"  => array(
			'icon'  => '',
			'lang'  => t("appointment"),
			'url'   => '#',
			'list'  => array(
				'index' => array('icon' => '',
					'lang'                  => t("appointment_list"),
					'url'                   => '/admin/AdminAppointment/index',
				),
				'add'   => array('icon' => '',
					'lang'                  => t("appointment_add"),
					'url'                   => '/admin/AdminAppointment/add',
				),

				/*'choose'=>array(	'icon'=>'',
			'lang'=>t("theme_choose"),
			'url'=>'/index.php/admin/AdminTheme/choose',
			),*/
			),
			'power' => 'return_price',
		),

		"AdminUser"         => array(
			'icon' => '',
			'lang' => t("user"),
			'url'  => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang'                  => t("user_list"),
					'url'                   => '/admin/AdminUser/index',
				),
				'add'   => array('icon' => '',
					'lang'                  => t("user_add"),
					'url'                   => '/admin/AdminUser/add',
				),
			),
		),

		"AdminUserGroup"    => array(
			'icon' => '',
			'lang' => t("user_group"),
			'url'  => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang'                  => t("user_group_list"),
					'url'                   => '/admin/AdminUserGroup/index',
				),
				'add'   => array('icon' => '',
					'lang'                  => t("user_group_add"),
					'url'                   => '/admin/AdminUserGroup/add',
				),
			),
		),

		"AdminRole"         => array(
			'icon' => '',
			'lang' => t("role"),
			'url'  => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang'                  => t("role_list"),
					'url'                   => '/admin/AdminRole/index',
				),
				'add'   => array('icon' => '',
					'lang'                  => t("role_add"),
					'url'                   => '/admin/AdminRole/add',
				),
			),
		),

		"AdminPrivilege"    => array(
			'icon' => '',
			'lang' => t("privilege"),
			'url'  => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang'                  => t("privilege_list"),
					'url'                   => '/admin/AdminPrivilege/index',
				),
				'add'   => array('icon' => '',
					'lang'                  => t("privilege_add"),
					'url'                   => '/admin/AdminPrivilege/add',
				),
			),
		),

		"AdminMoudle"       => array(
			'icon' => '',
			'lang' => t("module"),
			'url'  => '#',
			'list' => array(
				'index' => array('icon' => '',
					'lang'                  => t("module_list"),
					'url'                   => '/admin/AdminMoudle/index',
				),
				'add'   => array('icon' => '',
					'lang'                  => t("module_add"),
					'url'                   => '/admin/AdminMoudle/add',
				),
			),
		),

		"AdminTheme"        => array(
			'icon'  => '',
			'lang'  => t("theme"),
			'url'   => '#',
			'list'  => array(
				'index' => array('icon' => '',
					'lang'                  => t("theme_setting"),
					'url'                   => '/admin/AdminTheme',
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