<?php

if (isset($_POST["acao"])) {
    $nome=$_POST["nome"];
    $nota1=$_POST["nota1"];
    $nota2=$_POST["nota2"];
    $nota3=$_POST["nota3"];

    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "$nome, sua média é " . number_format($media,1) . ".";

} else {
    echo "Não foi possível calcular.";
}

echo "<br>";

if ($media > 6) {
    print "<script> document.bgColor='bisque'</script>";
    echo '<div style="color:green">' . "Você foi aprovado(a)!" . '</div>';
    
} elseif ($media > 4 && $media < 6) {
    print "<script> document.bgColor='bisque'</script>";
    echo '<div style="color:yellow">' . "Você está de recuperação." . '</div>';

} else {
    print "<script> document.bgColor='bisque'</script>";
    echo '<div style="color:red">' . "Você foi reprovado(a)." . '</div>';
}

?>