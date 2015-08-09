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
function admin_menu()
{

	/*return array(
			"大分类"=>array(
					'list'=>array(
							'语言包中对应的key'=>array('icon'=>'图标class',
												  'url'=>'链接url',
												  	),
							'语言包中对应的key'=>array('icon'=>'图标class',
												  'url'=>'链接url',
												  	),
						),
					'icon'=>'大分类对应的图标',
					"id"=>"大分类对应的id",
					'power'=>'return_price'
				);*/
	$CI =  & get_instance();
	$CI->lang->load("common");

	return array(
			"article"=>array(
					'icon'=>'',
					'lang'=>$CI->lang->line("theme"),
					'url'=>'#',
					'list'=>array(
							'theme_setting'=>array(	'icon'=>'',
												  	'lang'=>$CI->lang->line("theme_setting"),
												 	 'url'=>'',
												  	),
						),
					'power'=>'return_price'
				),
			
			"service"=>array(
					'icon'=>'am-icon-cny',
					'lang'=>"service",
					'url'=>'#',
					"id"=>"service-nav",
					'power'=>'service'
				),
		);
}