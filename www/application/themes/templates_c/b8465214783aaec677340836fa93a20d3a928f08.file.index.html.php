<?php /* Smarty version Smarty-3.1.16, created on 2015-08-07 19:24:17
         compiled from "/www/hlsc/www/application/themes/admin/default/index.html" */ ?>
<?php /*%%SmartyHeaderCode:71964618755c49561e81214-47405466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8465214783aaec677340836fa93a20d3a928f08' => 
    array (
      0 => '/www/hlsc/www/application/themes/admin/default/index.html',
      1 => 1438946029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71964618755c49561e81214-47405466',
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
  'unifunc' => 'content_55c49561f1bc84_48988118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c49561f1bc84_48988118')) {function content_55c49561f1bc84_48988118($_smarty_tpl) {?><!doctype html>
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
        rootpath: "./assets/"
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
            <div class="col-lg-12">
              <h1 id="bootstrap-admin-template">Bootstrap-Admin-Template</h1>
              <ul>
                <li>
                  <a href="https://travis-ci.org/onokumus/Bootstrap-Admin-Template">
                    <img src="https://travis-ci.org/onokumus/Bootstrap-Admin-Template.svg" alt="Build Status">
                  </a> 
                </li>
                <li>
                  <a href="https://david-dm.org/onokumus/Bootstrap-Admin-Template">
                    <img src="https://david-dm.org/onokumus/Bootstrap-Admin-Template.svg?theme=shields.io" alt="Dependency Status">
                  </a> 
                </li>
                <li>
                  <a href="https://david-dm.org/onokumus/Bootstrap-Admin-Template#info=devDependencies">
                    <img src="https://david-dm.org/onokumus/Bootstrap-Admin-Template/dev-status.svg?theme=shields.io" alt="devDependency Status">
                  </a> 
                </li>
                <li>
                  <a href="http://gruntjs.com/">
                    <img src="https://cdn.gruntjs.com/builtwith.png" alt="Built with Grunt">
                  </a> 
                </li>
              </ul>
              <blockquote>
                <p>Free Admin Template Based On Twitter Bootstrap 3.x</p>
                <p>Free Admin Template Based On Twitter Bootstrap 3.x</p>
              </blockquote>
              <h2 id="toc">TOC</h2>
              <ul>
                <li> <a href="#download">Download</a>  </li>
                <li> <a href="#building">Building</a>  </li>
                <li> <a href="#demo">Demo</a>  </li>
                <li> <a href="#release-history">Release History</a>  </li>
                <li> <a href="#credits">Credits</a>  </li>
                <li> <a href="#author">Author</a>  </li>
                <li> <a href="#license">License</a>  </li>
              </ul>
              <h2 id="download">Download</h2>
              <ul>
                <li>
                  <p>Bootstrap 2.3.2
                    <a href="https://github.com/onokumus/Bootstrap-Admin-Template/archive/v1.2.zip">v1.2</a> 
                    ready for use</p>
                </li>
                <li>
                  <p>Bootstrap 3.3.0
                    <a href="https://github.com/onokumus/Bootstrap-Admin-Template/archive/master.zip">v2.3.2</a> 
                    ready <code>dist</code> folder your use</p>
                </li>
              </ul>
              <h2 id="building">Building</h2>
              <h4 id="2-3-2-version">2.3.2 Version</h4>
              <p>required
                <a href="http://nodejs.org/">node.js</a>  &amp;
                <a href="http://bower.io/">bower</a>  &amp;
                <a href="http://gruntjs.com/getting-started">grunt</a> 
              </p>
              <pre><code class="language-shell">    $ git clone https://github.com/onokumus/Bootstrap-Admin-Template.git yourfoldername
    $ cd yourfoldername
    $ npm install
    $ npm run build
    $ grunt serve</code></pre>
              <h4 id="2-3-2-rtl-version">2.3.2 RTL Version</h4>
              <p>required
                <a href="http://nodejs.org/">node.js</a>  &amp;
                <a href="http://bower.io/">bower</a>  &amp;
                <a href="http://gruntjs.com/getting-started">grunt</a> 
              </p>
              <pre><code class="language-shell">    $ git clone https://github.com/onokumus/Bootstrap-Admin-Template.git yourfoldername
    $ cd yourfoldername
    $ npm install
    $ npm run buildrtl
    $ grunt serve</code></pre>
              <h4 id="1-2-version">1.2 Version</h4>
              <pre><code>$ git clone -b v1.2 https://github.com/onokumus/Bootstrap-Admin-Template.git yourfoldername
$ cd yourfoldername
$ git submodule init
$ git submodule update
$ open index.html</code></pre>
              <h2 id="demo">Demo</h2>
              <ul>
                <li> <a href="http://demo.onokumus.com/metis/">Demo v2.3.2</a>  </li>
                <li> <a href="http://demo.onokumus.com/metis/rtl/">RTL v2.3.2</a>  </li>
                <li>
                  <a href="http://demo.onokumus.com/metis/v12">v1.2 <code>not development</code>
                  </a> 
                </li>
              </ul>
              <h2 id="credits">Credits</h2>
              <ul>
                <li> <a href="http://nodejs.org/">node.js</a>  </li>
                <li> <a href="http://bower.io/">bower</a>  </li>
                <li> <a href="http://gruntjs.com/">Grunt</a>  </li>
                <li> <a href="http://assemble.io/">Assemble</a>  </li>
                <li> <a href="http://jquery.com/">jQuery</a>  </li>
                <li> <a href="http://getbootstrap.com/">Bootstrap</a>  </li>
                <li> <a href="http://lesscss.org/">LESS</a>  </li>
                <li> <a href="http://modernizr.com/">Modernizr</a>  </li>
                <li> <a href="http://momentjs.com/">Moment.js</a>  </li>
                <li> <a href="https://github.com/subtlepatterns/SubtlePatterns">SubtlePatterns</a>  </li>
                <li> <a href="http://arshaw.com/fullcalendar/">FullCalendar</a>  </li>
                <li> <a href="https://github.com/harvesthq/chosen">Chosen</a>  </li>
                <li> <a href="http://ckeditor.com/">CKEditor</a>  </li>
                <li> <a href="http://www.eyecon.ro/bootstrap-colorpicker/">Colorpicker for Bootstrap</a>  </li>
                <li> <a href="http://www.datatables.net">Data Tables</a>  </li>
                <li> <a href="http://www.eyecon.ro/bootstrap-datepicker">Datepicker for Bootstrap</a>  </li>
                <li> <a href="http://elfinder.org">elFinder</a>  </li>
                <li> <a href="http://rustyjeans.com/jquery-plugins/input-limiter">Input Limiter</a>  </li>
                <li> <a href="http://jasny.github.com/bootstrap">Jasny Bootstrap</a>  </li>
                <li> <a href="http://jqueryvalidation.org/">jQuery Validation</a>  </li>
                <li> <a href="http://omnipotent.net/jquery.sparkline">jQuery Sparklines</a>  </li>
                <li> <a href="http://daneden.github.io/animate.css/">Animate</a>  </li>
                <li> <a href="http://www.jacklmoore.com/autosize">Autosize</a>  </li>
                <li> <a href="http://keith-wood.name/countdown.html">Countdown</a>  </li>
                <li> <a href="https://github.com/dangrossman/bootstrap-daterangepicker">Date range picker</a>  </li>
                <li> <a href="http://www.flotcharts.org">Flot</a>  </li>
                <li> <a href="http://jquery.malsup.com/form/">jQuery Form</a>  </li>
                <li> <a href="http://thecodemine.org">Form Wizard</a>  </li>
                <li> <a href="http://boedesign.com/blog/2009/07/11/growl-for-jquery-gritter/">Gritter</a>  </li>
                <li> <a href="https://github.com/brandonaaron/jquery-mousewheel">Mouse Wheel</a>  </li>
                <li> <a href="https://github.com/kevinoconnor7/pagedown-bootstrap">PageDown-Bootstrap</a>  </li>
                <li> <a href="https://github.com/moxiecode/plupload">Plupload</a>  </li>
                <li> <a href="http://www.larentis.eu/switch/">Bootstrap Switch</a>  </li>
                <li> <a href="http://tablesorter.com/">tablesorter</a>  </li>
                <li> <a href="http://xoxco.com/projects/code/tagsinput/">tagsinput</a>  </li>
                <li> <a href="http://jdewit.github.io/bootstrap-timepicker/">Bootstrap Timepicker</a>  </li>
                <li> <a href="http://touchpunch.furf.com/">Touch Punch</a>  </li>
                <li> <a href="http://uniformjs.com/">Uniform</a>  </li>
                <li> <a href="http://www.position-relative.net/">Validation Engine</a>  </li>
                <li> <a href="http://validval.frebsite.nl/">jquery.validVal</a>  </li>
                <li> <a href="https://github.com/Waxolunist/bootstrap3-wysihtml5-bower">bootstrap3-wysihtml5-bower</a>  </li>
                <li> <a href="https://github.com/sindresorhus/screenfull.js">screenfull.js</a>  </li>
                <li> <a href="https://github.com/onokumus/metisMenu">metisMenu</a>  </li>
              </ul>
              <h2 id="author">Author</h2>
              <p><strong>Osman Nuri Okumuş</strong> 
              </p>
              <ul>
                <li> <a href="https://github.com/onokumus">github/onokumus</a>  </li>
                <li> <a href="http://twitter.com/onokumus">twitter/onokumus</a>  </li>
              </ul>
              <h2 id="license">License</h2>
              <p>Copyright (c) 2015 onokumus
                <br>Released under the MIT license</p>
              <hr>
              <p><em>This file was generated by <a href="https://github.com/assemble/verb">verb</a>  on January 13, 2015.</em> 
              </p>
            </div>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
      <div id="right" class="bg-light lter">
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Warning!</strong>  Best check yo self, you're not looking too good.
        </div>

        <!-- .well well-small -->
        <div class="well well-small dark">
          <ul class="list-unstyled">
            <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span> 
            </li>
            <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span> 
            </li>
            <li>Popularity <span class="dynamicbar pull-right">Loading..</span> 
            </li>
            <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span> 
            </li>
          </ul>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <button class="btn btn-block">Default</button>
          <button class="btn btn-primary btn-block">Primary</button>
          <button class="btn btn-info btn-block">Info</button>
          <button class="btn btn-success btn-block">Success</button>
          <button class="btn btn-danger btn-block">Danger</button>
          <button class="btn btn-warning btn-block">Warning</button>
          <button class="btn btn-inverse btn-block">Inverse</button>
          <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
          <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
          <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
          <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
          <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
          <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <span>Default</span> <span class="pull-right"><small>20%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
          </div>
          <span>Success</span> <span class="pull-right"><small>40%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
          </div>
          <span>warning</span> <span class="pull-right"><small>60%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
          </div>
          <span>Danger</span> <span class="pull-right"><small>80%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
          </div>
        </div>
      </div><!-- /#right -->
    </div><!-- /#wrap -->
    <footer class="Footer bg-dark dker">
      <p>2014 &copy; Metis Bootstrap Admin Template</p>
    </footer><!-- /#footer -->

    <!-- #helpModal -->
    <div id="helpModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#helpModal -->

    <!--jQuery -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/jquery.min.js"></script>

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
    <script src="<?php echo $_smarty_tpl->tpl_vars['THEMEPATH']->value;?>
/assets/js/style-switcher.min.js"></script>
  </body><?php }} ?>
