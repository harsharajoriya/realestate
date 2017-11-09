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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'Login/index'; 
$route['dashboard'] ='Login/dashboard';
$route['logout'] = 'Login/logout';
$route['front-options'] = 'Home/front_options';
$route['submit-front-option/(:num)'] = 'Home/submitFrontOptions/$1';
$route['enquiry'] = 'Home/enquiry';
$route['common-delete'] = 'Home/delete_data';
$route['property'] = 'Home/property';
$route['edit-property/(:num)'] = 'Home/edit_property/$1';
$route['approve-data/(:num)/(:any)'] = 'Home/approve_data/$1/$2';
$route['disapprove-data/(:num)/(:any)'] = 'Home/disapprove_data/$1/$2';
$route['city'] = 'Home/city';
$route['state'] = 'Home/state';
$route['submit-state'] = 'Home/submit_state';
$route['submit-city'] = 'Home/submit_city';
$route['rent-property'] = 'Home/property_listing_rent';
$route['sell-property'] = 'Home/property_listing_sell';
$route['submit-enquiry'] = 'Home/submit_enquiry';
$route['add-enquiry'] = 'Home/add_enquiry';
$route['add-project-enquiry'] = 'Home/add_project_enquiry';
$route['submit-new-enquiry'] = 'Home/submit_new_enquiry';
$route['submit-admin-project-enquiry'] = 'Home/submit_admin_project_enquiry';
$route['downloadData/(:any)'] = 'Home/download_csv/$1';
$route['edit-enquiry/(:num)'] = 'Home/edit_enquiry/$1';
$route['follow-up']  = 'Home/follow_up';
$route['property-details/(:num)'] = 'Home/property_details/$1';
$route['search-property'] = 'Home/search_property';

//form page
$route['post'] = 'Home/post';
$route['user_data/(:any)'] = 'Home/user_data_view/$1';
$route['submit-user'] = 'Home/submit_user';
$route['submit-post'] = 'Home/submit_post';
$route['update-post'] = 'Home/update_post';
$route['browseimage'] = 'Home/browseimage';
$route['add-project'] = 'Home/add_project';
$route['privacy'] = 'Home/privacy';
$route['terms-conditions'] = 'Home/terms_conditions';
$route['contact-us'] = 'Home/contact_us';
$route['save-contact'] = 'Home/save_contact';
$route['submit-project'] = 'Home/submit_project';
$route['projects'] = 'Home/projects';
$route['projects-listing'] = 'Home/projects_listing'; 
$route['submit-project-enquiry'] = 'Home/submit_project_enquiry';
$route['project-enquiry'] = 'Home/project_enquiry';
$route['projects-details/(:num)'] = 'Home/projects_details/$1';
$route['edit-project-enquiry/(:num)'] = 'Home/edit_project_enquiry/$1';
$route['edit-projects/(:num)'] = 'Home/edit_projects/$1';
$route['update-project'] = 'Home/update_project';
