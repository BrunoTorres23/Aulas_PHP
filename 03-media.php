<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media calculada</title>
</head>
<body>
    <?php
        $nota1 = $_GET["a"];
        $nota2 = $_GET["b"];
        $media = ($nota1 + $nota2)/2; #calculo da media
        
        // necessario uso de parenteses para isolar as condicionais
        echo "A situação do aluno é: " . (($media >= 7) ? "APROVADO" : "REPROVADO");
                                                    //":" considera como o se não
                                                    // "?" considera como o se
        echo "<br>Média final do aluno foi: $media";
    ?>
</body>
</html>