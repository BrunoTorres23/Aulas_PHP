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
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    // caso o ano setado não receber um número, automaticamente recebera nba tela o 1900
    $i = date("Y") - $a;
    echo "voce nasceu em $a e terá $i anos de idade. <br>";
    // aqui diz o ano que a pessoa nasceu e a idade
    if ($i < 16) {
      $tipovoto = "Não vota";
    }
    // se idade for menor que 16, ele não vota
    elseif (($i >= 16 && $i < 18 || ($i >= 65))) {
      $tipovoto = "Voto opcional";
    }
    // com outra condição, se a idade estiver entre 16 e 18 ou maior que 65, o voto é opcional
    else {
      $tipovoto = "Voto obrigatorio";
      // se não, a idade que será maior ou igual a 18 anos, o voto será obrigatorio.
    }


    echo "Para essa idade, $tipovoto";
    // embaixo mostrara quais das condições a pessoa vai se encaixar
    ?>
  </div>
</body>

</html>