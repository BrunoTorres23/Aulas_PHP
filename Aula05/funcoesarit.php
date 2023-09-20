<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css">
</head>



<!-- FUNÇÕES USADAS PARA A COERÇÃO -->

<body>
    <style>
        h2 {
            font: 12pt arial;
            color: blue;
        }
    </style>
    <div>
        <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        echo "<h2>Valores recebidos: $v1 e $v2 <br></h2>";

        //Valores absolutos:
        echo "O valor absoluto de $v2 é " . abs($v2);
        // é usado para retornar o valor positivo de um número
        
        // Pow ou potenciação
        echo "<br>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
        // regra normal de potenciação
        // tag sup para potenciação
        
        // sqrt ou raiz quadrada
        echo "<br>A raiz de $v1 é: " . sqrt($v1);

        // round ou arredondamento
        echo "<br>O valor de $v2 arredondado é: " . round($v2);
        // funcionara para valores reais
        // ceil arredonda o valor para cima e o floor arredonda o seu valor para baixo
        
        // intval valor inteiro da variavel
        echo "<br>A parte inteira de $v2 é: " . intval($v2);
        // essa parte pegara a parte inteira do valor
        
        // number_format ou formatação
        echo "<br>O valor de $v1 em moeda é R$: " . number_format($v1, 2, ",", ".");
        // formatação usada de forma padrão em grandes valores ou moedas
        ?>
    </div>
</body>

</html>