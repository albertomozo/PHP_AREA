<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.themoviedb.org/3/search/person?query=almodovar&include_adult=false&language=es&page=1',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_SSL_VERIFYPEER => false, 
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5OGZlZTM0N2I5MWRhODM5MzJlYThiOWRhYTBlZGVjZSIsInN1YiI6IjYwODJmZTgyMDFiMWNhMDA0MWVjMmUyMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.FdoxXdJncEQQ24BduFOAz-P3gt6I7pPd6s7vWc8-NrM'
  ),
));

$response = curl_exec($curl);


curl_close($curl);
echo $response;

echo '<hr>';
$token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlYzllNWJiNjU3NTVlNWE5Njg4OWFkNzgxMjcyZGM2NSIsInN1YiI6IjY0OTQ0ZTQ4NmI1ZmMyMDE0YzEzNWZlMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.6lAqNltJuUrYauVDn1qLgvsk_N1QiGFiIfnSrCu3D88';
$url = 'https://api.themoviedb.org/3/search/person?query=almodovar&include_adult=false&language=es&page=1';



            $curl = curl_init();

            curl_setopt($curl, CURLOPT_URL, $url);

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Deshabilitar verificación SSL

            curl_setopt($curl, CURLOPT_HTTPHEADER, array(

                'Authorization: Bearer ' . $token,

                'Accept: application/json'

            ));

            $response = curl_exec($curl);

            if (curl_errno($curl)) {

                $error_message = curl_error($curl);

                echo $error_message;

            } else {

                $results = json_decode($response, false);

                 print_r($results);

            }

            curl_close($curl);