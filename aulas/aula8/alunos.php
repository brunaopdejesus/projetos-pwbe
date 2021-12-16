<?php

$alunos = [
    "1" => [
        "nome" => "Maria",
        "idade" => 16,
        "nota" => 85
    ],
    "2" => [
        "nome" => "Artur",
        "idade" => 16,
        "nota" => 92
    ],
    "3" => [
        "nome" => "Gustavo",
        "idade" => 16,
        "nota" => 80
    ],
    "4" => [
        "nome" => "Isabela",
        "idade" => 17,
        "nota" => 95
    ]
];

// imprimir na tela a média das notas de todos os alunos
// echo ($alunos["1"]["nota"] + $alunos["2"]["nota"] + $alunos["3"]["nota"] + $alunos["4"]["nota"]) / 4;

$soma = 0;
$quantidadeAlunos = 0;
foreach($alunos as $aluno){
    $soma = $soma + $aluno["nota"];
    $quantidadeAlunos++;
}

$media = $soma / $quantidadeAlunos;

echo "A média da sala é: $media";




// qual o nome do aluno com chave 4
// echo $alunos["4"]["nome"];
// echo "<br>";

// a soma da nota do aluno 1 e 3
// echo $alunos["1"]["nota"] + $alunos["3"]["nota"];