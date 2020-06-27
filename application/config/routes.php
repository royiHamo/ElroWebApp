<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/index';
$route['404_override'] = '';
$route['profile'] = 'pages/profile';
$route['(:any)'] = 'pages/index/$1';
$route['translate_uri_dashes'] = FALSE;
