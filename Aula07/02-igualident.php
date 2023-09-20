<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual ou identico</title>
</head>

<body>
    <?php
    $a = 3;
    $b = "3";
    $r = ($a === $b) ? "SIM" : "NÃO";
    /*aqui vemos a principal diferença entre o igual e identico, 
    já que o igual considera string e int iguais, 
    mas o identico identifica se realmente é identico para validar*/
    // $r = ($a == $b) ? "SIM" : "NÃO";
    echo "As variaveis A e b são iguais? $r";
    ?>
</body>

</html>