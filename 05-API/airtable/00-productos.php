<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.airtable.com/v0/appLLNRwDQ9NC4BOj/Productos',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer patdbap8raFBNlNhA.7aa8f22f86ce7658d1cc316867bef146214327d637ebcb7c7f3bccd6b697c586',
    'Cookie: brw=brwvsdTWxYc6am3PU; AWSALB=Cj+8pXFSqb/+LsQao8xadkHVtQYdCdvRRM23zW64U6Bj+O328lkhm4HSEUdFxsJyPI6tGWoAn9F0WhpfuLFX7cL7BGiU+VAYPb57EGe+VT+DSk423ZF2ucZypcev; AWSALBCORS=Cj+8pXFSqb/+LsQao8xadkHVtQYdCdvRRM23zW64U6Bj+O328lkhm4HSEUdFxsJyPI6tGWoAn9F0WhpfuLFX7cL7BGiU+VAYPb57EGe+VT+DSk423ZF2ucZypcev'
  ),
));

$response = curl_exec($curl);
//$info = curl_getinfo($curl);
//var_dump ($info);
if (curl_errno($curl)) {
    echo 'Curl error: ' . curl_error($curl);
}
curl_close($curl);
echo $response;
