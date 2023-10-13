<?php
$curl = curl_init();
$data = '"records": [ { "fields": { "Nombre": "Peras" } } ] '; // Remove json_encode() from here
$data = '{
    "records": [
      {
        "fields": {
          "Nombre": "Gazta",
          "Suministrador": "Aldanondo",
          "Precio": 15,
          "Descripción": "Ahumado y cremoso",
          "Link": "http://aldanondo.es",
          "tipo": [
            "lacteos"
          ]
        }
      },
      {
        "fields": {
          "Nombre": "Piparrak",
          "Suministrador": "Zubelzu",
          "Precio": 5,
          "Descripción": "El picante justo",
          "Link": "https://zubelzupiparrak.com",
          "tipo": [
            "verduras"
          ]
        }
      }
    ]
  }';
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.airtable.com/v0/appLLNRwDQ9NC4BOj/Productos',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer patGjhnAOT7uhu2qp.d8843a4fd028a2bb395378867f2dbd8c82b9530318cfb7c086708b338d682a3e',
    'Cookie: brw=brwvsdTWxYc6am3PU; AWSALB=Cj+8pXFSqb/+LsQao8xadkHVtQYdCdvRRM23zW64U6Bj+O328lkhm4HSEUdFxsJyPI6tGWoAn9F0WhpfuLFX7cL7BGiU+VAYPb57EGe+VT+DSk423ZF2ucZypcev; AWSALBCORS=Cj+8pXFSqb/+LsQao8xadkHVtQYdCdvRRM23zW64U6Bj+O328lkhm4HSEUdFxsJyPI6tGWoAn9F0WhpfuLFX7cL7BGiU+VAYPb57EGe+VT+DSk423ZF2ucZypcev'
  ),
  CURLOPT_POSTFIELDS => $data,
));

$response = curl_exec($curl);
echo $response;
if (curl_errno($curl)) {
    echo 'Curl error: ' . curl_error($curl);
}
curl_close($curl);
?>