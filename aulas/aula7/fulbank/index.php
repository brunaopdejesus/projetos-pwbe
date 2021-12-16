<?php

//  declarando um vetor
$cargos = [
    "Gerente de TI",
    "Analista de TI",
    "Assistente de TI",
    "Diretor de TI"
];

// adicionando um elemento no vetor
$cargos[] = "DevOps";
$cargos[] = "Designer UI/UX";
$cargos[] = "QA";
$cargos[] = "Engenheiro de Software";
$cargos[] = "Arquiteto";
$cargos[] = "DBA";
$cargos[] = "Analista de Sistemas";

// excluindo uma posição do vetor
// unset($cargos[0]);

// imprimindo vetor na tela
// print_r($cargos);

// die;

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="calcular.php">
    <title>Conta de Luz</title>
</head>
<body>
    <form method="POST" action="./calcular.php">
        <h1>Aumento de Funcionários</h1>
        <label for="nome">Nome:</label>
        <input id="nome" name="nome" required="true"/>

        <label for="salario">Salário (R$):</label>
        <input id="salario" name="salario" required="true"/>

        <label for="genero">Gênero:</label>
        <div class="input-radio">
            <!-- NAME agrupa o radio grupo -->
            <input type="radio" id="masculino" name="genero" value="M" required="true"/>
            <label for="masculino">Masculino</label>
        </div>

        <div class="input-radio">
            <input type="radio" id="feminino" name="genero" value="F" required="true"/>
            <label for="feminino">Feminino</label>
        </div>
            
        <div class="input-radio" style="margin-bottom: 10px;">
            <input type="radio" id="outro" name="genero" value="O" required="true"/>
            <label for="outro">Outro</label>
        </div>


        <label for="cargo">Cargo:</label>
        <select name="cargo" id="cargo">
            <option>Selecione...</option>
            <?php
            // foreach vai criar um option até o final do array
                // foreach($cargos as $cargo) {
                //     echo "<option>$cargo</option>";
                // }
                    $tam = count($cargos);
                    $contador = 0;
                    while($contador < $tam) {
                        echo "<option>" . $cargos[$contador] . "</option>";
                        $contador++;
                    }

            ?>
        </select>

        <button name="acao">Calcular</button>

    </form>
</body>
</html>