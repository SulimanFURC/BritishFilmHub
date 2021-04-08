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
$route['default_controller'] = 'HomeController/Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Home'] = 'HomeController/Home';
$route['contact-us'] = 'HomeController/contactUs';
$route['apply'] = 'HomeController/apply';
$route['services'] = 'HomeController/services';
$route['model'] = 'HomeController/model';
$route['modelDetail'] = 'HomeController/modelDetail';
$route['about-us'] = 'HomeController/aboutUs';

$route['login'] = 'HomeController/login';
$route['userlogin'] = 'HomeController/userlogin';
$route['logout'] = 'HomeController/adminLogout';

$route['post-job'] = 'HomeController/postJob';
$route['jobList'] = 'HomeController/viewJobs';
$route['talentRegistration'] = 'HomeController/talentRegistration';
$route['editInfo/(:any)'] = 'HomeController/editTalent/$1';

//edit admin/Recuriter
$route['editRecuriter/(:any)'] = 'HomeController/editRecuriter/$1';

$route['approve/(:any)'] = 'HomeController/approveAdmin/$1';

$route['Dashboard'] = 'HomeController/talentDashboard';
$route['Dashboard/(:any)'] = 'HomeController/talentDashboard/$1';

$route['jobDetails/(:any)'] = 'HomeController/jobDetails/$1';

$route['talentinfo/(:any)'] = 'HomeController/TalentInfo/$1';

$route['jobList/(:num)'] = 'HomeController/viewJobs';
$route['editJob/(:any)'] = 'HomeController/editJob/$1';
$route['delete/(:any)'] = 'HomeController/delete/$1';

$route['deleteAdmin/(:any)'] = 'HomeController/deleteAdmin/$1';

$route['job_apply'] = 'HomeController/apply_job';

//admin page list of jobs
$route['AdminDashboard'] = 'HomeController/AdminDashboard';
$route['AdminDashboard/(:num)'] = 'HomeController/AdminDashboard';

// $route['(:any)'] = 'pages/view/$1';
// $route['default_controller'] = 'pages/view';
