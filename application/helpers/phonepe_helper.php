<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Content-Type: text/html; charset=utf-8');

/*function getpaymenturl($peurl, $key, $keyindex, $data) {
    $data_json = json_encode($data);
    $data_base64 = base64_encode($data_json);
    $data_sha256 = hash('sha256', ($data_base64."/pg/v1/pay".$key));
    $data_xvalue = $data_sha256."###".$keyindex;

    $post_data = array();

    $data_req1 = array(  
        "request" => $data_base64
    );
    $data_req2 = json_encode($data_req1);

    $curl = curl_init();
    curl_setopt_array($curl, [
      CURLOPT_URL => $peurl,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>  $data_req2,
      CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "X-VERIFY: ".$data_xvalue,
        "accept: application/json"
      ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
   
    if ($err) {
      return "cURL Error #:" . $err;
    } else {
      return json_decode($response);
    }
}*/

function create_token()
{

    $data_req1 = [ 
      "client_version"=>"1",
      "grant_type"=>"client_credentials",
      "client_secret"=>"8235f8f2-76ed-4e47-b959-5268dd412d4d",
      "client_id" => "SU2503051251184394190934",
    ];
  

    $curl = curl_init();
    curl_setopt_array($curl, [
      CURLOPT_URL => 'https://api.phonepe.com/apis/identity-manager/v1/oauth/token',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>  http_build_query($data_req1),
      CURLOPT_HTTPHEADER => [
        "Content-Type: application/x-www-form-urlencoded",
      ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    if ($err) {
      return "cURL Error #:" . $err;
    } else {
      return json_decode($response);
    }
}

function checkout_payment($data_req, $token){
  $curl = curl_init();
    curl_setopt_array($curl, [
      CURLOPT_URL => 'https://api.phonepe.com/apis/pg/checkout/v2/pay',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>  json_encode($data_req),
      CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: O-Bearer ".$token,
      ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    $decoded_response = json_decode($response);
    
    return $decoded_response;
  
}

function checkout_order_status($data_req, $token){
  
  $curl = curl_init();
    curl_setopt_array($curl, [
      CURLOPT_URL => 'https://api.phonepe.com/apis/pg/checkout/v2/order/'.$data_req.'/status',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: O-Bearer ".$token,
      ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    $decoded_response = json_decode($response);
    
    return $decoded_response;
  
}

?>