<?php

if (isset($_POST["acao"])) {
    
    $cidadeOrigem = $_POST["cidade-de-origem"];
    $cidadeDestino = $_POST["cidade-de-destino"];
    $distancia = $_POST["distancia"];
    $quantidadePedagios = $_POST["quantidade-de-pedagios"];

    $valorAPagar = ($distancia * 6.0) + ($quantidadePedagios * 9.40);

    echo '<div style="font-size:30px;">' . 
    "A viagem de $cidadeOrigem para $cidadeDestino 
    irá custar R$$valorAPagar." . '</div>';

} else {

    echo '<div style="font-size:30px;">' . 
    "Você não enviou as informações corretamente." . '</div>';

}

