<?php

return [
    'COMPANY_CODE' => 'CAPKR6257',
    'uat_mobile_numbers' => array_filter(explode(',', env('UAT_MOBILE_NUMBERS', ''))),
    'LA_OFFER_1' => 'la-offer-1',
    'LA_OFFER_2' => 'la-offer-2',
    'LA_OFFER_3' => 'la-offer-3',
    'LA_OFFER_4' => 'la-offer-4',
    'LA_OFFER_5' => 'la-offer-5',
    'LA_OFFER_6' => 'la-offer-6',
    'SA_OFFER_1' => 'sa-offer-1',
    'SA_OFFER_2' => 'sa-offer-2',
    'SA_OFFER_3' => 'sa-offer-3',
    'SA_OFFER_4' => 'sa-offer-4',
    'SA_OFFER_5' => 'sa-offer-5',
    'SA_OFFER_6' => 'sa-offer-6',
    'SA_OFFER_7' => 'sa-offer-7',

    'WEBSITE'          => env('WEBSITE', 'wisefinai.com'),
    'COMPANY_NAME'     => env('COMPANY_NAME', 'WiseFinAI'),
    'COMPANY_ADDRESS'  => env('COMPANY_ADDRESS'),
    'COMPANY_MOBILE'   => env('COMPANY_MOBILE'),
    'COMPANY_INFO_MAIL'=> env('COMPANY_INFO_MAIL'),
    'COMPANY_SUPPORT_MAIL' => env('COMPANY_SUPPORT_MAIL'),
    'INFO_EMAIL'       => env('INFO_EMAIL'),

    'CIN_NO'           => env('CIN_NO'),
    'GST_NO'           => env('GST_NO'),

    'SM_FACEBOOK'      => env('SM_FACEBOOK'),
    'SM_INSTAGRAM'     => env('SM_INSTAGRAM'),
    'SM_LINKEDIN'      => env('SM_LINKEDIN'),
    'SM_TWITTER'       => env('SM_TWITTER'),
    'SM_YOUTUBE'       => env('SM_YOUTUBE'),
    'SM_PINTEREST'     => env('SM_PINTEREST'),
];
