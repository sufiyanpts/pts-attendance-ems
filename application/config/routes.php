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
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error_page';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'home/login_page';
$route['logout'] = 'home/logout';

// department routes
$route['add-department'] = 'department';
$route['insert-department'] = 'department/insert';
$route['manage-department'] = 'department/manage_department';
$route['edit-department/(:num)'] = 'department/edit/$1';
$route['update-department'] = 'department/update';
$route['delete-department/(:num)'] = 'department/delete/$1';

//staff routes
$route['add-staff'] = 'staff';
$route['manage-staff'] = 'staff/manage';
$route['insert-staff'] = 'staff/insert';
$route['view-staff/(:num)'] = 'staff/view_staff/$1';
$route['delete-staff/(:num)'] = 'staff/delete/$1';
$route['edit-staff/(:num)'] = 'staff/edit/$1';
$route['update-staff'] = 'staff/update';

//salary routes
$route['add-salary'] = 'salary';
$route['manage-salary'] = 'salary/manage';
$route['view-salary'] = 'salary/view';
$route['salary-invoice/(:num)'] = 'salary/invoice/$1';
$route['print-invoice/(:num)'] = 'salary/invoice_print/$1';
$route['delete-salary/(:num)'] = 'salary/delete/$1';
$route['salaryinvoice/(:num)'] = 'salary/invoicestaff/$1';


//Leave routes
$route['apply-leave'] = 'leave';
$route['approve-leave'] = 'leave/approve';
$route['leave-history'] = 'leave/manage';
$route['leave-approved/(:num)'] = 'leave/insert_approve/$1';
$route['leave-rejected/(:num)'] = 'leave/insert_reject/$1';
$route['view-leave'] = 'leave/view';



//Attendance routes
$route['add-attendance'] = 'attendance';
$route['add-attendance'] = 'attendance/manage_attendance';
$route['staff-attendance-history'] = 'attendance/staff_attendance_history';
$route['view-attendance'] = 'attendance/view';
$route['manual-attendance-request'] = 'attendance/manual_attendance_request';
$route['attendance-approved/(:num)'] = 'attendance/insert_approve/$1';
$route['attendance-rejected/(:num)'] = 'attendance/insert_reject/$1';


//Attendance History
$route['view-attendance-history'] = 'attendance/filter_by_date_range';
$route['staff-range-attendance-history'] = 'attendance/staff_range_attendance_history';

//COFF routes
$route['approve-coff'] = 'attendance/approve';  
$route['insert-coff'] = 'attendance/insert_coff';
$route['coff-history'] = 'attendance/manage_coff_request';
$route['coff-request'] = 'attendance/coff_request';
$route['coff-approved/(:num)'] = 'attendance/insert_coff_approve/$1';
$route['coff-rejected/(:num)'] = 'attendance/insert_coff_reject/$1';


// Birthday routes
$route['add-birthday'] = 'birthday';
$route['insert-birthday'] = 'birthday/insert';
$route['manage-birthday'] = 'birthday/manage_birthday';
$route['edit-birthday/(:num)'] = 'birthday/edit/$1';
$route['update-birthday'] = 'birthday/update';
$route['delete-birthday/(:num)'] = 'birthday/delete/$1';



// Anniversary routes
$route['add-anniversary'] = 'anniversary';
$route['insert-anniversary'] = 'anniversary/insert';
$route['manage-anniversary'] = 'anniversary/manage_anniversary';
$route['delete-anniversary/(:num)'] = 'anniversary/delete/$1';


// Forgot Password
$route['forgot-password'] = 'ForgotPassword/index';
$route['forgot-password/send-reset-link'] = 'ForgotPassword/send_reset_link';
$route['forgot-password/success'] = 'ForgotPassword/success';
$route['forgot-password/error'] = 'ForgotPassword/error';


//Notice routes
$route['add-notice'] = 'notice';
$route['insert-notice'] = 'notice/insert';
$route['manage-notice'] = 'notice/manage_notice';
$route['edit-notice/(:num)'] = 'notice/edit/$1';
$route['update-notice'] = 'notice/update';
$route['delete-notice/(:num)'] = 'notice/delete/$1';
$route['view-notice'] = 'notice/view';

// branch routes
$route['add-branch'] = 'branch';
$route['insert-branch'] = 'branch/insert';
$route['manage-branch'] = 'branch/manage_branch';
$route['edit-branch/(:num)'] = 'branch/edit/$1';
$route['update-branch'] = 'branch/update';
$route['delete-branch/(:num)'] = 'branch/delete/$1'; 

//Holiday routes
$route['add-holiday'] = 'holiday';
$route['insert-holiday'] = 'holiday/insert';
$route['manage-holiday'] = 'holiday/manage_holiday';
$route['edit-holiday/(:num)'] = 'holiday/edit/$1';
$route['update-holiday'] = 'holiday/update';
$route['delete-holiday/(:num)'] = 'holiday/delete/$1';
$route['view-holiday'] = 'holiday/view';


// Assets-type routes
$route['add-assets-type'] = 'assetstype';
$route['insert-assetstype'] = 'assetstype/insert';
$route['manage-assetstype'] = 'assetstype/manage_assetstype';
$route['edit-assetstype/(:num)'] = 'assetstype/edit/$1';
$route['update-assetstype'] = 'assetstype/update';
$route['delete-assetstype/(:num)'] = 'assetstype/delete/$1';


//Assets routes
$route['add-assets'] = 'assets';
$route['insert-assets'] = 'assets/insert';
$route['manage-assets'] = 'assets/manage_assets';
$route['edit-assets/(:num)'] = 'assets/edit/$1';
$route['update-assets'] = 'assets/update';
$route['delete-assets/(:num)'] = 'assets/delete/$1';
$route['view-assets'] = 'assets/view';