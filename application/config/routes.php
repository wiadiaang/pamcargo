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
|	http://codeigniter.com/user_guide/general/routing.html
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

$route['default_controller'] = 'home';
$route['home'] = 'home';
$route['auth'] = 'auth/auth';

$route['about-us'] = 'home/home/about_us';
$route['sea-air-service'] = 'home/sea_air_service';
$route['air-freight-service'] = 'home/air_freight_service';
$route['sea-freight-service'] = 'home/sea_freight_service';
$route['ad-hoc-charter-service'] = 'home/ad_hoc_charter_service';
$route['road-transport'] = 'home/road_transport';
$route['custom-clearance'] = 'home/custom_clearence';
$route['warehousing'] = 'home/warehousing';
$route['monthly-schedule'] = 'home/monthly_schedule';
$route['schedule-query'] = 'home/schedule_query';
$route['schedule-query-result'] = 'home/schedule_query_result';

$route['rate-request'] = 'home/rate_request';
$route['news'] = 'home/news';
$route['(:any)'] = 'home/news_detail/$1';

$route['offices'] = 'home/offices';
$route['agents'] = 'home/agents';
$route['contact-us'] = 'home/contact_us';
$route['404_override'] = 'home/not_found';

$route['track-and-trace'] = 'home/track_and_trace';


$route['admin/sea-air-services'] = 'admin/services/sea_air_services';
$route['admin/air-freight-services'] = 'admin/services/air_freight_services';
$route['admin/sea-freight-services'] = 'admin/services/sea_freight_services';
$route['admin/ad-hoc-services'] = 'admin/services/ad_hoc_services';
$route['admin/road-transport'] = 'admin/services/road_transport';
$route['admin/custom-clearance'] = 'admin/services/custom_clearance';
$route['admin/warehousing'] = 'admin/services/warehousing';
// $route['admin/vessel_name'] = 'admin/news';
// $route['admin/offices'] = 'admin/offices';
// $route['admin/agents'] = 'admin/agents';


$route['translate_uri_dashes'] = FALSE;
