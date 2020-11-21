<?php

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
  $correntistasNaoPagantes = [
    "Luis",
    "Luisa",
    "Rafael",
  ];

  // Extrair a diferença entre dois arrays
  $correntidasPagantes = array_diff($correntistas, $correntistasNaoPagantes); // Recebe dois arrays e retorna os valores diferentes entre os arrays
  var_dump($correntidasPagantes);
  system('clear');

  ###############################################################

  $correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
  $saldos = [
     2500,
     3000,
     4400,
     1000,
     8700,
     9000
  ];

// Obter um novo array, a partir da concatenação de dois arrays
$arrCorrentistasSaldo = array_merge($correntistas, $saldos);
var_dump($arrCorrentistasSaldo); 
/*
array(12) {
  [0]=>
  string(8) "Giovanni"
  [1]=>
  string(5) "João"
  [2]=>
  string(5) "Maria"
  [3]=>
  string(4) "Luis"
  [4]=>
  string(5) "Luisa"
  [5]=>
  string(6) "Rafael"
  [6]=>
  int(2500)
  [7]=>
  int(3000)
  [8]=>
  int(4400)
  [9]=>
  int(1000)
  [10]=>
  int(8700)
  [11]=>
  int(9000)
}
*/

// Obter um array associativo através da junção de dois arrays. O primeiro é o index e o segundo são os valores
$arrCorrentistasSaldoAssoc = array_combine($correntistas, $saldos);
var_dump($arrCorrentistasSaldoAssoc);
/*
array(6) {
  ["Giovanni"]=>
  int(2500)
  ["João"]=>
  int(3000)
  ["Maria"]=>
  int(4400)
  ["Luis"]=>
  int(1000)
  ["Luisa"]=>
  int(8700)
  ["Rafael"]=>
  int(9000)
}
*/
system('clear');
###############################################################
// Verificar se um index existe em um array
if (array_key_exists('Luisa', $arrCorrentistasSaldoAssoc)) {
  echo "Existe\n";
  echo $arrCorrentistasSaldoAssoc['Luisa'] . "\n";
} else {
  echo "Não encontrado\n";
}