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
define('PROJECT_NAME', 'Fintop Corporate');
define('COMPANY_NAME', 'Fintop Corporate Pvt Ltd');
define('COMPANY_EMAIL', 'info@fintopcorporate.com');
define('COMPANY_MOBILE', '+91-89803-79437');
define('COMPANY_CIN', '#');
define('COMPANY_GST', '#');
define('COMPANY_SITE', 'https://fintopcorporate.com');
define('COMPANY_ADDRESS', 'Plot No 29, 2nd Floor, Parvati Nager Co Op Soc., Dabholi Road, Katargam, Surat, Gujarat, India - 395004');
define('COMPANY_TIMING', '10 AM to 5 PM (Monday to Saturday)');

define('CU_PAYOUT_RATIO', '0.40');
define('TDS_RATIO', '0');

define('SECURE_SALT', 'verloopweb');

//Social media
define('SM_GOOGLE', '#');
define('SM_FACEBOOK', 'https://www.facebook.com/profile.php?id=61566505103788');
define('SM_INSTAGRAM', 'https://www.instagram.com/fintopcorporate/');
define('SM_TWITTER', 'https://x.com/FintopCorporate');
define('SM_LINKEDIN', 'https://www.linkedin.com/in/fintop-corporate-9b67a632a/');
define('SM_PINTEREST', 'https://in.pinterest.com/fintopcorporate/');
define('SM_YOUTUBE', 'https://www.youtube.com/@FintopCorporate');

// Email SMTP details
define('SMTP_HOST', 'mail.fintopcorporate.com');
define('SMTP_USER_INFO', 'info@fintopcorporate.com');
define('SMTP_PASSWORD_INFO', 'Fintop@6699');

define('SMTP_USER_SUPPORT', 'info@fintopcorporate.com');
define('SMTP_PASSWORD_SUPPORT', 'Fintop@6699');

define('SMTP_USER_HR', 'info@fintopcorporate.com');
define('SMTP_PASSWORD_HR', 'Fintop@6699');

// SENDINBLUE details
define('SMTP_USER', 'info@fintopcorporate.com');
define('SIB_NAME', 'fintopcorporate.com');
define('SIB_EMAILID', 'info@fintopcorporate.com');
define('SIB_APIKEY', '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');

// OBB - SMS details - m
define('SMS_OBB_API_KEY', '82ea40019dXX');
define('SMS_OBB_USERNAME', 'fintopco');
define('SMS_OBB_PASSWORD', '82ea40019dXX');
define('SMS_OBB_SENDER_ID', 'FNTCOP');

// Whatsapp API
define('INTERAKT_KEY', '#');
define('AISENSY_KEY', '#');

// Page PG details
define('PG_MAIN_PL', '#');
define('PG_MAIN_BL', '#');
define('PG_CARD_OFFER', '#'); // 3 fail payment page
define('PG_IVRPAYMENT_OFFER', '#'); //4
define('PG_SPECIAL_OFFER', '#'); // 5
define('PG_BUMPER_OFFER', '#'); // 6
define('PG_FESTIVAL_OFFER', '#'); // 7
define('PG_MEGA_OFFER', '#'); // 7
define('PG_STAR_OFFER','#'); // 8

// Whatsapp API
//define('INTERAKT_KEY','S1dMYnRXZFc5ZmQxLUI2eERjY2lRX1JBZV80aWFXbXE5enFoOWZVVnJxVTo=');

//UAT Mobile Mumbers list
define('UAT_MOBILE_NUMBERS', serialize(array('9408881214', '9904466599')));

// Geoloc API Key
define('GEOLOC_API_KEY', 'pFA3FTZynF8c1mnrrZcDuYauR9kI1iI4SDw9bhh2');

// Facebook
define('ACCESS_TOKEN', '#');

define('COMPANY_CODE', 'FINCOP4321');
define('LOCAL_IP', '190.92.174.183');
define('MASTER_API_KEY', 'Umx6ZEN0RmFqRmV5cTVFcUZNUXpLNHgzU2U3Z0IzYzRoUmoyUHlnMXRxbU9kWHZIWVpOTzFGbVJhWGs4NUM4cQ==');
