<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome</title>
</head>
<body>
<h2>Medidor de IMC</h2>
    <?php
    
    $nome = $_POST["nome"];
    $altura = $_POST["alt"];
    $peso = $_POST["peso"];
    $imc = (round($peso / ($altura * $altura),2));
 
     echo "Sr(a), $nome. Seu IMC é $imc .";
 
     if ($imc <= 18.5) {
         echo "Seu índice aponta: Abaixo do peso normal!</br>Cuide sempre da sua saúde. Alimente-se melhor e pratique esportes.</br>";
     } else if ($imc > 18.5 && $imc <= 25) {
         echo "Seu índice aponta: Peso normal!</br>Cuide sempre da sua saúde. Continue assim, Parábens!</br>";
     } else if ($imc > 25 && $imc <= 30) {
         echo "Seu índice aponta: Acima do peso normal!</br>Cuide sempre da sua saúde. Tenha equilibrio entre alimentação e exrcício físico, ainda é a melhor opção para uma vida saúdavel.</br>";
     } else {
         echo"</br>Seu índice aponta: Obesidade!</br>Cuide sempre da sua saúde. Procure um médico especialista.";
     }
     
     ?>
    </br>
    <a href="IMC.php">Voltar</a>

</body>
</html>