<?php /* Smarty version Smarty-3.1.16, created on 2015-08-07 19:24:17
         compiled from "/www/hlsc/www/application/themes/admin/default/left.html" */ ?>
<?php /*%%SmartyHeaderCode:127327610155c49561f301f9-73601935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5cd022870ff3c9143a18c67ce25c376957ab57e' => 
    array (
      0 => '/www/hlsc/www/application/themes/admin/default/left.html',
      1 => 1438946005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127327610155c49561f301f9-73601935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'THEMEPATH' => 0,
    'admin_menu' => 0,
    'k' => 0,
    'active' => 0,
    'menu' => 0,
    'childern_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55c4956203c9d9_61141012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c4956203c9d9_61141012')) {function content_55c4956203c9d9_61141012($_smarty_tpl) {?><div id="left">
        <div class="media user-media bg-dark dker">
          <div class="user-media-toggleHover">
            <span class="fa fa-user"></span>
          </div>
          <div class="user-wrapper bg-dark">
            <a class="user-link" href="">
              <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/img/user.gif">
              <span class="label label-danger user-label">16</span>
            </a>
            <div class="media-body">
              <h5 class="media-heading">Archie</h5>
              <ul class="list-unstyled user-info">
                <li> <a href="">Administrator</a>  </li>
                <li>Last Access :
                  <br>
                  <small>
                    <i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <!-- #menu -->
        <ul id="menu" class="bg-blue dker">
            <li class="nav-header">Menu</li>
            <li class="nav-divider"></li>
            <!--<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['menu']->key;
?>-->
             <li class="<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['active']->value[0]) {?>active<?php }?>">
                  <a href="javascript:;">
                      <i class="fa fa-building "></i>
                      <span class="link-title"><?php echo $_smarty_tpl->tpl_vars['menu']->value['lang'];?>
</span> 
                      <span class="fa arrow"></span> 
                  </a>
                  <!--<?php if ($_smarty_tpl->tpl_vars['menu']->value['list']) {?>-->
                      <ul>
                          <!--<?php  $_smarty_tpl->tpl_vars['childern_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childern_menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childern_menu']->key => $_smarty_tpl->tpl_vars['childern_menu']->value) {
$_smarty_tpl->tpl_vars['childern_menu']->_loop = true;
?>-->
                         <li class="<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['active']->value[1]) {?>active<?php }?>">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['childern_menu']->value['url'];?>
">
                                  <i class="fa fa-angle-right"></i>
                                  <?php echo $_smarty_tpl->tpl_vars['childern_menu']->value['lang'];?>

                              </a> 
                          </li>
                          <!---<?php } ?>-->
                      </ul>
                  <!--<?php }?>-->
            </li>
            <!--<?php } ?>-->
        </ul>
        <!-- /#menu -->
        
 </div><!-- /#left --><?php }} ?>
