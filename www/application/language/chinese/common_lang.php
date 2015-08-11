<?php
/**
 * @Desc:后台语言包
 * @Author:Luffy mail@aoxiang.me
 * @Time:2015年8月7日 08:42:36
 */
//$lang['key'] = "value";
defined('BASEPATH') OR exit('No direct script access allowed');

//按钮类
$lang['console']    = "控制台";
$lang['login']      = '登录';
$lang['setting']    = '设置';
$lang['publish']    = '发布';
$lang['add']        = '添加';
$lang['edit']       = '编辑';
$lang['delete']     = '删除';
$lang['update']     = '更新';
$lang['submit']     = '提交';
$lang['success']    = '成功';
$lang['failed']     = '失败';
$lang['ok']         = '确定';
$lang['cancel']     = '取消';
$lang['operation']  = '操作';
$lang['view']       = '查看';
$lang['search']     = '搜索';
$lang['warning']    = '警告';
$lang['list']       = '列表';
$lang['all']        = '全部';
$lang['batch']      = '批量';
$lang['year']       = '年';
$lang['month']      = '月';
$lang['day']        = '日';
$lang['man']        = '男';
$lang['famale']     = '女';
$lang['first_page'] = '首页';
$lang['prev_page']  = '上一页';
$lang['next_page']  = '下一页';
$lang['last_page']  = '末页';
$lang['notice']     = '公告';
$lang['power']      = '权限';
$lang['realname']   = "真实姓名";
$lang['mobile']     = "手机";
$lang['qq']         = "QQ";
$lang['birthday']   = "生日";
$lang['remark']     = "备注";
$lang['sex']        = "性别";
$lang['headimg']    = "头像";

//公共语言包
$lang['account']                   = '账户';
$lang['name']                      = '名称';
$lang['password']                  = '密码';
$lang['email']                     = '邮箱';
$lang['modules_installed']         = 'Modules has installed.';
$lang['modules_installing_failed'] = 'Modules installing failed.';
$lang['modules_uinstalled']        = 'Modules Uinstalled.';
$lang['please_try_again_later']    = 'Please tryp again later.';
$lang['add_success']               = '添加成功';
$lang['add_failed']                = '添加失败';
$lang['update_success']            = '更新成功';
$lang['update_failed']             = '更新失败';
$lang['delete_success']            = '删除成功';
$lang['delete_failed']             = '删除失败';

//错误语言包
$lang['param_error']      = "参数错误";
$lang['fields_not_exist'] = "字段不存在,请检查输入的字段是否存在表中。";
$lang['no_language']      = "找不到对应的语言包";

//CI自带数据库错误语言包
$lang['db_invalid_connection_str']     = 'Unable to determine the database settings based on the connection string you submitted.';
$lang['db_unable_to_connect']          = 'Unable to connect to your database server using the provided settings.';
$lang['db_unable_to_select']           = 'Unable to select the specified database: %s';
$lang['db_unable_to_create']           = 'Unable to create the specified database: %s';
$lang['db_invalid_query']              = 'The query you submitted is not valid.';
$lang['db_must_set_table']             = 'You must set the database table to be used with your query.';
$lang['db_must_use_set']               = 'You must use the "set" method to update an entry.';
$lang['db_must_use_index']             = 'You must specify an index to match on for batch updates.';
$lang['db_batch_missing_index']        = 'One or more rows submitted for batch updating is missing the specified index.';
$lang['db_must_use_where']             = 'Updates are not allowed unless they contain a "where" clause.';
$lang['db_del_must_use_where']         = 'Deletes are not allowed unless they contain a "where" or "like" clause.';
$lang['db_field_param_missing']        = 'To fetch fields requires the name of the table as a parameter.';
$lang['db_unsupported_function']       = 'This feature is not available for the database you are using.';
$lang['db_transaction_failure']        = 'Transaction failure: Rollback performed.';
$lang['db_unable_to_drop']             = 'Unable to drop the specified database.';
$lang['db_unsupported_feature']        = 'Unsupported feature of the database platform you are using.';
$lang['db_unsupported_compression']    = 'The file compression format you chose is not supported by your server.';
$lang['db_filepath_error']             = 'Unable to write data to the file path you have submitted.';
$lang['db_invalid_cache_path']         = 'The cache path you submitted is not valid or writable.';
$lang['db_table_name_required']        = 'A table name is required for that operation.';
$lang['db_column_name_required']       = 'A column name is required for that operation.';
$lang['db_column_definition_required'] = 'A column definition is required for that operation.';
$lang['db_unable_to_set_charset']      = 'Unable to set client connection character set: %s';
$lang['db_error_heading']              = 'A Database Error Occurred';

//主题模块语言包
$lang['theme']         = "主题";
$lang['theme_setting'] = "主题设置";
$lang['theme_choose']  = "选择主题";

//主题模块语言包
$lang['theme']         = "主题";
$lang['theme_setting'] = "主题设置";
$lang['theme_choose']  = "选择主题";

//订单模块语言包
$lang['order']      = "订单";
$lang['order_list'] = "订单列表";

//用户模块语言包
$lang['uid']                 = "用户ID";
$lang['user']                = "用户";
$lang['user_list']           = "用户列表";
$lang['user_add']            = "添加用户";
$lang['user_edit']           = "编辑用户";
$lang['add_user_success']    = "添加用户成功";
$lang['add_user_failed']     = "添加用户失败";
$lang['delete_user_success'] = "删除用户成功";
$lang['delete_user_failed']  = "删除用户失败";
$lang['edit_user_success']   = "更新用户成功";
$lang['edit_user_failed']    = "更新用户失败";

$lang['openid'] = "Open ID";

//微信语言包
$lang["wxapi_signatureerror"]    = "微信验证不通过";
$lang["wxapi_signaturesuccess"]  = "微信验证成功";
$lang["wxapi_xml2arrayerror"]    = "xml消息转换数组不成功";
$lang["wxapi_xml2arraysuccess"]  = "xml消息转换数组成功";
$lang["wxapi_replaysuccess"]     = "回复策略成功获取回复消息";
$lang["wxapi_replayerror"]       = "回复策略获取回复消息失败";
$lang["wx_excurlerror"]          = "curl数据返回不成功";
$lang["wx_excurlsuccess"]        = "curl数据返回成功";
$lang["wx_accesstokenerror"]     = "获取accesstoken错误，错误封装在data中";
$lang["wx_accesstokensuccess"]   = "获取accesstoken成功";
$lang["wx_argument_error"]       = "参数缺少";
$lang["wx_getopenidlistsuccess"] = "获取openid列表成功";
$lang["wx_getopenidlisterror"]   = "获取openid列表不成功";
$lang["wx_getwxuserinfosuccess"] = "获取用户信息成功";
$lang["wx_getwxuserinfoerror"]   = "获取用户信息不成功";
$lang["wx_createmenusuccess"]    = "创建菜单成功";
$lang["wx_createmenuerror"]      = "创建菜单不成功";

//node
$lang['title']   = '标题';
$lang['nid']     = '节点ID';
$lang['content'] = '内容';

$lang['author']        = '作者';
$lang['publish_time']  = '发部时间';
$lang['update_time']   = '更新时间';
$lang['delete_time']   = '删除时间';
$lang['category_name'] = '类别';

$lang['article']      = '文章';
$lang['tid_article']  = '文章分类';
$lang['article_list'] = '文章列表';
$lang['article_add']  = '文章添加';
$lang['article_edit'] = '文章编辑';

$lang['house']      = '房型';
$lang['house_list'] = '房型列表';
$lang['house_add']  = '房型添加';
$lang['house_edit'] = '房型编辑';

$lang['designer']      = '设计师';
$lang['designer_list'] = '设计师列表';
$lang['designer_add']  = '设计师添加';
$lang['designer_edit'] = '设计师编辑';

$lang["product"]      = '产品';
$lang["product_list"] = '产品列表';
$lang["product_add"]  = '产品添加';
$lang["product_edit"] = '产品编辑';

$lang['mobile'] = '手机';
$lang['add']    = '';

$lang['comment']      = '评论';
$lang['comment_list'] = '评论列表';
$lang['comment_add']  = '评论添加';
$lang['comment_edit'] = '评论编辑';

$lang['appointment']      = '预约';
$lang['appointment_list'] = '预约列表';
$lang['appointment_add']  = '预约添加';
$lang['appointment_edit'] = '预约编辑';

$lang['role']      = '角色';
$lang['role_list'] = '角色列表';
$lang['role_add']  = '角色添加';
$lang['role_edit'] = '角色编辑';

$lang['user_group']      = '用户群组';
$lang['user_group_list'] = '用户群组列表';
$lang['user_group_add']  = '用户群组添加';
$lang['user_group_edit'] = '用户群组编辑';

$lang['privilege']      = '权限';
$lang['privilege_list'] = '权限列表';
$lang['privilege_add']  = '权限添加';
$lang['privilege_edit'] = '权限编辑';

$lang['module']      = '模块';
$lang['module_list'] = '模块列表';
$lang['module_add']  = '模块添加';
$lang['module_edit'] = '模块编辑';

/*

$lang[''] = '';
$lang[''] = '';
$lang[''] = '';
$lang[''] = '';
$lang[''] = '';
 */