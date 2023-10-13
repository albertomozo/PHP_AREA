<?php
include '00-config.php';
if ($_POST){
  $data = '{ "records": [{ "fields": {';
   
      
       
  foreach ($_POST as $key => $valor){
      if ($key == 'Precio' ){
        $data .= '"'.$key . '":'.$valor.',';
      } else {
        $data .= '"'.$key . '":"'.$valor.'",';
    }
  }
  $data = substr($data,0,strlen($data)-1);
  $data .= ' }
  }]}';

echo $data;



$curl = curl_init();
/* $data = '"records": [ { "fields": { "Nombre": "Peras" } } ] '; // Remove json_encode() from here
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
  }'; */
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
    "Authorization: Bearer $key_productos", 
  ),
  CURLOPT_POSTFIELDS => $data,
));

$response = curl_exec($curl);
echo $response;


if (curl_errno($curl)) {
    echo 'Curl error: ' . curl_error($curl);
}
curl_close($curl);
} else  {
?>
  <form method="post" action="">
    <input type="text" name="Nombre" placeholder="Nombre Producto"><br>
    <input type="text" name="Descripción" placeholder="Descripcion"><br>
    <input type="text" name="Suministrador" placeholder="Suministrador"><br>
    <input type="number" name="Precio" placeholder="Precio"><br>
    <input type="link" name="Link" placeholder="link"><br>
  <!-- tipo ?? -->

    <input type="submit" value = "enviar" >

  </form>
<?php 
}
?>