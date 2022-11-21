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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(?i)check-login'] = 'Welcome/check_login';
$route['(?i)dashboard'] = 'Mgulogin/index';
$route['(?i)logout'] = 'Mgulogin/logout';
$route['(?i)upload-file'] = 'Mgulogin/upload_file';
$route['(?i)add-files'] = 'Mgulogin/add_files';
$route['(?i)important-files'] = 'Mgulogin/important_files';
$route['(?i)latest-files'] = 'Mgulogin/latest_files';
$route['(?i)public-files'] = 'Mgulogin/public_files';
$route['(?i)create-new-group'] = 'Mgulogin/create_new_group';
$route['(?i)create-group'] = 'Mgulogin/create_group';
$route['(?i)active-groups'] = 'Mgulogin/active_groups';
$route['(?i)closed-group-by-super-admin/(:any)'] = 'Mgulogin/closed_group_by_super_admin/$1';
$route['(?i)close-groups'] = 'Mgulogin/close_groups';
$route['(?i)reactive-group-by-super-admin/(:any)'] = 'Mgulogin/reactive_group_by_super_admin/$1';
$route['(?i)permanent-delete-group-by-super-admin/(:any)'] = 'Mgulogin/permanent_delete_group_by_super_admin/$1';
$route['(?i)add-user'] = 'Mgulogin/add_user';
$route['(?i)add-user-by-super-admin'] = 'Mgulogin/add_user_by_super_admin';
$route['(?i)check-file-name'] = 'Mgulogin/check_file_name';
$route['(?i)manage-group/(:any)'] = 'Mgulogin/group_details/$1';
$route['(?i)group-detail/(:any)'] = 'Mgulogin/group_details/$1';
$route['(?i)add-file-in-group'] = 'Mgulogin/add_file_in_group';
$route['(?i)add-user-in-group'] = 'Mgulogin/add_user_in_group';
$route['(?i)all-files'] = 'Mgulogin/all_files';
$route['(?i)all-users'] = 'Mgulogin/all_users';
$route['(?i)change-password'] = 'Mgulogin/change_password';
