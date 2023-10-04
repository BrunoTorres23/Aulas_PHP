<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  <div>
    <form action="02-parte2.php" method="get">
      <?php
      $c = 1;
      while ($c <= 5) {
        echo "valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
      $c++;
      // somar o contador
      }
      // criando laço de repetição de 5 vezes
      ?>
      <input type='Submit' value='Enviar'>
    </form>
  </div>
</body>

</html>