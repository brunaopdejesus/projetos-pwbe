<?php

$frutas = [
    "Melancia",
    "Uva",
    "Morango",
    "Abacaxi",
    "Bergamota",
    "Carambola",
    "Laranja",
    "Kiwi",
    "Tomate",
    "Pêssego",
    "Maçã",
    "Ameixa"
];

$frutaAProcurar = "Laranja";

foreach ($frutas as $chave => $fruta) {
    if ($fruta == $frutaAProcurar) {
        echo "Fruta deletada: $fruta";
        unset($frutas[$chave]);
        $encontrei = true;
    } 
}

if(!$encontrei) {
    echo "Fruta não encontrada";
}

print_r($frutas);
