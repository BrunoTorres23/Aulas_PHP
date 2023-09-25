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
    $nota1 = isset($_GET["n1"]) ? $_GET["n1"] : "Não foi possivel ler a sua nota.";
    $nota2 = isset($_GET["n2"]) ? $_GET["n2"] : "Não foi possivel ler a sua nota.";

    $media = ($nota1 + $nota2) / 2;

    if ($media >= 7 || $media == 6) {
      $sit = "APROVADO";
    } elseif ($media < 6) {
      $sit = "REPROVADO";
    }
    

    echo "A sua primeira nota foi: $nota1<br>
            A sua segunda nota foi: $nota2<br>
            Logo, a sua media final foi: $media<br>
            Situação final do aluno: $sit";
    ?>

  </div>
</body>

</html>