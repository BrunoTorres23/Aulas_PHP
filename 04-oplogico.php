<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operação lógica</title>
</head>
<body>
    <?php
        $ano = $_GET["an"];
        $idade = 2023 - $ano; #operação matematica para identificar a idade
        echo "Quem nasceu em $ano tem idade de $idade";
        
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NÃO OBRIGATORIO";
        echo "<br>Então o seu voto é: $tipo";
    ?>
</body>
</html>