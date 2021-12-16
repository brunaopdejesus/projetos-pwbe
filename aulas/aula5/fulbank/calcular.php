<?php

if (isset($_POST["acao"])) {

    $consumoHora = $_POST["consumo-por-hora"];
    $nomeCliente = $_POST["nome-cliente"];
    $endereco = $_POST["endereco"];

} else {

    echo "Você não enviou as informações corretamente.";
    die;

}

if ($consumoHora > 120) {

    $valorAlto = ($consumoHora * 0.42);

    echo '<div style="font-size:35px;">' . "Conta de luz de " . strtoupper($nomeCliente) . "." . '</div>' . "<br>";
    echo '<div style="font-size:30px;">' . "$endereco." . '</div>';
    echo '<div style="color:red;font-size:30px;">' . "Consumo: " . "$consumoHora" . "kWh." . '</div>' . "<br>";
    echo '<div style="font-size:30px;">' . "Valor a pagar: " . "R$$valorAlto." . '</div>' . "<br>";

} else {

    $valorBaixo = ($consumoHora * 0.32);

    echo '<div style="font-size:35px;">' . "Conta de luz de $nomeCliente." . '</div>' . "<br>";
    echo '<div style="font-size:30px;">' . "$endereco." . '</div>';
    echo '<div style="color:green;font-size:30px;">' . "Consumo: " . "$consumoHora" . "kWh." . '</div>' . "<br>";
    echo '<div style="font-size:30px;">' . "Valor a pagar: " . "R$$valorBaixo." . '</div>' . "<br>";
    echo '<div style="font-size:30px;">' . "Obrigada por economizar!";
}

