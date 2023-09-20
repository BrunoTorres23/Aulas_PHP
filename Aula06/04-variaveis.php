<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis de variaveis</title>
</head>
<body>
    <?php
        $x = "abc"; 
        // com o "uso" da mesma variavel, o abc passa a ser uma variavel
        // entao abc recebe o def
        $$x = "def";
        echo "O conteudo da variavel X é $x";
        echo "<br>A variavel ABC criada recebeu o valor de: $abc";
    ?>
</body>
</html>