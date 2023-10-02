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
    $estado = isset($_GET["est"]) ? $_GET["est"] : 0;
    switch ($estado) {
      case 'sp':
      case 'rj':
      case 'es':
      case 'mg':
        echo "Você escolheu a região sudeste";
        break;
      case 'pr':
      case 'sc':
      case 'rs':
        echo "Você escolheu a região sul";
        break;
      case 'am';
      case 'pa';
      case 'ac';
      case 'rr';
      case 'ro';
      case 'ap';
      case 'to';
        echo "Você escolheu a região norte";
    }
    ?>
  </div>
</body>

</html>