<?php /* Smarty version Smarty-3.1.16, created on 2015-08-08 00:06:49
         compiled from "/www/hlsc/www/application/themes/admin/default/nav.html" */ ?>
<?php /*%%SmartyHeaderCode:152972912355c4d799722892-22643216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1573255640b0ace2bc46300f56f7213c3816a856' => 
    array (
      0 => '/www/hlsc/www/application/themes/admin/default/nav.html',
      1 => 1438946583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152972912355c4d799722892-22643216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'THEMEPATH' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55c4d79972f7b6_53776112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4d79972f7b6_53776112')) {function content_55c4d79972f7b6_53776112($_smarty_tpl) {?><div id="top">

        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="/index.php/admin" class="navbar-brand">
                <img src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/img/logo.png" alt="">
              </a>
            </header>
            <div class="topnav">
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                  <i class="glyphicon glyphicon-fullscreen"></i>
                </a>
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-warning">5</span>
                </a>
                <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-comments"></i>
                  <span class="label label-danger">4</span>
                </a>
                <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
                  <i class="fa fa-question"></i>
                </a>
              </div>
              <div class="btn-group">
                <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                  <i class="fa fa-power-off"></i>
                </a>
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                  <i class="fa fa-bars"></i>
                </a>
                <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip" class="btn btn-default btn-sm toggle-right"> <span class="glyphicon glyphicon-comment"></span>  </a>
              </div>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

              <!-- .nav -->
              <ul class="nav navbar-nav">
                <li> <a href="dashboard.html">Dashboard</a>  </li>
                <li> <a href="table.html">Tables</a>  </li>
                <li> <a href="file.html">File Manager</a>  </li>
                <li class='dropdown active'>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Form Elements
                    <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li> <a href="form-general.html">General</a>  </li>
                    <li> <a href="form-validation.html">Validation</a>  </li>
                    <li> <a href="form-wysiwyg.html">WYSIWYG</a>  </li>
                    <li> <a href="form-wizard.html">Wizard &amp; File Upload</a>  </li>
                  </ul>
                </li>
              </ul><!-- /.nav -->
            </div>
          </div><!-- /.container-fluid -->
        </nav><!-- /.navbar -->
        <header class="head">
          <div class="search-bar">
            <form class="main-search" action="">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Live Search ...">
                <span class="input-group-btn">
            <button class="btn btn-primary btn-sm text-muted" type="button">
                <i class="fa fa-search"></i>
            </button>
        </span>
              </div>
            </form><!-- /.main-search -->
          </div><!-- /.search-bar -->
          <div class="main-bar">
            <h3>
              <i class="fa fa-pencil"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
          </div><!-- /.main-bar -->
        </header><!-- /.head -->
      </div>
      <!-- /#top --><?php }} ?>
