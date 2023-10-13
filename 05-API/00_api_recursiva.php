<?php
/* chat gpt */
function getValuesRecursively($data) {
    $values = array();

    if (is_array($data) || is_object($data)) {
        foreach ($data as $key => $value) {
            if (is_array($value) || is_object($value)) {
                // Recursivamente obtener los valores si es un array u objeto
                $values = array_merge($values, getValuesRecursively($value));
            } else {
                // Agregar el valor si no es un array u objeto
                $values[] = $value;
            }
        }
    }

    return $values;
}

// Ejemplo de uso
// Supongamos que $apiResponse contiene la respuesta de la API en formato JSON
$apiResponse = '{
    "key1": "value1",
    "key2": {
        "subkey1": "subvalue1",
        "subkey2": "subvalue2"
    },
    "key3": ["array_value1", "array_value2"],
    "key4": {
        "subkey3": {
            "subsubkey1": "subsubvalue1"
        }
    }
}';

$data = json_decode($apiResponse, true);

// Obtener todos los valores en cualquier nivel de anidamiento
$result = getValuesRecursively($data);

// Imprimir los valores obtenidos
print_r($result);
