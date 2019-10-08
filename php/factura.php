<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');


header("Content-Type: application/json");


$data = json_decode(file_get_contents("php://input"));


$rfc = $data->rfc;
    $razon_social = $data->razon_social;
    $direccion = $data->direccion;
    $municipio = $data->municipio;
    $colonia = $data->colonia;
    $estado = $data->estado;
    $cp = $data->codigo_postal;
    $email = $data->email;
    $metodo= $data->metodo;
    $monto= $dat->monto;
    $pase= $data->Nsalida;




$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://factura.com/api/v1/clients/".$rfc);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "F-PLUGIN: " . '9d4095c8f7ed5785cb14c0e3b033eeb8252416ed',
    "F-Api-Key: ".'JDJ5JDEwJHZBSVhQNFdONDFod3lWeVBqUWFzYU9yVkFrNGZHZU5lMmI3bnVxTFNSZ2JOQkJCMHk2Zy9x',
    "F-Secret-Key: " .'JDJ5JDEwJGxITDJ4NEdaY1c3Ljk3bnZJeVgxWS5uV3lUZ1oxVWc4Ti9USjhjRnZWbkxHdmRmbzFnUFpH'
));
$response = curl_exec($ch);
curl_close($ch);

$response2= json_decode($response);

if ($response2->status=='success') {
    
}


else{


    $ch = curl_init();
$fields = [
 "nombre" => $razon_social,
 "apellidos" => "",
 "email" => $email,
 "email2" => $email,
 "email3" => $email,
 "telefono" => "",
 "razons" => $razon_social,
 "rfc" => $rfc,
 "calle" => $direccion,
 "numero_exterior" => 1,
 "numero_interior" => "",
 "codpos" => $cp,
 "colonia" => $colonia,
 "estado" => $estado,
 "ciudad" => $ciudad,
 "delegacion" => ""
];

$jsonfield = json_encode($fields);

curl_setopt($ch, CURLOPT_URL, "https://factura.com/api/v1/clients/create");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonfield);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "F-PLUGIN: " . '9d4095c8f7ed5785cb14c0e3b033eeb8252416ed',
    "F-Api-Key: ". 'JDJ5JDEwJHZBSVhQNFdONDFod3lWeVBqUWFzYU9yVkFrNGZHZU5lMmI3bnVxTFNSZ2JOQkJCMHk2Zy9x',
    "F-Secret-Key: " . 'JDJ5JDEwJGxITDJ4NEdaY1c3Ljk3bnZJeVgxWS5uV3lUZ1oxVWc4Ti9USjhjRnZWbkxHdmRmbzFnUFpH'
));

$response = curl_exec($ch);



curl_close($ch);
}

$response2= json_decode($response);





for ($x = 1; $x <= 1; $x++) {
    $Conceptos[] = [
        'ClaveProdServ' => '81112107',
        'Cantidad' => '1',
        'ClaveUnidad' => 'E48',
        'Unidad' => 'Unidad de servicio',
        'ValorUnitario' => '100',
        'Descripcion' => 'Desarrollo a la medida',
        'Descuento' => '0',
        'Impuestos' => [
            'Traslados' => [
                ['Base' => '100', 'Impuesto' => '002', 'TipoFactor' => 'Tasa', 'TasaOCuota' => '0.160000', 'Importe' => '16'],
            ]
        ],
    ];
}

$ch = curl_init();
$fields = [
    "Receptor" => ["UID" => $response2->Data->UID],
    "TipoDocumento" => "factura",
    "UsoCFDI" => "P01",
    "Redondeo" => 2,
    "Conceptos" => $Conceptos,
    "FormaPago" => "01",
    "MetodoPago" => 'PUE',
    "Moneda" => "MXN",
    "CondicionesDePago" => "Pago en una sola exhibición",
    "Serie" => 254382,
    "EnviarCorreo" => 'true',
    "InvoiceComments" => ""
];

$jsonfield = json_encode($fields);



curl_setopt($ch, CURLOPT_URL, "https://factura.com/api/v3/cfdi33/create");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonfield);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "F-PLUGIN: " . '9d4095c8f7ed5785cb14c0e3b033eeb8252416ed',
    "F-API-KEY: ". 'JDJ5JDEwJHZBSVhQNFdONDFod3lWeVBqUWFzYU9yVkFrNGZHZU5lMmI3bnVxTFNSZ2JOQkJCMHk2Zy9x',
    "F-SECRET-KEY: " . 'JDJ5JDEwJGxITDJ4NEdaY1c3Ljk3bnZJeVgxWS5uV3lUZ1oxVWc4Ti9USjhjRnZWbkxHdmRmbzFnUFpH'
));

$response = curl_exec($ch);


curl_close($ch);


$response2= json_decode($response);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://factura.com/api/v3/cfdi33/".$response2->uid."/email");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   "Content-Type: application/json",
    "F-PLUGIN: " . '9d4095c8f7ed5785cb14c0e3b033eeb8252416ed',
    "F-Api-Key: ". 'JDJ5JDEwJHZBSVhQNFdONDFod3lWeVBqUWFzYU9yVkFrNGZHZU5lMmI3bnVxTFNSZ2JOQkJCMHk2Zy9x',
    "F-Secret-Key: " . 'JDJ5JDEwJGxITDJ4NEdaY1c3Ljk3bnZJeVgxWS5uV3lUZ1oxVWc4Ti9USjhjRnZWbkxHdmRmbzFnUFpH'
));

$response = curl_exec($ch);


return die($response);

curl_close($ch);
















/*


$response = array();

    $response = array(
        'status' => true,
        'message' => 'Success',
        'data' => $data
    );


echo json_encode($response);


?>


*/

