<?php

/*
    O operador lógico &&, tem precedência sobre o operador ||. 
    Partindo deste ponto, devemos tomar cuidado com algumas verificações lógicas, conforme o exemplo abaixo:
*/
echo (true || false && false && true) ? 'TRUE': 'FALSE';
echo "\n";
echo ((true || false) && false && true) ? 'TRUE': 'FALSE';
echo "\n";
/*
    Note que, caso seja necessário alterar a ordem de precedência, podemos utilizar os parênteses
    para garantir que o || 'ou' terá precedência na verificação.  
*/
