<?php
/*
Neste vídeo, pela primeira vez, habilitamos uma nova extensão do PHP. Extensões são “partes” da linguagem que podem ser instaladas separadamente, nos trazendo funcionalidades extras.
A extensão utilizada foi a mbstring, que pode ser conferida com detalhes neste link https://www.php.net/manual/pt_BR/book.mbstring.php
Ela trabalha com caracteres que precisam de mais de um byte para serem representados, por exemplo, caracteres acentuados.
A função strtoupper não colocaria letras com acento em maiúsculo, enquanto a mb_strtoupper consegue fazer isso sem problemas.
Sempre que possível, utilize as funções mb_* para manipular suas strings.
*/

//TODO: Adicionar exemplo.