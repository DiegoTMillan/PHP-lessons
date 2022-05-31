<?php
include 'Rectangulo.php';
$figura = new Rectangulo();//variable con toda la clase se le llama objeto. Pero no el mismo que el de js
$figura -> setLado1(3.1416);
$figura -> setLado2(12);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>POO</title>
  </head>
  <body>
    <h1>Area del rectángulo: <?php
    print $figura -> obtenerArea();
    ?> cm
    </h1>
    <h2>
        El lado 1 vale: 
        <?php
        print $figura -> getLado1();
        ?>
    </h2>
    <h2>
        El lado 2 vale: 
        <?php
        print $figura -> getLado2();
        ?>
    </h2>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>