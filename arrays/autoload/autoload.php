<?php
// Namespace é um nome dado para nossos arquivos, equivalente ao package do Java. Dessa forma, podemos ter arquivos com o mesmo nome, desde que em namespaces diferentes. 
// Exemplo do de uso do autoload
// A psr4, responsável por parinizar o autoload, define que as classes pertencente a um namespace devem estar juntas em um diretório com o mesmo nome setado no namespace. 
spl_autoload_register(
    // Recebe o nome dos namespaces em forma de string
    function (String $namespaceClasse): void {
        $caminho = "/src"; // Todas os pacotes de namespaces serão chamados a partir desta pasta
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse); // Pega o caminho do arquivo e ajusta de acordo com o sistema sistema operacional
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php"; // Faz um include do arquivo registrado, o @ é para suprimir mensagens de erro. (getcwd() - obtem o diretório atual.)
    }
);
