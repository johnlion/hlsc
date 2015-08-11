<?php /* Smarty version Smarty-3.1.16, created on 2015-08-07 22:38:40
         compiled from "/www/hlsc/www/application/themes/admin/default/user_index.html" */ ?>
<?php /*%%SmartyHeaderCode:112636632355c4c2f00b9594-65502551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b239a0c869c6be3a2afce3ab28a04f6300c836a' => 
    array (
      0 => '/www/hlsc/www/application/themes/admin/default/user_index.html',
      1 => 1438946775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112636632355c4c2f00b9594-65502551',
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
  'unifunc' => 'content_55c4c2f017a4a7_12114427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4c2f017a4a7_12114427')) {function content_55c4c2f017a4a7_12114427($_smarty_tpl) {?><!doctype html>
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
                    <h5>Dynamic Table</h5>
                  </header>
                  <div id="collapse4" class="body">
                    <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                      <thead>
                        <tr>
                          <th>Rendering engine</th>
                          <th>Browser</th>
                          <th>Platform(s)</th>
                          <th>Engine version</th>
                          <th>CSS grade</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Trident</td>
                          <td>Internet Explorer 4.0</td>
                          <td>Win 95+</td>
                          <td>4</td>
                          <td>X</td>
                        </tr>
                        <tr>
                          <td>Trident</td>
                          <td>Internet Explorer 5.0</td>
                          <td>Win 95+</td>
                          <td>5</td>
                          <td>C</td>
                        </tr>
                        <tr>
                          <td>Trident</td>
                          <td>Internet Explorer 5.5</td>
                          <td>Win 95+</td>
                          <td>5.5</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Trident</td>
                          <td>Internet Explorer 6</td>
                          <td>Win 98+</td>
                          <td>6</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Trident</td>
                          <td>Internet Explorer 7</td>
                          <td>Win XP SP2+</td>
                          <td>7</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Trident</td>
                          <td>AOL browser (AOL desktop)</td>
                          <td>Win XP</td>
                          <td>6</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Firefox 1.0</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>1.7</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Firefox 1.5</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>1.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Firefox 2.0</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>1.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Firefox 3.0</td>
                          <td>Win 2k+ / OSX.3+</td>
                          <td>1.9</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Camino 1.0</td>
                          <td>OSX.2+</td>
                          <td>1.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Camino 1.5</td>
                          <td>OSX.3+</td>
                          <td>1.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Netscape 7.2</td>
                          <td>Win 95+ / Mac OS 8.6-9.2</td>
                          <td>1.7</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Netscape Browser 8</td>
                          <td>Win 98SE+</td>
                          <td>1.7</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Netscape Navigator 9</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>1.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.0</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.1</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1.1</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.2</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1.2</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.3</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1.3</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.4</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1.4</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.5</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1.5</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.6</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>1.6</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.7</td>
                          <td>Win 98+ / OSX.1+</td>
                          <td>1.7</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Mozilla 1.8</td>
                          <td>Win 98+ / OSX.1+</td>
                          <td>1.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Seamonkey 1.1</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>1.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Epiphany 2.20</td>
                          <td>Gnome</td>
                          <td>1.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Webkit</td>
                          <td>Safari 1.2</td>
                          <td>OSX.3</td>
                          <td>125.5</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Webkit</td>
                          <td>Safari 1.3</td>
                          <td>OSX.3</td>
                          <td>312.8</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Webkit</td>
                          <td>Safari 2.0</td>
                          <td>OSX.4+</td>
                          <td>419.3</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Webkit</td>
                          <td>Safari 3.0</td>
                          <td>OSX.4+</td>
                          <td>522.1</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Webkit</td>
                          <td>OmniWeb 5.5</td>
                          <td>OSX.4+</td>
                          <td>420</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Webkit</td>
                          <td>iPod Touch / iPhone</td>
                          <td>iPod</td>
                          <td>420.1</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Webkit</td>
                          <td>S60</td>
                          <td>S60</td>
                          <td>413</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Presto</td>
                          <td>Opera 7.0</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td>-</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Presto</td>
                          <td>Opera 7.5</td>
                          <td>Win 95+ / OSX.2+</td>
                          <td>-</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Presto</td>
                          <td>Opera 8.0</td>
                          <td>Win 95+ / OSX.2+</td>
                          <td>-</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Presto</td>
                          <td>Opera 8.5</td>
                          <td>Win 95+ / OSX.2+</td>
                          <td>-</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Presto</td>
                          <td>Opera 9.0</td>
                          <td>Win 95+ / OSX.3+</td>
                          <td>-</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Presto</td>
                          <td>Opera 9.2</td>
                          <td>Win 88+ / OSX.3+</td>
                          <td>-</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Presto</td>
                          <td>Opera 9.5</td>
                          <td>Win 88+ / OSX.3+</td>
                          <td>-</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Presto</td>
                          <td>Opera for Wii</td>
                          <td>Wii</td>
                          <td>-</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Presto</td>
                          <td>Nokia N800</td>
                          <td>N800</td>
                          <td>-</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Presto</td>
                          <td>Nintendo DS browser</td>
                          <td>Nintendo DS</td>
                          <td>8.5</td>
                          <td>C/A1</td>
                        </tr>
                        <tr>
                          <td>KHTML</td>
                          <td>Konqureror 3.1</td>
                          <td>KDE 3.1</td>
                          <td>3.1</td>
                          <td>C</td>
                        </tr>
                        <tr>
                          <td>KHTML</td>
                          <td>Konqureror 3.3</td>
                          <td>KDE 3.3</td>
                          <td>3.3</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>KHTML</td>
                          <td>Konqureror 3.5</td>
                          <td>KDE 3.5</td>
                          <td>3.5</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Tasman</td>
                          <td>Internet Explorer 4.5</td>
                          <td>Mac OS 8-9</td>
                          <td>-</td>
                          <td>X</td>
                        </tr>
                        <tr>
                          <td>Tasman</td>
                          <td>Internet Explorer 5.1</td>
                          <td>Mac OS 7.6-9</td>
                          <td>1</td>
                          <td>C</td>
                        </tr>
                        <tr>
                          <td>Tasman</td>
                          <td>Internet Explorer 5.2</td>
                          <td>Mac OS 8-X</td>
                          <td>1</td>
                          <td>C</td>
                        </tr>
                        <tr>
                          <td>Misc</td>
                          <td>NetFront 3.1</td>
                          <td>Embedded devices</td>
                          <td>-</td>
                          <td>C</td>
                        </tr>
                        <tr>
                          <td>Misc</td>
                          <td>NetFront 3.4</td>
                          <td>Embedded devices</td>
                          <td>-</td>
                          <td>A</td>
                        </tr>
                        <tr>
                          <td>Misc</td>
                          <td>Dillo 0.8</td>
                          <td>Embedded devices</td>
                          <td>-</td>
                          <td>X</td>
                        </tr>
                        <tr>
                          <td>Misc</td>
                          <td>Links</td>
                          <td>Text only</td>
                          <td>-</td>
                          <td>X</td>
                        </tr>
                        <tr>
                          <td>Misc</td>
                          <td>Lynx</td>
                          <td>Text only</td>
                          <td>-</td>
                          <td>X</td>
                        </tr>
                        <tr>
                          <td>Misc</td>
                          <td>IE Mobile</td>
                          <td>Windows Mobile 6</td>
                          <td>-</td>
                          <td>C</td>
                        </tr>
                        <tr>
                          <td>Misc</td>
                          <td>PSP browser</td>
                          <td>PSP</td>
                          <td>-</td>
                          <td>C</td>
                        </tr>
                        <tr>
                          <td>Other browsers</td>
                          <td>All others</td>
                          <td>-</td>
                          <td>-</td>
                          <td>U</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div><!-- /.row -->
            <!--End Datatables-->
              
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
      $(function() {
        Metis.MetisTable();
        Metis.metisSortable();
      });
    </script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/style-switcher.min.js"></script>
  </body><?php }} ?>
