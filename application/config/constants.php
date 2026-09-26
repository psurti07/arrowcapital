<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
defined('SHOW_DEBUG_BACKTRACE') or define('SHOW_DEBUG_BACKTRACE', TRUE);

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
defined('FILE_READ_MODE') or define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') or define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE') or define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE') or define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ') or define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE') or define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE') or define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE') or define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE') or define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE') or define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT') or define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT') or define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

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
defined('EXIT_SUCCESS') or define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR') or define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG') or define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE') or define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS') or define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') or define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT') or define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE') or define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN') or define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX') or define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code



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

//Social media
define('SM_GOOGLE', '#');
define('SM_FACEBOOK', 'https://www.facebook.com/profile.php?id=61577251774204');
define('SM_INSTAGRAM', 'https://www.instagram.com/cash_india1/?next=%2F');
define('SM_TWITTER', 'https://x.com/cashindia2025');
define('SM_LINKEDIN', '#');
define('SM_PINTEREST', 'https://in.pinterest.com/cashindia2025/');
define('SM_YOUTUBE', 'https://www.youtube.com/@cashindia-e5p');

// Email SMTP details
define('SMTP_HOST', 'mail.cashindia.in');
define('SMTP_USER_INFO', 'info@cashindia.in');
define('SMTP_PASSWORD_INFO', 'Cashin@6688');

define('SMTP_USER_SUPPORT', '#');  
define('SMTP_PASSWORD_SUPPORT', 'Cash@6446');

define('SMTP_USER_HR', '#');
define('SMTP_PASSWORD_HR', 'Cash@6446');


// SENDINBLUE details
// SENDINBLUE details
define('SIB_NAME', 'cashindia.in');
define('SIB_EMAILID', 'info@cashindia.in');
define('SIB_APIKEY', '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');


// OBB - SMS details - m
define('SMS_OBB_API_KEY', 'c32ef3657dXX');
define('SMS_OBB_USERNAME', 'cashind');
define('SMS_OBB_PASSWORD', 'c32ef3657dXX');
define('SMS_OBB_SENDER_ID', 'CHSIND');

// Razorpay details
define('RAZOR_KEY_ID_DEMO', '#');
define('RAZOR_KEY_ID', 'rzp_live_Bs0X7KcSoXwS1V');
define('RAZOR_KEY_SECRET', 'BzIP1ve60e7nM2xFuFgXopQu');

// Zaakpay Detail
define('ZAAKPAY_MODE', 'PROD');
define('ZAAKPAY_MERCHANT_IDENTIFIER', 'bdf2c6969b9447399367ed6f8a87a143');
define('ZAAKPAY_SECRET_KEY', 'fbfbb43c1b954d9aacd2e75df5e7e010');

// PAygic
define('PAYGIC_MID', 'BLUEROCKFI');
define('PAYGIC_PASSWORD', 'r#1ZNj#t#TZ1');

// OpenMoney details
/*define('OPENMONEY_MODE', 'TEST');
define('OPENMONEY_URL', 'https://sandbox-payments.open.money/layer');
define('OPENMONEY_API_KEY', '2f0d7010-92b8-11f0-ac69-c37037cbbe14');
define('OPENMONEY_API_SECRET', 'e48ba786357ce65665932110d3bba285afdbfd82'); */

define('OPENMONEY_MODE', 'PROD');
define('OPENMONEY_URL', 'https://payments.open.money/layer');
define('OPENMONEY_API_KEY', 'c5b63061-116e-4201-97aa-cb751fd13601');
define('OPENMONEY_API_SECRET', 'fc8debe852011fd02cf6261deff126cf55982994cef2a146686d675700df02b8');

// Whatsapp API
define('INTERAKT_KEY', 'OURsdlI2N3VucW5uWmtMcE90UjFVWDZvTmdqMnpIcjVPRzcwRnh3RGVUNDo=');
define('INTERAKT_KEY_REMARKETING', 'T2tfaFpQcVI2VDhEdUJqU0UyYnByd3FzbG80aXpPR2NEVjdVUmJLVUZIUTo=');
define('AISENSY_KEY', '#');

define('AISENSY_OFFER_URL', '#');
define('AISENSY_OFFER_IMAGE', '#');

define('AISENSY_MARKETING_URL', '#');
define('AISENSY_MARKETING_IMAGE', '#');

define('AISENSY_SUCCESS_URL', '#');
define('AISENSY_SUCCESS_IMAGE', '#');

define('AISENSY_FAIL_URL', '#');
define('AISENSY_FAIL_IMAGE', '#');

//UAT Mobile Mumbers list
define('UAT_MOBILE_NUMBERS', serialize(array('9408881214', '9904466599')));

// Geoloc API Key
define('GEOLOC_API_KEY', 'mT9VVn1xaWmZNzI4RJRjIJRql4yIVWDXtVv1LB87');

// Facebook
define('ACCESS_TOKEN', '');

define('COMPANY_CODE', 'CAIND4759');
define('LOCAL_IP', '190.92.174.183');