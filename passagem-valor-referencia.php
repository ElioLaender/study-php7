<?php


// Passaagem por referência, é quando passamos o endereço de memória da variável em propriamente dita.
// A passagem por referência é definida pelo &$nomeParametro, ex: 
$value1 = 1;
function incrementReferenceValue(int &$valueParam) {
    $valueParam++;
}
incrementReferenceValue($value1);
echo "Teste 1 $value1".PHP_EOL;


// Passagem por valor, é quando passamos o valor da variável, sendo que as alterações realizadas não afetarão a variável. 
// Passagem por valor é mais indicado, pois não dá para as funções o poder de alterar as variáveis diretamente, podendo dificultar a manutenção.
$value2 = 1;
function incrementValue(int $value) {
    $value++;
}
incrementValue($value2);
echo "Teste 2 $value2".PHP_EOL;