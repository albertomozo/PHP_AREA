<?php
/*
  @author parzibyte
*/
header('Content-Type: application/json');
echo json_encode(
    [
        "metodo" => $_SERVER["REQUEST_METHOD"],
        "encabezados" => getallheaders(),
        "datos" => file_get_contents("php://input"),  // para recoger los metodos que no sean GET Y/O POST
        "post" => $_POST,
        "cadena_consulta" => $_GET
    ],
    JSON_PRETTY_PRINT
);