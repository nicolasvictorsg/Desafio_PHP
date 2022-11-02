<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangulo</title>
</head>
<body>
<h2>Classificador de Triangulo</h2>
    <?php
    
    $direito = $_GET["v1"];
    $esquerdo = $_GET["v2"];
    $baixo = $_GET["v3"];

    if (($direito == $esquerdo && $esquerdo == $baixo)){
        echo "Triangulo Equilatero</br>";
    } else if (($direito == $esquerdo) && ($esquerdo != $baixo)){
        echo "Triangulo Isosceles</br>";
    } else {
        echo "Triangulo Escaleno</br>";
    }

    
    ?>
    </br>
    <a href="triangulo">Voltar</a>

</body>
</html>