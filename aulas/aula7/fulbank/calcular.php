<?php

    if(isset($_POST["nome"]) && isset($_POST["salario"]) && isset($_POST["genero"])
    && isset($_POST["cargo"])) {

        $nome = $_POST["nome"];
        $salario = $_POST["salario"];
        $genero = $_POST["genero"];
        $cargo = $_POST["cargo"];

        // $salarioNovo = 0;

        // if($salario > 5000) {
        //     $salarioNovo = $salario * 1.1; 
        // } else {
        //     $salarioNovo = $salario * 1.2; 
        // }

        // 1.1 = 110% = 110/100
        // 1.2 = 120% = 120/100

        // Ternário
        $salarioNovo = $salario > 5000 ? $salario * 1.1 : $salario * 1.2;

    } else {
        die("<main>Você não enviou os dados.</main>");
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calcular.php">
    <link rel="stylesheet" href="style.css">
    <title>Calcular Salário</title>
</head>
<body>
    <main>
        <p>
            <?= $genero === "M" ? "O" : ($genero === "F" ? "A" : "") ?>

            <?= $nome ?> passará a receber R$
            <?=number_format($salarioNovo, 2, ",", ".") ?>
            no cargo de <?= $cargo ?>.
        </p>

    </main>
</body>
</html>