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
    $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;
    switch ($d) {
      case 2:
      case 3:
      case 4:
      case 5:
      case 6:
        echo "Dia letivo.";
        break;
      case 7:
      case 8:
        echo "Dia não letivo";
        break;
      default:
        echo "Dia inválido.";
    }

    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    <!-- este botão em js significa voltar para a pagina anterior -->
  </div>
</body>

</html>