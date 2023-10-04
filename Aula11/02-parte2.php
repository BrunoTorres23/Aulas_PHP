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

        $i = 1; //1º while pega os dados da url
        
        while ($i <= 5) { //laço de repetição em 5 

            $v = "num" . $i;
            // $v será "num1", na segunda iteração será "num2" e assim por diante
            $url = "v" . $i; //v sendo usado apenas para receber o valor do html

            $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
            // o num passa a receber os valores da url
            $i++;
        }

        /*echo "$num1 $num2 $num3 $num4 $num5"; //assim fica inline*/

        $i = 1; //este bloco mostra os dados pegos pela url
        
        while ($i <= 5) {
            $v = "num" . $i;
            echo "Valor $i: " . $$v . "<br/>";
            $i++;
            // a mesma estrutura, mas mostrando os dados 
        }
        ?>
    </div>
</body>

</html>