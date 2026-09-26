<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/**
 * Custom defines
 */

// Project details
define('PROJECT_NAME', 'Cashindia');
define('COMPANY_NAME', 'Bluerock Financial Services LLP');
define('COMPANY_EMAIL', 'info@cashindia.in');
define('COMPANY_CP_EMAIL', '#');
define('COMPANY_MOBILE', '+91-84696-39432');
define('COMPANY_CIN', '#');
define('COMPANY_LLP','ACL-4341');
define('COMPANY_GST', '24ABEFB2581L1ZE');
define('COMPANY_SITE', 'https://cashindia.in/');
define('COMPANY_ADDRESS', '1st Floor, Plot-29, Parvati Nagar Co Op H Society-2, Katargam Road, RS No.-123/1 Paiky, Surat - 395004');
define('COMPANY_TIMING', '10 AM to 5 PM (Monday to Saturday)');

define('CU_PAYOUT_RATIO', '0.40');
define('TDS_RATIO', '0');

define('SECURE_SALT', 'verloopweb');

// Page PG details
define('PG_MAIN_PL', 'Zaakpay');
define('PG_MAIN_BL', 'Zaakpay');
define('PG_CARD_OFFER', 'Razorpay'); // 3 fail payment page
define('PG_IVRPAYMENT_OFFER', 'Paygic'); //4
define('PG_SPECIAL_OFFER', '#'); // 5
define('PG_BUMPER_OFFER', '#'); // 6
define('PG_FESTIVAL_OFFER', 'Openmoney'); // 7

//Social media
define('SM_GOOGLE', '#');
define('SM_FACEBOOK', 'https://www.facebook.com/profile.php?id=61577251774204');
define('SM_INSTAGRAM', 'https://www.instagram.com/cash_india1/?next=%2F');
define('SM_TWITTER', 'https://x.com/cashindia2025');
define('SM_LINKEDIN', '#');
define('SM_PINTEREST', 'https://in.pinterest.com/cashindia2025/');
define('SM_YOUTUBE','https://www.youtube.com/@cashindia-e5p');

// Email SMTP details
define('SMTP_HOST', '#');
define('SMTP_USER_INFO', '#');
define('SMTP_PASSWORD_INFO', 'Cash@6446');

define('SMTP_USER_SUPPORT', '#');
define('SMTP_PASSWORD_SUPPORT', 'Cash@6446');

define('SMTP_USER_HR', '#');
define('SMTP_PASSWORD_HR', 'Cash@6446');

// SENDINBLUE details
define('SIB_NAME', 'cashindia.in');
define('SIB_EMAILID', 'info@cashindia.in');
define('SIB_APIKEY', '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');

// OBB - SMS details - m
define('SMS_OBB_API_KEY', 'c32ef3657dXX');
define('SMS_OBB_USERNAME', 'cashind');
define('SMS_OBB_PASSWORD', 'c32ef3657dXX');
define('SMS_OBB_SENDER_ID', 'CHSIND');

// Whatsapp API
define('INTERAKT_KEY', 'T2tfaFpQcVI2VDhEdUJqU0UyYnByd3FzbG80aXpPR2NEVjdVUmJLVUZIUTo=');
define('AISENSY_KEY', '#');

//UAT Mobile Mumbers list
define('UAT_MOBILE_NUMBERS', serialize(array('9408881214', '9904466599')));

// Geoloc API Key
define('GEOLOC_API_KEY', 'mT9VVn1xaWmZNzI4RJRjIJRql4yIVWDXtVv1LB87');

// Facebook
define('ACCESS_TOKEN', '#');

define('COMPANY_CODE', 'PAISC');
define('LOCAL_IP', '190.92.174.183');
define('MASTER_API_KEY', 'ZmxEdHhvL3pqUkg1R21QTjQ0Y0lSNDJydTNPbVV3UExQQUZpams5cHFZdz0=');

define('DATA_LOCK', 'YES'); // display datalock in remarketing page
define('DAYS_LOCK', '7 Days'); // display datalock in remarketing page
define('DATE_LOCK', '#'); // display datalock in remarketing page
