  <?php

  // //ejemplo de bucle foreach con continue
  // $nums = [1,2,3,4];
  //   foreach ($nums as $value) {
  //     if ($value % 2 != 0) {
  //       print '<br>Entra dentro de if cuando $value vale: '.$value;
  //       continue;
  //       print "<br>Este texto no va a aparecer en ningún caso";
  //       print "<br>¿Estás de acuerdo?";
  //     }
  //   }

  // print "<br><br>Uso de continue en switch";
  // $i = 0;
  // while ($i++ < 10) {
  //   switch ($i) {
  //     case 1:
  //       continue 2;
  //     case 2:
  //       print '<br>entrando en caso 2';
  //       break;
  //     case 3:
  //       print '<br>entrando en caso 3';
  //       break;
  //   };
  //   print ' ' . $i . '<br>';
  // }; //se comporta como un switch al cortar el procedimiento en los dos niveles anidados
  // //que es lo que indica el número

  // $a = 0;
  // $b = 0;
  // while ($a++ < 10) {
  //   echo '<p>$a vale: ' . $a . '</p>';
  //   if ($a == 3) {
  //     continue;
  //   }
  //   if ($a == 5) {
  //     break;
  //   }
  //   echo '<p>Estoy dentro del primer while</p>';
  //   while ($b++ < 10) {
  //     echo '<p>$b vale: ' . $b . '</p>';
  //     if ($b == 1) {
  //       continue 2;
  //     }
  //     if ($b == 4) {
  //       break 2;
  //     }
  //     echo '<p>Estoy dentro del segundo while (anidado)</p>';
  //   }
  //   $b = 0;
  // }
  // $i = 0;

  // do {

  //   while ($i++ < 10) {
  //     switch ($i) {
  //       case 1:
  //         print "<br>entrando en el caso 1";
  //         continue 2;
  //       case 2:
  //         print "<br>entrando en el caso 2";
  //         break 2;
  //       case 3:
  //         print "<br>entrando en el caso 3";
  //         break 3;
  //       case 4:
  //         print "<br>entrando en el caso 4";
  //         break;
  //         // No es válido por que no hay 4 niveles de anidamiento
  //         // break 4;
  //       case 5:
  //         print "<br>entrando en el caso 5";
  //         break;
  //     }
  //     print '<br>$i vale: ' . $i . '<br>';
  //   }
  // } while (true);

  // //Valores por defecto en una función
  // echo '<h2>Funciones</h2>';
  // function greeting($hi, $world, $anotherParam = 'Jane')
  // {
  //   print '<p>' . $hi . $world . ' and ' . $anotherParam . '</p>';
  // }
  // greeting("hola ", 'John');

  //ejercicio con valores por defecto para funciones.
  // function setUser($nombre, $dni = '12345678A')
  // {
  //   $numParam = func_num_args();
  //   print '<p> La función está recibiendo ' .$numParam. ' parámetros</p>';
  //   $paramList = func_get_args();
  //   foreach($paramList as $key => $parametro);
  //   print '<p> Parámetro nº ' .($key +1). ':' .$parametro. '</p>';
  //   return '<p> Se ha creado el usuario: ' . $nombre . ', con DNI: ' . $dni . '</p>';
  // };
  // //utilización de 
  // function sum(...$numbers){
  //   $result=0;
  //   foreach($numbers as $number) {
  //     $result += $number;
  //   }
  //   return $result;
  // }
  // //checking return
  // function saludo(){
  //   return;
  // }

  
  // ?>
  // <!doctype html>
  // <html lang="en">

  // <head>
  //   <meta charset="utf-8">
  //   <meta name="viewport" content="width=device-width, initial-scale=1">
  //   <title>Bootstrap demo</title>
  // </head>

  // <body>
  //   <h1>Trabajando con funciones</h1>
  //   <?php
  //     print setUser('John');
  //     print setUser('James', '87654321B');
  //     print '<p> Este es el resultado de la suma: ' .sum(1,2,3,4,5,6,7). '<p>';
  //     if (saludo()== null) {
  //       print '<p>No está devolviendo ningún valor </p>';
  //     }else{
  //       print '<p>'.saludo().' </p>';
  //     };

    ?>
  </body>

  </html>