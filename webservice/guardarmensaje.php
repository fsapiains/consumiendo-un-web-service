<?php
$client = new SoapClient("http://sebastian.cl/isw-ws/wsISW?wsdl");
$param1= array('mensaje' => $_GET["mensaje"] ,'rut' => $_GET["rut"]);
//$param1= array('mensaje' => 'hola, como estan, este curso es de ingenieria de software');

$response = $client->guardarMensaje($param1);

var_dump($response);

?>