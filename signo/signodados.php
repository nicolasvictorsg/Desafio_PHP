<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signo</title>
</head>
<body>

    <?php
     $nome = $_POST["nome"];
     $dia = $_POST["dia"];
     $mes = $_POST["mes"];
     $ano = $_POST["ano"];

     $anos = 2022 - $ano;

    if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 20)){
        $signo = "Aries";
    } else if (($mes == 4 && $dia >= 21) || ($mes == 5 && $dia <= 20)){
        $signo = "Touro";
    } else if (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20)){
        $signo = "Gemeos";
    } else if (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22)){
        $signo = "Cancer";
    } else if (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)){
        $signo = "Leão";
    } else if (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22)){
        $signo = "Virgem";
    } else if (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)){
        $signo = "Libra";
    } else if (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)){
        $signo = "Escorpiao";
    } else if (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)){
        $signo = "Sargitario";
    } else if (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 20)){
        $signo = "Capricornio";
    } else if (($mes == 1 && $dia >= 21) || ($mes == 2 && $dia <= 19)){
        $signo = "Aquario";
    } else if (($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20)){
        $signo = "Peixes";
    } 

    echo "Olá, $nome. Seja bem-vindo(a)!</br>Você tem atualmente $anos anos de idade.</br> De acordo com sua data de nascimento seu signo é $signo.</br>";
    echo "Antes de tudo, FÉ. Depois de tudo, GRATIDÃO!";
    ?>
    
    <a href="signo">Voltar</a>

</body>
</html>