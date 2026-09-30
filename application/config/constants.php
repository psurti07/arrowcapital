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
define('PROJECT_NAME', 'Arrow capital');
define('COMPANY_NAME', 'Arrow capital');
define('COMPANY_EMAIL', 'info@arrowcapital.in');
define('COMPANY_MOBILE', '+91-96249-66297');
define('COMPANY_CIN', '#');
define('COMPANY_LLP', '#');
define('COMPANY_GST', '24AZXPH2940L1ZW');
define('COMPANY_SITE', 'arrowcapital.in');
define('COMPANY_ADDRESS', 'Wing-B, Flat No. 502, Om Heights, Gariyadhar Bypass Road, Near Bajrangdas Bapa Chowk, Palitana, Bhavnagar, Gujarat – 364270, India');
define('COMPANY_TIMING', '10 AM to 5 PM (Monday to Saturday)');

define('CU_PAYOUT_RATIO', '0.40');
define('TDS_RATIO', '0');

define('SECURE_SALT', 'verloopweb');

//Social media
define('SM_GOOGLE', '#');
define('SM_FACEBOOK', 'https://www.facebook.com/profile.php?id=61591136406433');
define('SM_INSTAGRAM', 'https://www.instagram.com/arrow_capital/');
define('SM_TWITTER', 'https://x.com/arrow_capital_');
define('SM_LINKEDIN', '#');
define('SM_PINTEREST', 'https://in.pinterest.com/arrow_capital/');
define('SM_YOUTUBE', 'https://www.youtube.com/@arrowcapitalofficial');

// Email SMTP details
//define('SMTP_HOST', 'mail.arrowcapital.in');
define('SMTP_HOST', 'smtp.hostinger.com');
define('SMTP_USER_INFO', 'info@arrowcapital.in');
define('SMTP_PASSWORD_INFO', 'arrow@2026');

define('SMTP_USER_SUPPORT', 'info@arrowcapital.in');
define('SMTP_PASSWORD_SUPPORT', 'arrow@2026');

define('SMTP_USER_HR', 'info@arrowcapital.in');
define('SMTP_PASSWORD_HR', 'arrow@2026');

// SENDINBLUE details
define('SMTP_USER', 'info@arrowcapital.in');
define('SIB_NAME', 'arrowcapital.in');
define('SIB_EMAILID', 'info@arrowcapital.in');
define('SIB_APIKEY', '#');

// OBB - SMS details - m
define('SMS_OBB_API_KEY', '4a5eb7ad7aXX');
define('SMS_OBB_USERNAME', 'arrowcap');
define('SMS_OBB_PASSWORD', '4a5eb7ad7aXX');
define('SMS_OBB_SENDER_ID', 'ARWCPT');

define('RAZOR_KEY_ID', 'rzp_live_Ti8PJMwZQoXvib');
define('RAZOR_KEY_SECRET', 'u5coNp91nT7nwURSSPXZUyLM');

// Easebuzz details
define('EASEBUZZ_ENV', 'PROD');
define('EASEBUZZ_MERCHANT_KEY', 'BE46ZQQT9G');
define('EASEBUZZ_SALT', 'ELVHCK45X7');

// SabPaisa details
define('SABPAISA_MODE', 'PROD');
define('SABPAISA_CLIENT_CODE', 'ARRO702');
define('SABPAISA_USERNAME', '#');
define('SABPAISA_PASSWORD', '#');
define('SABPAISA_AUTH_KEY', 'sp_hf3M3qbnjrp5AadtcVFtMjNfznZ5fMX-lFViVXIw24Q');
define('SABPAISA_AUTH_IV', 'sec_EOAtoVg8xDSrPsPqcTpl0JEGqMiAbWfNwCgRJl-vSMc');

// Phonepe details
define('PHONEPE_MODE', 'PROD');
define('PHONEPE_MID', '#');
define('PHONEPE_KEY', '#');
define('PHONEPE_KEY_INDEX', '1');

// PayU details
define('PAYU_MODE', 'PROD');
define('PAYU_MERCHANT_KEY', '#');
define('PAYU_SALT', '#');

// Zaakpay Detail
define('ZAAKPAY_MODE', 'PROD');
define('ZAAKPAY_MERCHANT_IDENTIFIER', '#');
define('ZAAKPAY_SECRET_KEY', '#');

// PAygic
define('PAYGIC_MID', '#');
define('PAYGIC_PASSWORD', '#');

// Vegaah Deatil
define('TERMINAL_ID', '#');
define('TERMINAL_PASSWORD', '#');
define('TERMINAL_KEY', '#');

// Whatsapp API
define('INTERAKT_KEY','#');

define('INTERAKT_KEY_RM','#');
define('INTERAKT_KEY_UE_2','#');


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
define('UAT_MOBILE_NUMBERS', serialize(array('9408881214', '9904466599','9725165565')));

// Geoloc API Key
define('GEOLOC_API_KEY', 'B3ggKMGeHHJcPlP3RCV5hvObw65m78IYIz9NtCV9'); //pFA3FTZynF8c1mnrrZcDuYauR9kI1iI4SDw9bhh2

// Facebook
define('ACCESS_TOKEN', '');

// Remarketing Cycle Days Set
define('LOCK_DAYS','-90 days');

define('COMPANY_CODE', 'AROCPTAL123');
define('LOCAL_IP', '#');

