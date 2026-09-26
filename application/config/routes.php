<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['translate_uri_dashes'] = TRUE;

$route['default_controller'] = 'Infopage';
$route['404_override'] = 'Customerror';

$route['company'] = "infopage/company";
$route['contact'] = "infopage/contact";
$route['career'] = "infopage/career";
$route['faqs'] = "infopage/faqs";
$route['important-update'] = "infopage/important_update";
$route['privacy-policy'] = "infopage/privacy_policy";
$route['refund-policy'] = "infopage/refund_policy";
$route['disclaimer'] = "infopage/disclaimer";
$route['terms-conditions'] = "infopage/terms_conditions";
$route['unsubscribe'] = "infopage/unsubscribe";
$route['sitemap'] = "infopage/sitemap";

$route['personal-subscription'] = "subscription/personal";
$route['business-subscription'] = "subscription/business";
$route['subscription-plan-benefits'] = "subscription/plan_benefits";

$route['cardoffer'] = "pay/cardoffer";
$route['ivrpaymentoffer'] = "pay/ivrpaymentoffer";
$route['festivaloffer'] = "pay/festivaloffer";

$route['customer'] = 'customer/Login';
$route['customer/license-agreement'] = 'customer/dashboard/license_agreement';
