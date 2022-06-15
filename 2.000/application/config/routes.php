<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['default_controller'] = 'home/Home';
$route['default_controller'] = 'home'; 
$route['404_override'] = 'welcome';


$route['auth'] = 'auth/index';


$route['admin'] = 'admin/auth/index';
$route['about'] = 'home/home/about';
$route['how-it-works'] = 'home/home/how_it_work';
$route['measuring'] = 'home/home/measuring';
$route['packaging'] = 'home/home/packaging';
$route['term-condition'] = 'home/home/term_condition';
$route['tracking'] = 'home/home/tracking';
$route['contact-us'] = 'home/home/contact_us';
$route['tracking/result'] = 'home/home/tracking_result';
$route['login'] = 'home/auth/index';
$route['logout'] = 'home/auth/logout';
$route['login/proses'] = 'home/auth/proses';
$route['signup/proses'] = 'home/auth/create';
$route['signup'] = 'home/auth/signup';
$route['customer'] = 'customer/dashboard';
$route['customer/order'] = 'customer/order';
$route['clients'] = 'clients/Clients';
$route['clients/create'] = 'clients/Clients/create';
$route['clients/group'] = 'clients/Clients/group';
$route['clients/export_n_import'] = 'clients/Clients/export_n_import';
$route['translate_uri_dashes'] = FALSE;
