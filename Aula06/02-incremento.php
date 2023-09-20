<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCREMENTO</title>
</head>

<body>
    <?php
    $atual = $_GET["aa"];
    echo "O ano atual é: $atual e o ano anterior foi: " . --$atual;
    // DIFERENÇAS ENTRE PRÉ E PÓS INCREMENTO OU DECREMENTO
    // PRÉ: A VARIAVEL SERÁ UTILIZADA JÁ NA MESMA EXPRESSÃO.
    // PÓS: A VARIAVEL SERÁ UTILIZADA APÓS A EXPRESSÃO, TERÁ QUE TRAZER A VARIAVEL NOVAMENTE APÓS.
    ?>
</body>

</html>