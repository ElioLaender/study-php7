<?php

// Formas de instanciar arrays
$myArray1 = array('one', 'two', 'three');
$myArray2 = ['four', 'five', 'six']; // forma mais recente.
$myArray3 = ['White', 'Blue', 'Orage'];
$myArray3[] = 'origin'; // Quando o índice não é especificado, o php adiciona ao final do mesmo.

// Count é a forma de saber a quantiade de elementos no array (Começa contar do 1)
for ($i = 0; $i < count($myArray3); $i++) {
    echo "Color: $myArray3[$i]".PHP_EOL;
}
system('clear');

foreach ($myArray1 as $current) {
    echo $current.PHP_EOL;
}
system('clear');

// foreach extraindo o index do array
foreach ($myArray2 as $key=>$current) {
    echo "Index:$key - $current".PHP_EOL;
}
system('clear');

////////////////////////////////////////////////////////
// Arrays associativos
///////////////////////////////////////////////////////
$person1 = [
    'name' => 'Carluxo',
    'age' => 42
];

$person2 = [
    'name' => 'Anita',
    'age' => 35
];

$person3 = [
    'name' => 'Rosita',
    'age' => 64
];

// Array composto de arrays associativos
$group = [$person1, $person2, $person3];
foreach ($group as $person) {
    echo "Name: " . $person['name'] . " | Age: " . $person['age'] . PHP_EOL;
}
system('clear');

// Array associativo de arrays associativos 
$groupV2 = [
    15478545214 => $person1,
    49185475896 => $person2,
    85145687952 => $person3
];

// Acrescentando um novo valor (QUando não informamos o indice, o php procura o maior índice numérico e incrementa o mesmo, porém caso não reconheça o índice, começa incrementar a partir do zero)
$groupV2[] = [
    'name' => 'Luiz Inácio',
    'age' => 74
];

foreach ($groupV2 as $cpfCnpj => $person) {
    // Dentro de uma string com aspas duplas, não é necessário acessar valores associativos com o uso de aspas $person['name']
    echo "key: $cpfCnpj Name $person[name] | Age: $person[age]" . PHP_EOL; 
    // Também é possível envolver os calores com chaves, de forma a permitir operações, caso necessário.
    // Mais sobre: https://www.php.net/manual/en/language.types.string.php
    echo "key: $cpfCnpj Name {$person['name']} | Age: {$person['age']}" . PHP_EOL; 

}
///////////////////////////////////////////////////////
system('clear');

// PS: O php só aceita valore do tipo numérico inteiro e strings.
$associations = [
    1 => 'inteiro',
    1.1 => 'decimal', // será convertido int, sendo decimal equivale a 1.
    '1' => 'string', // será convertido para int
    true => 'booleano' // será convertido para int, sendo true equivale a 1 
];
foreach ($associations as $key => $association) {
    echo "Key: $key Assoc: $association" . PHP_EOL; 
}

// No exemplo demonstrado acima, será exibido apenas o conteúdo da última posição, pois o php irá desconsiderar os index repetidos. 
// Documentação dos arrays: https://www.php.net/manual/pt_BR/language.types.array.php
// Comparações feitas no php: https://www.php.net/manual/pt_BR/types.comparisons.php
// Estudar mais sobre hashTables. Citação Alura: O array no PHP não é um array de verdade, como conhecemos nas demais linguagens. Internamente, os arrays são armazenados como HashTables.