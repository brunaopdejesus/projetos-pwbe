<?php

    //CRIANDO UMA SESSÃO:
    session_start();

    //VERIFICANDO O ID DA SESSÃO:
    echo session_id();

    //CRIANDO VARIÁVEIS DE SESSÃO:
    $_SESSION["nome"] = "CRISTIANO CORREA DE MORAES";

    $nome = "CRISTIANO CORREA DE MORAES";
    echo $nome;

?>