<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome</title>
</head>
<body>
<h2>Calculudora</h2>
    <?php

    $valor1 = $_GET["v1"];
    $valor2 = $_GET["v2"];
    echo "A soma entre $valor1 e $valor2 é: ", $valor1 + $valor2 ;
    echo "</br>A subtracao entre $valor1 e $valor2 é: ", $valor1 - $valor2;
    echo "</br>A multiplicacao entre $valor1 e $valor2 é: ", $valor1 * $valor2;
    echo "</br>A divisao entre $valor1 e $valor2 é: ", $valor1 / $valor2;

    ?>
    </br>
    <a href="calculadora.php">Voltar</a>

</body>
</html>