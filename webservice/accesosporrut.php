<?php 

$client = new SoapClient("http://sebastian.cl/isw-ws/wsISW?wsdl");
$param=array('rut' => $_GET["rut"]);

$response = $client->getAccesosPorRut($param);

var_dump($response);

?> 

