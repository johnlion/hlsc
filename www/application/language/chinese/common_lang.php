<?php
/**
 * @Desc:后台语言包
 * @Author:Luffy mail@aoxiang.me
 * @Time:2015年8月7日 08:42:36
 */
//$lang['key'] = "value";
defined('BASEPATH') OR exit('No direct script access allowed');

//按钮类
$lang['console'] = "控制台";
$lang['login'] = '登录';
$lang['setting'] = '设置';
$lang['publish'] = '发布';
$lang['add'] = '添加';
$lang['edit'] = '编辑';
$lang['delete'] = '删除';
$lang['update'] = '更新';
$lang['submit'] = '提交';
$lang['success'] = '成功';
$lang['failed'] = '失败';
$lang['ok'] = '确定';
$lang['cancel'] = '取消';
$lang['operation'] = '操作';
$lang['view'] = '查看';
$lang['search'] = '搜索';
$lang['warning'] = '警告';
$lang['list'] = '列表';
$lang['all'] = '全部';
$lang['batch'] = '批量';
$lang['year'] = '年';
$lang['month'] = '月';
$lang['day'] = '日';
$lang['first_page'] = '首页';
$lang['prev_page'] = '上一页';
$lang['next_page'] = '下一页';
$lang['last_page'] = '末页';
$lang['notice'] = '公告';
$lang['power'] = '权限';

//公共语言包
$lang['account'] = '账户';
$lang['name'] = '名称';
$lang['password'] = '密码';
$lang['email'] = '邮箱';
$lang['modules_installed'] = 'Modules has installed.';
$lang['modules_installing_failed'] = 'Modules installing failed.';
$lang['modules_uinstalled'] = 'Modules Uinstalled.';
$lang['please_try_again_later'] = 'Please tryp again later.';
$lang['add_success'] = '添加成功';
$lang['add_failed'] = '添加失败';
$lang['update_success'] = '更新成功';
$lang['update_failed'] = '更新失败';
$lang['delete_success'] = '删除成功';
$lang['delete_failed'] = '删除失败';

//错误语言包
$lang['param_error'] = "参数错误";
$lang['fields_not_exist'] = "字段不存在,请检查输入的字段是否存在表中。";
$lang['no_language'] = "找不到对应的语言包";

//CI自带数据库错误语言包
$lang['db_invalid_connection_str'] = 'Unable to determine the database settings based on the connection string you submitted.';
$lang['db_unable_to_connect'] = 'Unable to connect to your database server using the provided settings.';
$lang['db_unable_to_select'] = 'Unable to select the specified database: %s';
$lang['db_unable_to_create'] = 'Unable to create the specified database: %s';
$lang['db_invalid_query'] = 'The query you submitted is not valid.';
$lang['db_must_set_table'] = 'You must set the database table to be used with your query.';
$lang['db_must_use_set'] = 'You must use the "set" method to update an entry.';
$lang['db_must_use_index'] = 'You must specify an index to match on for batch updates.';
$lang['db_batch_missing_index'] = 'One or more rows submitted for batch updating is missing the specified index.';
$lang['db_must_use_where'] = 'Updates are not allowed unless they contain a "where" clause.';
$lang['db_del_must_use_where'] = 'Deletes are not allowed unless they contain a "where" or "like" clause.';
$lang['db_field_param_missing'] = 'To fetch fields requires the name of the table as a parameter.';
$lang['db_unsupported_function'] = 'This feature is not available for the database you are using.';
$lang['db_transaction_failure'] = 'Transaction failure: Rollback performed.';
$lang['db_unable_to_drop'] = 'Unable to drop the specified database.';
$lang['db_unsupported_feature'] = 'Unsupported feature of the database platform you are using.';
$lang['db_unsupported_compression'] = 'The file compression format you chose is not supported by your server.';
$lang['db_filepath_error'] = 'Unable to write data to the file path you have submitted.';
$lang['db_invalid_cache_path'] = 'The cache path you submitted is not valid or writable.';
$lang['db_table_name_required'] = 'A table name is required for that operation.';
$lang['db_column_name_required'] = 'A column name is required for that operation.';
$lang['db_column_definition_required'] = 'A column definition is required for that operation.';
$lang['db_unable_to_set_charset'] = 'Unable to set client connection character set: %s';
$lang['db_error_heading'] = 'A Database Error Occurred';

//主题模块语言包
$lang['theme'] = "主题";
$lang['theme_setting'] = "主题设置";
$lang['theme_choose'] = "选择主题";

//主题模块语言包
$lang['theme'] = "主题";
$lang['theme_setting'] = "主题设置";
$lang['theme_choose'] = "选择主题";

//订单模块语言包
$lang['order'] = "订单";
$lang['order_list'] = "订单列表";

//用户模块语言包
$lang['user'] = "用户";
$lang['user_list'] = "用户列表";
$lang['user_add'] = "添加用户";

$lang['add_user_success'] = "添加用户成功";
$lang['add_user_failed'] = "添加用户失败";
$lang['delete_user_success'] = "添加用户成功";
$lang['delete_user_failed'] = "添加用户失败";

$lang['openid'] = "Open ID";

//微信语言包
$lang["wxapi_signatureerror"] = "微信验证不通过";
$lang["wxapi_signaturesuccess"] = "微信验证成功";
$lang["wxapi_xml2arrayerror"] = "xml消息转换数组不成功";
$lang["wxapi_xml2arraysuccess"] = "xml消息转换数组成功";
$lang["wxapi_replaysuccess"] = "回复策略成功获取回复消息";
$lang["wxapi_replayerror"] = "回复策略获取回复消息失败";
$lang["wx_excurlerror"] = "curl数据返回不成功";
$lang["wx_excurlsuccess"] = "curl数据返回成功";
$lang["wx_accesstokenerror"] = "获取accesstoken错误，错误封装在data中";
$lang["wx_accesstokensuccess"] = "获取accesstoken成功";

//node
$lang["product"] = '产品';
$lang["product_list"] = '产品列表';
$lang["product_add"] = '产品添加';
$lang["product_delete"] = '产品删除';
$lang["product_update"] = '产品更新';
