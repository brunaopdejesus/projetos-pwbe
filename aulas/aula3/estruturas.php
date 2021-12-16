<?php
// OPERADORES LÓGICOS:
//     != diferente
//     == igual
//     && e
//     ! negação
//     || ou

$linguagemPreferida = "java";
$sabePOO = true;

//estrutura condicional if
if ($linguagemPreferida == "java" && $sabePOO == true){
    echo "Você é um javeiro, Celso amou! ";
}else{
    echo "Você não é javeiro, Celso chora... ";
}

echo "<br><br>";

$opcao = 2;

// escolha
switch($opcao) {
    case 1:
        echo "Você escolheu a opção 1.";
        break;

    case 2:
        echo "Você escolheu a opção 2.";
        break;

    case 3:
        echo "Você escolheu a opção 3.";
        break;

    default: 
        echo "Você não escolheu nenhuma opção válida...";
        break;
}


$salarioEstagiario = 1200;
$salarioJunior = 2200;
$salarioPleno = 4500;
$salarioSenior = 10000;

$mediaSalarial = ($salarioEstagiario 
+ $salarioJunior + $salarioPleno
+ $salarioSenior) / 4;

echo "<br><br>";
echo "A média salarial é: $mediaSalarial.";
echo "<br>";


// estrutura de repetição
$cont = 0;

while($cont <= 5) {
    echo "<br>";
    echo "O cont é: $cont";
    $cont++;
}

echo "<br>";

for($cont = 0; $cont <= 5; $cont++) {
    echo "<br>";
    echo "O cont é: $cont";
}

echo "<br><br>";

// do while: faça enquanto
// o DO é executado ao menos uma vez antes do while
$cont = 0;
do {
    echo "O cont é: $cont <br>";
} while($cont > 0);

echo "<br><br>";


