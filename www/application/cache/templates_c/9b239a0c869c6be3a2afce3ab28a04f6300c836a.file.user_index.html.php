<?php /* Smarty version Smarty-3.1.16, created on 2015-08-08 06:29:43
         compiled from "/www/hlsc/www/application/themes/admin/default/user_index.html" */ ?>
<?php /*%%SmartyHeaderCode:71530624155c4d799665b99-88227474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b239a0c869c6be3a2afce3ab28a04f6300c836a' => 
    array (
      0 => '/www/hlsc/www/application/themes/admin/default/user_index.html',
      1 => 1438986582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71530624155c4d799665b99-88227474',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55c4d79971bd65_51504389',
  'variables' => 
  array (
    'title' => 0,
    'THEMEPATH' => 0,
    'userlist' => 0,
    'item' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4d79971bd65_51504389')) {function content_55c4d79971bd65_51504389($_smarty_tpl) {?><!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/main.min.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/dataTables.bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="assets/lib/html5shiv/html5shiv.js"></script>
      <script src="assets/lib/respond/respond.min.js"></script>
      <![endif]-->

    <!--For Development Only. Not required -->
    <script>
      less = {
        env: "development",
        relativeUrls: false,
        rootpath: "../assets/"
      };
    </script>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/less/theme.less">
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/less.min.js"></script>

    <!--Modernizr-->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/modernizr.min.js"></script>
  </head>
  <body class="  ">
    <div class="bg-dark dk" id="wrap">
      <?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("./left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">

            <!--Begin Datatables-->
            <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header>
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h5>
                  </header>
                  <div id="collapse4" class="body">
                    <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                      <thead>
                        <tr>
                          <td>ID</td>
                          <td><?php echo t("openid");?>
</td>
                          <td><?php echo t("realname");?>
</td>
                          <td><?php echo t("mobile");?>
</td>
                          <td><?php echo t("qq");?>
</td>
                          <td><?php echo t("sex");?>
</td>
                          <td><?php echo t("birthday");?>
</td>
                          <td><?php echo t("remark");?>
</td>
                          <td><?php echo t("operation");?>
</td>
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <tr id="user_<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
">
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['openid'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['mobile'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['qq'];?>
</td>
                          <td><?php if ($_smarty_tpl->tpl_vars['item']->value['sex']==1) {?><?php echo t("man");?>
<?php } else { ?><?php echo t("famale");?>
<?php }?></td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['birthday'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['remark'];?>
</td>
                          <td>
                              <input type="button" class="btn btn-danger btn-xs delete" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
" value="<?php echo t('delete');?>
"/>
                              <a href="/admin/AdminUser/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
" class="btn btn-warning btn-xs edit" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
"><?php echo t("edit");?>
</a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div><!-- /.row -->
            <!--End Datatables-->
            <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

            </div>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
    </div><!-- /#wrap -->
     <?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--jQuery -->
     <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.4/js/jquery.dataTables.min.js"></script>
    <script src="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

    <!--Bootstrap -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/bootstrap.min.js"></script>

    <!-- MetisMenu -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/metisMenu.min.js"></script>

    <!-- Screenfull -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/screenfull.min.js"></script>

    <!-- Metis core scripts -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/core.min.js"></script>

    <!-- Metis demo scripts -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/app.js"></script>
    <script>
      /*$(function() {
        Metis.MetisTable();
        Metis.metisSortable();
      });*/
    </script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/style-switcher.min.js"></script>
    <script type="text/javascript">
    $("document").ready(function()
      {
          $(".delete").click(function()
            {
                var uid = $(this).attr("name");
                $.ajax({
                      url:"/admin/AdminUser/ajax_user_delete",
                      type:"post",
                      data:"uid="+uid,
                      dataType:"json",
                      success:function(data)
                      {
                          if(data.status == "1")
                          {
                              $("#user_"+uid).hide();
                          }else
                          {
                              alert(data.message)
                          }
                      }

                  });
            });
      });
    </script>
  </body><?php }} ?>
