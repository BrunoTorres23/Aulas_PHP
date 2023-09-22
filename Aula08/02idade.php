<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]: "[Não foi informado]";
        // o isset serve como configuração, se o nome foi configurado, ele aparece ou não foi informado
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]: "[Não foi informado]";
        $idade = date("Y") - $ano;
        // Funções de data, y minusculo ano reduzido como 23 e o Y para inteiro 2023
        echo "$nome é $sexo e tem $idade anos.";
        ?>
        <br>
        <a href="02-exercicio.html">Voltar</a>
    </div>
</body>

</html>