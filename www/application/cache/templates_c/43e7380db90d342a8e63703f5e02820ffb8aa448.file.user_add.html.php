<?php /* Smarty version Smarty-3.1.16, created on 2015-08-08 01:26:30
         compiled from "/www/hlsc/www/application/themes/admin/default/user_add.html" */ ?>
<?php /*%%SmartyHeaderCode:203254244755c4ea46eb26f9-41963655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43e7380db90d342a8e63703f5e02820ffb8aa448' => 
    array (
      0 => '/www/hlsc/www/application/themes/admin/default/user_add.html',
      1 => 1438968344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203254244755c4ea46eb26f9-41963655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'THEMEPATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55c4ea470c9ae0_87777356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4ea470c9ae0_87777356')) {function content_55c4ea470c9ae0_87777356($_smarty_tpl) {?><!doctype html>
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
/assets/lib/jquery-inputlimiter/jquery.inputlimiter.1.0.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/lib/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/uniform.default.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/chosen.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/jquery.tagsinput.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/bootstrap-switch.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/datepicker3.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/lib/validationEngine/validationEngine.jquery.min.css">

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
    <style type="text/css">
        li.active a.btn
        {
                color: #fff;
                background-color: #ee465a;
                border-color: #c11a39;
                padding: 10px 16px;
                font-size: 18px;
                line-height: 1.33;
                border-radius: 6px;
        }
    </style>
  </head>
  <body class="  ">
    <div class="bg-dark dk" id="wrap">
      <?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("./left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <!--BEGIN INPUT TEXT FIELDS-->
            <div class="row">
              <div class="col-lg-12">
                <div class="box dark">
                  <header>
                    <div class="icons">
                      <i class="fa fa-edit"></i>
                    </div>
                    <h5><?php echo t('user_add');?>
</h5>

                    <!-- .toolbar -->
                    <div class="toolbar">
                      <nav style="padding: 8px;">
                        <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                          <i class="fa fa-minus"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-default btn-xs full-box">
                          <i class="fa fa-expand"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                          <i class="fa fa-times"></i>
                        </a>
                      </nav>
                    </div><!-- /.toolbar -->
                  </header>
                  <div id="add-form" class="body">
                    <form class="form-horizontal" id="user_add_validate">
                      <div class="form-group">
                        <label for="openid" class="control-label col-lg-4"><?php echo t("openid");?>
</label>
                        <div class="col-lg-4">

                          <input type="text" id="openid" name="openid" placeholder="openid"  class="validate[required] form-control">
                        </div>
                      </div><!-- /.form-group -->
                      <div class="form-group">
                        <label for="headimg" class="control-label col-lg-4"><?php echo t("headimg");?>
</label>
                        <div class="col-lg-4">
                          <input class="form-control" type="headimg" id="headimg" required  name="headimg"/>
                        </div>
                      </div><!-- /.form-group -->
                       <div class="form-group">
                        <label for="sex" class="control-label col-lg-4"><?php echo t("sex");?>
</label>
                        <div class="col-lg-4" id="sex">
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="sex" value="1" checked><?php echo t("man");?>

                                </label>
                                <label>
                                    <input class="uniform" type="radio" name="sex" value="0"><?php echo t("famale");?>

                                </label>
                            </div><!-- /.checkbox -->    
                        </div>
                      </div><!-- /.form-group -->
                      <div class="form-group">
                        <label for="realname" class="control-label col-lg-4"><?php echo t("realname");?>
</label>
                        <div class="col-lg-4">
                          <input type="text" value="" name="realname" id="realname" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
                      <div class="form-group">
                        <label class="control-label col-lg-4" for="mobile"><?php echo t("mobile");?>
</label>
                          <div class="col-lg-4">
                          <input type="text" value="" name="mobile" name="mobile" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
                      <div class="form-group">
                        <label for="text2" class="control-label col-lg-4" for="qq"><?php echo t("qq");?>
</label>
                          <div class="col-lg-4">
                          <input type="text" id="qq" name="qq" placeholder="" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                       <div class="form-group">
                        <label for="birthday" class="control-label col-lg-4" for="qq"><?php echo t("birthday");?>
</label>
                        <div class="col-lg-4">
                          <input type="text" id="birthday" name="birthday" placeholder="" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
                     
                      <div class="form-group">
                        <label for="remark" class="control-label col-lg-4"><?php echo t("remark");?>
</label>
                        <div class="col-lg-4">
                          <textarea id="remark" name="remark" class="form-control"></textarea>
                        </div>
                      </div><!-- /.form-group -->
                      <div class="form-group">
                           <div class="col-lg-6"></div>
                          <div class="form-actions col-lg-4">
                            <input type="button" value="<?php echo t('submit');?>
" id="submit" class="btn btn-primary">
                          </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div><!-- /#row -->
              <!--END TEXT INPUT FIELD-->
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
      
    </div><!-- /#wrap -->
    <?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <!--jQuery -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/moment.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/jquery.uniform.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/chosen.jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/jquery.tagsinput.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/jquery.autosize.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/jasny-bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/bootstrap-switch.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/lib/validationEngine/language/jquery.validationEngine-zh_CN.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/lib/validationEngine/jquery.validationEngine.min.js"></script>



    <!--Bootstrap -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/bootstrap.min.js"></script>

    <!-- MetisMenu -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/metisMenu.min.js"></script>

    <!-- Screenfull -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/screenfull.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/lib/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/lib/jQuery.validVal/js/jquery.validVal.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Metis core scripts -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/core.min.js"></script>

    <!-- Metis demo scripts -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/app.js"></script>

    <script type="text/javascript">
    $("document").ready(function()
      {
          $('#user_add_validate').validationEngine(); 
          $("#submit").click(function()
              {
                  if($('#user_add_validate').validationEngine("validate") === true)
                  {
                      var openid = $("#openid").val();
                      var headimg = $("#headimg").val();
                      var realname = $("#realname").val();
                      var mobile = $("#mobile").val();
                      var qq = $("#qq").val();
                      var birthday = $("#birthday").val();
                      var remark = $("#remark").val();
                       var sex = $("input[name='sex']:checked").val(); 
                      
                      $.ajax({
                          url:"/admin/AdminUser/ajax_user_add",
                          type:"post",
                          data:"openid="+openid+"&headimg="+headimg+"&realname="+realname+"&sex="+sex+"&mobile="+mobile+"&qq="+qq+"&birthday="+birthday+"&remark="+remark,
                          dataType:"json",
                          success:function(data)
                          {
                              alert(data.message);
                          }

                      });
                  }

              });
      });
    </script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/style-switcher.min.js"></script>
  </body>
<?php }} ?>
