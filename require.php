<?php

/* Diferença entre include e require:
    Caso o arquivo a ser incluído não seja encontrado, require para a execução do programa enquanto include permite que continue.
    Caso o arquivo não seja encontrado, include irá lançar um aviso (E_WARNING) enquanto require irá lançar um erro e não permitirá a execução do programa. 

    Documentação:
    https://www.php.net/manual/en/function.include.php
    https://www.php.net/manual/en/function.require.php

    Documentação níveis de erros: https://www.php.net/manual/en/errorfunc.constants.php
*/

