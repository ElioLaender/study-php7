<?php

$saldos = [
    2500,
    3000,
    1000,
    3700,
    9000
];

// var_dump (Exibe a estrutura do array)
var_dump($saldos);

// sort (Ordena o array com base nos tipos de dados, do menor para o maior)
sort($saldos);
var_dump($saldos);

system('clear');
########################################
// Explode (converte uma string em array)
$nomes = "Giovanni, João, Maria, Pedro, Carlos";
$arrNomes = explode(',', $nomes); // recebe qual o delimitador que irá definir as posições e a string. 
var_dump($arrNomes);

// Implode (converte uma array em string)
$nomesString = implode(',', $arrNomes); // Recebe a string e a vírgula que identifica as posições. 
var_dump($nomesString);

system('clear');
########################################
// array_search (recebe um valor e um array, retorna o índice do valor no array caso exista)

$nomes = ['Giovanni', 'João', 'Maria', 'Pedro', 'Carlos'];
$posicao = array_search("Maria", $nomes, true); // O terceiro parâmetro é para a conversão ser strita exemplo diferenciar a pesquisa de 120 e '120', por exemplo.
echo "$posicao \n";

// Remover um item do array
$nomes = ['Giovanni', 'João', 'Maria', 'Pedro', 'Carlos'];
unset($nomes[$posicao]); // Recebe o array com o indice a ser removido
var_dump($nomes);


########################################
// Type juggling: É o cast interno que o php faz com as variáveis, ex: Caso uma posição não é encontrada no array_search, é retornado um false, e quano passamos a
// variável posição para o array nomes, o valor false é convertido em 0, que seria o equivalente numérico de um valor falso. Devemos tomar cuidado com os tipos
// passados e se atentar para essas conversões. 




