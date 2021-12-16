<?php

function calcularMedia(array $turma) {
    $soma = 0;
        foreach($turma as $aluno){
        $soma = $soma + $aluno["nota"];
    }

    $media = $soma / count($turma);

    return $media;
}

function alunoComMaiorNota(array $turma) {
    $melhorAluno = null;
    foreach($turma as $aluno) {
        if($melhorAluno == null) {
            $melhorAluno = $aluno;
        } elseif($aluno["nota"] > $melhorAluno["nota"]) {
            $melhorAluno = $aluno;
        }
    } return $melhorAluno;
}

//  & = faz o vetor ser passado por referência
//  passagem por referência e passagem por valor
function alterarNotaAluno(array &$turma, $nome, $novaNota) {
    
    foreach($turma as $chave => $aluno) {
        if($aluno['nome'] == $nome) {
            $turma[$chave]['nota'] = $novaNota;
            return $turma;
        }
    }
}

function fecharNotaAlunos(array &$turma) {
    foreach($turma as $chave => $aluno) {
        if($aluno['nota'] >= 50) {
            $turma[$chave]["situação"] = "aprovado";
        } else {
            $turma[$chave]["situação"] = "reprovado";
        }
    }
}


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
$media = calcularMedia($alunos);

echo "A média da sala é: $media";

$alunosTurmaB = [
    "1" => [
        "nome" => "Kelly",
        "idade" => 17,
        "nota" => 100
    ],
    "2" => [
        "nome" => "Paulo",
        "idade" => 16,
        "nota" => 85
    ],
    "3" => [
        "nome" => "Gabriel",
        "idade" => 16,
        "nota" => 82
    ],
    "4" => [
        "nome" => "Mateus",
        "idade" => 16,
        "nota" => 83
    ],
    "5" => [
        "nome" => "Bruna",
        "idade" => 16,
        "nota" => 90
    ]
];

    $mediaTurmaB = calcularMedia($alunosTurmaB);
    echo "<br> A média dos aluos da turma é: $mediaTurmaB";

    $melhorAluno = alunoComMaiorNota($alunos);
    echo "<br> Melhor estudante é " . $melhorAluno['nome'] . " com a nota " . $melhorAluno["nota"] . ".";

    $melhorAluno = alunoComMaiorNota($alunosTurmaB);
    echo "<br> Melhor estudante da turma B é " . $melhorAluno['nome'] . " com a nota " . $melhorAluno["nota"] . ".";

    echo "<br><br>";

    alterarNotaAluno($alunos, "Gustavo", 45);

    fecharNotaAlunos($alunos);

    print_r($alunos);

    
    // escreva uma função que inclua a situação de todos os alunos
    // caso a nota seja menor que 50 situação = reprovado
    // caso a nota seja maior ou igual a 50 situação = aprovado

