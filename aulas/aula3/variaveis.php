<?php

// php tem tipagem dinâmica, logo, não é necessário declarar o tipo da variável
$cidade = "Jandira";

// função que retorna o tipo da variável
echo "Aqui a cidade é do tipo: " . gettype($cidade);

$idade = 57;
$qualquerCoisa = true;
$cidade = false;

echo "<br><br>";
echo "Aqui embaixo a cidade é do tipo: " . gettype($cidade);