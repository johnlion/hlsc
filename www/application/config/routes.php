<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['admin'] = '/admin/AdminIndex';
$route['theme'] = '/admin/AdminTheme';
$route['order'] = '/admin/AdminOrder';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
