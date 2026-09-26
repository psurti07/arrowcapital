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
define('PROJECT_NAME', 'Fintop Corporate');
define('COMPANY_NAME', 'Fintop Corporate Pvt Ltd');
define('COMPANY_EMAIL', 'info@fintopcorporate.com');
define('COMPANY_MOBILE', '+91-89803-79437');
define('COMPANY_CIN', '#');
define('COMPANY_LLP', 'ACK-6941');
define('COMPANY_GST', '24AAKFF1646D1ZR');
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
//define('SMTP_HOST', 'mail.fintopcorporate.com');
define('SMTP_HOST', 'smtp.hostinger.com');
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

define('RAZOR_KEY_ID', 'rzp_live_8MwQqWY1dc5vLS');
define('RAZOR_KEY_SECRET', 'mcUp8up0mcTDZ3efcldfu0Fj');

// Phonepe details
define('PHONEPE_MODE', 'PROD');
define('PHONEPE_MID', 'M22IC8NSFPYYF');
define('PHONEPE_KEY', '8235f8f2-76ed-4e47-b959-5268dd412d4d');
define('PHONEPE_KEY_INDEX', '1');

// PayU details
define('PAYU_MODE', 'PROD');
define('PAYU_MERCHANT_KEY', 'YyZPXe');
define('PAYU_SALT', 'ttzGz0AjDcWvOOv66B3dijDSY27Bl17g');

// Zaakpay Detail
define('ZAAKPAY_MODE', 'PROD');
define('ZAAKPAY_MERCHANT_IDENTIFIER', 'bdad07e75d8049d89c5ce0b5666aef8d');
define('ZAAKPAY_SECRET_KEY', 'e44a64ebe7e74e2cb280a33ea1ef2f96');

// PAygic
define('PAYGIC_MID', 'FINTOPCORP');
define('PAYGIC_PASSWORD', 'JYrPy6wde*v7');

// Vegaah Deatil
define('TERMINAL_ID', 'TER7302218');
define('TERMINAL_PASSWORD', 'TER25071841517484248809');
define('TERMINAL_KEY', '86bc666dd76fb05102bf8ebfb26f071729e7bb352c4c171316f91b6c521c607a');

// Whatsapp API
define('INTERAKT_KEY','S1dMYnRXZFc5ZmQxLUI2eERjY2lRX1JBZV80aWFXbXE5enFoOWZVVnJxVTo=');

define('INTERAKT_KEY_RM','RU9zc2JlUDRCQlFNZFQ3Ry00UDlUU0FZTF90VjBjdWdIUTJxNENBazF5dzo=');
define('INTERAKT_KEY_UE_2','RU9zc2JlUDRCQlFNZFQ3Ry00UDlUU0FZTF90VjBjdWdIUTJxNENBazF5dzo=');


define('AISENSY_KEY', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjY3ZmExYWVjN2ZiMGNjMGMxZDE4NGRmNyIsIm5hbWUiOiJGaW50b2wgQ29uc3VsdGluZyBMTFAiLCJhcHBOYW1lIjoiQWlTZW5zeSIsImNsaWVudElkIjoiNjdmYTFhZWM3ZmIwY2MwYzFkMTg0ZGYyIiwiYWN0aXZlUGxhbiI6IkZSRUVfRk9SRVZFUiIsImlhdCI6MTc0NDQ0NDE0MH0.h7YaGpVqGidf8JGyrT7En-BkuFr-uLHMm-Ov8ZbzQHU');  

define('AISENSY_OFFER_URL', 'https://d3jt6ku4g6z5l8.cloudfront.net/IMAGE/67fa1aec7fb0cc0c1d184df7/5355374_fintopget21mar.jpeg');
define('AISENSY_OFFER_IMAGE', 'fintop_get_21mar.jpeg');

define('AISENSY_MARKETING_URL', 'https://d3jt6ku4g6z5l8.cloudfront.net/IMAGE/67fa1aec7fb0cc0c1d184df7/3754587_finaise.jpeg');
define('AISENSY_MARKETING_IMAGE', 'fin_aise.jpeg');

define('AISENSY_SUCCESS_URL', '#');
define('AISENSY_SUCCESS_IMAGE', '#');

define('AISENSY_FAIL_URL', '#');
define('AISENSY_FAIL_IMAGE', '#');

//UAT Mobile Mumbers list
define('UAT_MOBILE_NUMBERS', serialize(array('9408881214', '9904466599','9725165565')));

// Geoloc API Key
define('GEOLOC_API_KEY', 'pFA3FTZynF8c1mnrrZcDuYauR9kI1iI4SDw9bhh2');

// Facebook
define('ACCESS_TOKEN', '');

// Remarketing Cycle Days Set
define('LOCK_DAYS','-90 days');

define('COMPANY_CODE', 'FINCOP4321');
define('LOCAL_IP', '190.92.174.183');

