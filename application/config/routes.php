<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

$route['layout-1'] = 'layout/layout1';
$route['layout-8'] = 'layout/layout8';
$route['layout-9'] = 'layout/layout9';
// $route['all-categories/(:num)'] = 'product/all/$1';

// $route['product-category/(:any)'] = 'product/category/$1';
// $route['product-category/(:any)/(:any)'] = 'product/category/$1/$1';

// $route['product-detail/(:num)'] = 'product/detail/$1';

$route['404_override'] = 'Error';
$route['translate_uri_dashes'] = FALSE;
