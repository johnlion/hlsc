<?php /* Smarty version Smarty-3.1.16, created on 2015-08-08 03:53:36
         compiled from "/www/hlsc/www/application/themes/admin/default/theme_index.html" */ ?>
<?php /*%%SmartyHeaderCode:43396959855c50ad7534e28-02416023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f0dea60cc347593efdcf860432a9a4f427e56b4' => 
    array (
      0 => '/www/hlsc/www/application/themes/admin/default/theme_index.html',
      1 => 1438977215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43396959855c50ad7534e28-02416023',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55c50ad7658e96_99769436',
  'variables' => 
  array (
    'title' => 0,
    'THEMEPATH' => 0,
    'themes' => 0,
    'theme' => 0,
    'now_theme' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c50ad7658e96_99769436')) {function content_55c50ad7658e96_99769436($_smarty_tpl) {?><!doctype html>
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
                  <div class="row">
                      <div class="col-lg-12">
                        <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                          <small>Theme Setting</small> 
                        </h2>
                        <ul class="pricing-table"  id="light">
                          <!--<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>-->
                            <li id="<?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['theme']->value['name']==$_smarty_tpl->tpl_vars['now_theme']->value['title']) {?>active danger <?php }?>col-lg-3">
                                <h2><?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
</h2>
                                <div class="price-body">
                                    <div class="price">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['screenshot'];?>
"/>
                                    </div>
                                </div>
                                <div class="features">
                                    <ul>
                                       <li><?php echo $_smarty_tpl->tpl_vars['theme']->value['path'];?>
</li>
                                    </ul>
                            </div>
                                <div class="footer">
                                    <a href="javascript:choose_theme('<?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['theme']->value['path'];?>
');" class="btn btn-info btn-rect"><?php echo t("ok");?>
</a> 
                                </div>
                            </li>
                          <!--<?php } ?>-->
                          
                          <div class="clearfix"></div>
                        </ul>
                      </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                  </div>
            </div><!-- /#outer-->
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
    <script>
     
      //设置主题
      function choose_theme(title,path)
      {

          if(title == "" || path == "")
          {
              alert("Param Error");
          }else
          {
              $.ajax({
                    url:"AdminTheme/ajax_set_theme",
                    type:"post",
                    data:"title="+title+"&themepath="+path,
                    dataType:"json",
                    success:function(data)
                    {
                        if(data.status == "1")
                        {
                            var objs = $("#light").find("li.col-lg-3");
                            objs.each(function(i)
                              {
                                  $(this).removeClass("active");
                                  $(this).removeClass("danger");
                              });
                              $("#"+data.msg).addClass("active danger");
                        }else
                        {
                            alert(data.errmsg);
                        }
                    }
                  });
          }
      }
    </script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/style-switcher.min.js"></script>
  </body>
<?php }} ?>
