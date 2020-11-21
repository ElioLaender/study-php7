<?php 

// Função simples no php
// Uma função que não faz uso do return, é chamada de subrotina.
function showMessage($message) {
    echo "Your message is $message".PHP_EOL;
};
showMessage("Fala felhos!");

// Função com declaração de tipo
function showProduct(int $cod, float $value): string
{
    return "Product: $cod Value: $value".PHP_EOL;;
}
echo showProduct(4521, 59.99);

/////////////////////////////////////////////////
// Função List: Adicionada a partir do php 7.1, facilita a forma de extrair dados de um array

// EX: 1 Equivalente a desestruturação de array no JS (verificar)
$info = array('Café', 'marrom', 'cafeína');
[$bebida, $cor, $substancia] = $info;
echo "$bebida é $cor e $substancia o faz especial.\n";

// Ex: 2
$info = array('Café', 'marrom', 'cafeína', 'cachorro', 'gato');
list($bebida, $cor, $substancia) = $info; // Utilizando a chamada da função de forma explicita
echo "$bebida é $cor e $substancia o faz especial.\n";
system('clear');
////////////////////////////////////////////////
// Função Unset: Remove uma variável ou indice de um array da memória
echo "ANTES --------------------------- \n"; 
echo implode(",", $info);
echo "\n";
unset($info[1]);
unset($info[2]);
echo "DURANTE --------------------------- \n"; 
echo implode(",", $info);
echo "\n";
// Pode receber mais de um parâmetro também
unset($info[3], $info[4]);
echo "DEPOIS --------------------------- \n"; 
echo implode(",", $info);
echo "\n";
// PS: Note que nas chamadas, os valores são removidos, porém as posições no array permanecem em uma espécie de histórico do index.

//////////////////////////////////////////
// Exemplo estração de dados do array
$idadeList = [21, 23, 19, 25, 30, 41, 18];
list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
echo "Vinicius: $idadeVinicius, João: $idadeJoao, Maria: $idadeMaria \n"; // 21, 23, 19.