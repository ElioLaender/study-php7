<?php

$name = 'Élio José';
$age = 30;
$heigth = 1.69;

// variáveis e caracteres especiais são interpretados apenas com aspas duplas. 
echo ' ('.gettype($name).')Name: ' .$name. ' - ('.gettype($age).')Age: ' .$age. ' - ('.gettype($heigth).')Heigth: ' .$heigth . "\n"; 

// Utilizando aspas duplas, não é necessário concatenar variáveis, apenas se for chamada de função.
// PHP_EOL retorna a quebra de linha de acordo com o sistema operacional.
echo " Name: $name Age: $age Heigth: $heigth" . PHP_EOL;


// PS: Os operadores (<, >, ==, !=) possuem a mesma precedência, sendo executados da esquerda para direita. 





