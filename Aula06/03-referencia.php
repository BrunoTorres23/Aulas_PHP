<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REFERENCIA</title>
</head>
<body>
    <?php
        $a = $_GET["a"]; #aqui eu estou pegando a variavel pela url
        $b = &$a; /*a ligação entre as duas variaveis, tudo que b receber, 
        o a irá valer igualmente.*/
        $b += 5;
        echo "A variavel A vale: $a";
        echo "<br>A variavel B vale: $b";
    ?>
</body>
</html>