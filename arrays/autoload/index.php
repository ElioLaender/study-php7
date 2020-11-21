<?php

 include_once "autoload.php";

$calc = new Cognisys\Calculadora();
$calcService = new Cognisys\CalculadoraService();
$calcService->chamadaApi(10);
echo $calc->soma(10,5) . "\n";