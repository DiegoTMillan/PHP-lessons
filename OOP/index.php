<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
</head>

<body>
  <!-- se puede poner el h1 fuera del php o dentro -->
  <?php
  //  //opción 1 de comentario
  //  #opción 2 comentario
  //  /* opción 3 de comentario, mejor para multilínea */
  //  $fecha = 2050;
  //  $saludo = "<h1>Hello, World!";
  //  //la concatenación en vez de ser con sumar como js, se hace con un puntito
  //  //algunos ejemplos sencillos con algunos operadores que vienen a ser parecidos
  //  //salvo el != que tiene la alternativa <>
  //  echo $saludo . " " . $fecha . "</h1>";
  //  echo "<h2>el resto de dividir 4 entre 2 es: ". (4 % 2) ."</h2>";
  //  $fecha += 1;
  //  print "<h3>" .++$fecha."</h3>";
  //  //con el operador <=> si son iguales da 0, si izq mayor da 1 y si derecha mayor -1
  //  //aquí se pueden usar comillas simples, buena práctica para evitar conflictos
  //  //con mysql o html.
  //  $num1 = 4;
  //  $num2 = 4;
  //  print '<h3 class="flex">' . ($num1<=>$num2) . "</h3>";
  //  $hello = "hello";
  //  print "<h3>$hello world!</h3>";
  //  //las comillas simples lo malo es que no reconocen la variable
  //  print '<h3>$hello world!</h3>';
  //  //solución
  //  print '<h3>' . $hello . ' world!</h3>';
  //  $mundo = "Mundo";
  //  //sintaxis alternativa para cadenas de carácteres multilínea
  //  //y me permite incrustar variables. Nunca dejar espacio antes.
  //  //Si la etiqueta de apertura TEXT la metemos entre comillas
  //  //ya no leerá las variables que haya dentro
  //  //con comillas la etiqueta sería NOWDOC
  //  //este sería HEREDOC con este sí se analiza
  //  $hola = <<<TEXT
  //  Hola $mundo (esto se analiza) <br> puedo poner lo que quiera $mundo
  //  TEXT;
  //  print $hola;
  //  //aquí un ejemplo para concatenar con la misma variable con .=
  //  $greeting = "hello";
  //  $greeting .= " world!";
  //  print '<h3>' . $greeting . '</h3>';
  //  //recorriendo el string y cambiando un valor.
  //  $greeting[0] = 'W';
  //  print '<h3>' . $greeting . '</h3>';
  //  //declarar array
  //  $numbers = array(1 , 2 , 3, 4);
  //  //longitud array con sizeof que es = count
  //  print '<h3> Ultimo elemento array ' . $numbers[count($numbers)-1] . '</h3>';
  //  print '<h3> terecer elemento ' . $numbers[2] . '</h3>';
  //  //array asociativo
  //  $week = array('one' => 'monday', 'two'=>'tuesday', 'three' => 'wednesday', 4 => 'thursday');
  //  //obtener valores del array asociativo. Observar que vale la obtención clásica cuando el índice lo
  //  //permite
  //  print '<h3> Obtener el martes: ' . $week['two'] . '</h3>';
  //  print '<h3> Obtener el jueves: ' . $week[4] . '</h3>';
  //  //en el caso de debajo el seis tendría disponible como índice el primer número disponible.
  //  //en este caso el 0
  //  $numeros = array('one'=> 5, 6)
  //  //matrices.Observar que se puede dejar una coma al final del array para que en el futuro
  //  //se puedan incluir más valores y php lo acepta.

  //-------
  //COMENTADO DESDE AQUÍ HACÍA ARRIBA
  //-------

  //  $heroes = array(
  //    array('name'=> 'Thor', 'weapon' => 'Loky\'s Hammer'),
  //    array('name' => 'Punisher', 'weapon' => 'firearms'),
  //    array('name'=> 'Aquaman', 'weapon' => 'Trident'),
  //    array('name'=> 'Iron Man', 'weapon' => 'Armor'),
  //    array('name'=> 'Captain America', 'weapon' => 'Shield'),
  //    array('name'=> 'Antman', 'weapon' => 'Watch'),
  //  );
  //    print '<h2> El arma de: ' . $heroes[3]['name'] . ' es: ' .$heroes[3]['weapon']. '</h2>';
  //    print '<h2> El arma de: ' . $heroes[2]['name'] . ' es: ' .$heroes[2]['weapon']. '</h2>';
  //    print '<h2> El escudo de: ' . $heroes[4]['name'] . ' no puede detener el martillo de: ' .$heroes[0]['name']. '</h2>';
  //la función var_dump(nombre array) da toda la información acerca del array

  // $juegoDeTronos = array(
  //   'Stark' => array(
  //     'firstGeneration' => array(
  //       'Richard Stark'=> array(
  //         'name'=> 'Richard Stark', 'b'=> '239 - 240 A.C', 'd' => '282 A.C',
  //       ),
  //       ),
  //       'Lyarra Stark' => array(
  //         'name'=> 'Lyarra Stark', 'b'=> 'unknown', 'd'=> 'unknown',
  //         ),
  //       ),
  //       'secondGeneration' => array(
  //         'Eddard Stark' => array(
  //           'name'=> 'Eddard Stark', 'b' => '263 A.C.', 'd' => '299 A.C.', 'wife' => array(
  //             'Catelyn (Tully) Stark' => array(
  //               'name'=> 'Catelyn (Tully) Stark', 'b' => '264/5 A.C.', 'd' => '299 A.C.',
  //             ),
  //         ),
  //         'Brandon Stark' => array(
  //           'name'=> 'Brandon Stark', 'b' => '262 A.C.', 'd' => '282 A.C.',
  //         ),
  //         'Benjen Stark' => array(
  //           'name'=> 'Benjen Stark', 'b' => '267 A.C.', 'd' => 'unknown',
  //         ),
  //         'Lyanna Stark' => array(
  //           'name'=> 'Lyanna Stark', 'b' => '266/7 A.C.', 'd' => '283 A.C.',
  //         ),
  //       ),
  //       'thirdGeneration' => array(
  //         'Robb Stark' => array(
  //           'name'=> 'Robb Stark','b' => '283 A.C.', 'd' => '299 A.C.',
  //         ),
  //         'Sansa Stark' => array(
  //           'name'=> 'Sansa Stark', 'b' => '286 A.C.', 'd' => 'still alive',
  //         ),
  //         'Arya Stark' => array(
  //           'name'=> 'Arya Stark', 'b' => '289 A.C.', 'd' => 'still alive',
  //         ),
  //         'Bran Stark' => array(
  //           'name'=> 'Bran Stark', 'b' => '290 A.C.', 'd' => 'the special one',
  //         ),
  //         'Rickon Stark' => array(
  //           'name'=> 'Rickon Stark', 'b' => '290 A.C.', 'd' => 'unknown',
  //         ),
  //         'Jon Nieve' => array(
  //           'name'=> 'Jon Nieve', 'b' => '283 A.C.', 'd' => 'still alive',
  //         ),
  //       ),
  //     ),
  //     'Targaryen' => array(
  //       'firstGeneration' => array(
  //         'Aerys Targaryen'=> array(
  //           'name' => 'Aerys Targaryen', 'b'=> '244 A.C', 'd' => '283 A.C',
  //         ),
  //         ),
  //         'Raella Targaryen' => array(
  //           'name'=> 'Raella Targaryen', 'b'=> '254 A.C.', 'd'=> '284 A.C',
  //         ),
  //         'secondGeneration' => array(
  //           'Rhaegar Targaryen' => array(
  //             'name'=> 'Rhaegar Targaryen', 'b' => '259 A.C.', 'd' => '283 A.C.', 'wife' => array(
  //               'Elia (Martell) Targaryen' => array(
  //                 'b' => '256/7 A.C.', 'd' => '283 A.C.',
  //               ),
  //             ),
  //           ),
  //           'Viserys Targaryen' => array(
  //             'name'=> 'Viserys Targaryen', 'b' => '276 A.C.', 'd' => '298 A.C.',
  //           ),
  //           'Daenerys Targaryen' => array(
  //             'name'=> 'Daenerys Targaryen','b' => '284 A.C.', 'd' => 'who knows',
  //           ),
  //         ),
  //         'thirdGeneration' => array(
  //           'Rhaenys Targeryen' => array(
  //             'name'=>'Rhaenys Targeryen', 'b' => '280 A.C.', 'd' => '283 A.C.',
  //           ),
  //           'Aegon Targaryen' => array(
  //             'name'=> 'Aegon Targaryen', 'b' => '281/2 A.C.', 'd' => '283 A.C',
  //           ),
  //         ),
  //       ),
  //     );
  //     print '<h3>El personaje misterioso es: ' . $juegoDeTronos['Stark']['secondGeneration']['Brandon Stark']['name'] . ' nació en el: ' .  $juegoDeTronos['Stark']['secondGeneration']['Brandon Stark']['b'] . ' y murió en el: ' . $juegoDeTronos['Stark']['secondGeneration']['Brandon Stark']['d'] . '</h3>';


  //Arrays declaration
  $jonsMother = ['name' => 'Lyanna Stark', 'b' => '266/7 A.C.', 'd' => '283 A.C.',];
  $jonsFather = array('name' => 'Rhaegar Targaryen', 'b' => '259 A.C.', 'd' => '283 A.C.', 'wife' => array(
    'name' => 'Elia (Martell) Targaryen', 'b' => '256/7 A.C.', 'd' => '283 A.C.'
  ));
  $danaerisHusband = array('name' => 'Khal Drogo', 'b' => '268 A.C.', 'd' => '298 A.C.');
  $snow = array('name' => 'Jon Snow', 'b' => '283 A.C.', 'parents' => array(
    'mother' => $jonsMother,
    'father' => $jonsFather,
  ));

  //all stark members
  $stark = array(
    '1gen' => array(
      array('name' => 'Rickard Stark', 'b' => '230-249 A.C.', 'd' => '282 A.C.',),
      array('name' => 'Lyarra Stark', 'b' => 'unknown', 'd' => 'unknown',),
    ),
    '2gen' => array(
      array('name' => 'Eddar (Ned) Stark', 'b' => '263 A.C.', 'd' => '299 A.C.', 'wife' => array(
        'name' => 'Catelyn (Tully) Stark', 'b' => '264/5 A.C.', 'd' => '299 A.C.'
      )),
      array('name' => 'Brandon Stark', 'b' => '262 A.C.', 'd' => '282 A.C.',),
      array('name' => 'Benjen Stark', 'b' => '267 A.C.', 'd' => 'unknown',),
      $jonsMother,
    ),
    '3gen' => array(
      array('name' => 'Rob Stark', 'b' => '283 A.C.', 'd' => '299 A.C.',),
      array('name' => 'Sansa Stark', 'b' => '286 A.C.',),
      array('name' => 'Arya Stark', 'b' => '289 A.C.',),
      array('name' => 'Bran Stark', 'b' => '290 A.C.',),
      array('name' => 'Rickon Stark', 'b' => '295 A.C.', 'd' => 'unknown',),
      $snow,
    ),
  );

  //all targaryen members
  $targaryen = array(
    '1gen' => array(
      array('name' => 'Aerys Targaryen', 'b' => '244 A.C.', 'd' => '283 A.C.',),
      array('name' => 'Rhaella Targaryen', 'b' => '254 A.C.', 'd' => '284 A.C.',),
    ),
    '2gen' => array(
      $jonsFather,
      array('name' => 'Viserys Targaryen', 'b' => '276 A.C.', 'd' => '298 A.C.',),
      array('name' => 'Daenerys (Mother of dragons) Targaryen', 'b' => '284 A.C.',),
    ),
    '3gen' => array(
      array('name' => 'Rhaenys Targaryen', 'b' => '280 A.C.', 'd' => '283 A.C.',),
      array('name' => 'Aegon Targaryen', 'b' => '281/2 A.C.', 'd' => '283 A.C.',),
      $snow,
    ),
  );
  //adding Danaerys husband
  $gameOfThrones[1]['2gen'][2]['husband'] = $danaerisHusband;
  //Putting it all together
  $gameOfThrones = array($stark, $targaryen);
  //   //Eddar (Ned) Stark tiene : 5 hijos naturales y otro adoptado llamado: Jon Snow que nació el año: 283 A.C.
  //     print '<h2>'. $gameOfThrones[0]['2gen'][0]['name'].' tiene : '
  //     . ( sizeof($gameOfThrones[0]['3gen']) - 1 ) . ' hijos naturales y otro
  //     adoptado llamado: '.$gameOfThrones[0]['3gen'][5]['name']. ' que nació el año: '
  //     .$gameOfThrones[0]['3gen'][5]['b'].'</h2>';
  //     /* 
  //        El primer hijo de Catelyn (Tully) Stark esposa de : 
  //        Eddar (Ned) Stark se llamaba: Rob Stark. Falleció el año: 299 A.C.. 
  //        Tenía 2 hermanas, llamadas: Sansa Stark y Arya Stark 
  //     */
  //     print '<h2>El primer hijo de '. $gameOfThrones[0]['2gen'][0]['wife']['name'].' esposa de : '
  //     . $gameOfThrones[0]['2gen'][0]['name'] . ' se llamaba: '.$gameOfThrones[0]['3gen'][0]['name']
  //     .'. Falleció el año: '
  //     .$gameOfThrones[0]['3gen'][0]['d']. '. Tenía 2 hermanas, llamadas: '
  //     .$gameOfThrones[0]['3gen'][1]['name'].' y '.$gameOfThrones[0]['3gen'][2]['name'].'</h2>';
  //     /*
  //     Daenerys (Mother of dragons) Targaryen fue casada con el lider de los Dothrakis 
  //     por Viserys Targaryen que falleció en: 298 A.C. . 
  //     Sin saber su parentesco, tuvo una relación con: Jon Snow que era hijo de: 
  //     Rhaegar Targaryen resultando que el padre era tambien su hermano.
  //     */
  //     print '<h2>'.$gameOfThrones[1]['2gen'][2]['name'].' fue casada con el lider de los Dothrakis por '
  //     .$gameOfThrones[1]['2gen'][1]['name'] .' que falleció en: '.$gameOfThrones[1]['2gen'][1]['d']
  //     .' . Sin saber su parentesco, tuvo una relación con: '.$gameOfThrones[1]['3gen'][2]['name']
  //     .' que era hijo de: '.$gameOfThrones[1]['2gen'][0]['name']
  //     .' resultando que el padre era tambien su hermano.</h2>';

  //     print '<h2>Array Game Of Thrones al completo:</h2>';
  //     var_dump($gameOfThrones);

  // print '<h2>Recorrer arbol genealógico con foreach: </h2>';
  // //Go over single array
  // function singleArrayIterator($data, $info){

  //   print '<h3>'.$info.'</h3>';
  // print '<ul>';
  // foreach ($data as $key => $value) {
  //   if ($key == 'b') {
  //     print "<li><strong>Born: </strong> $value</li>";
  //   } else if ($key == 'd') {
  //     print "<li><strong>Deadth </strong> $value</li>";
  //   } else {
  //     print "<li><strong>" . ucfirst($key) .  ":</strong> $value</li>";
  //   }
  // };
  // print '</ul>';
  // };
//Go over single array
// function singleArrayIterator($data, $info)
// {

//   print '<h3>' . $info . '</h3>';
//   print '<ul>';
//   foreach ($data as $key => $value) {
//     if ($key == 'b') {
//       print "<li><strong>Born:</strong> $value</li>";
//     } else if ($key == 'd') {
//       print "<li><strong>Death:</strong> $value</li>";
//     } else {
//       print "<li><strong>" . ucfirst($key) . ":</strong> $value</li>";
//     }
//   }
//   print '</ul>';
// }
// Go over a compound array
function compoundArrayIterator($data, $info)
{
  print '<h3>' . $info . '</h3>';
  print '<ul>';
  foreach ($data as $key => $value) {
    if ($key == 'wife') {
      print '<h3>Espos@ de ' . $data['name'] . ':</h3>';
      foreach ($value as $key2 => $value2) {
        if ($key2 == 'b') {
          print "<li><strong>Born:</strong> $value2</li>";
        } else if ($key2 == 'd') {
          print "<li><strong>Death:</strong> $value2</li>";
        } else {
          print "<li><strong>" . ucfirst($key2) . ":</strong> $value2</li>";
        }
      }
    } else if ($key == 'b') {
      print "<li><strong>Born:</strong> $value</li>";
    } else if ($key == 'd') {
      print "<li><strong>Death:</strong> $value</li>";
    } else {
      print "<li><strong>" . ucfirst($key) . ":</strong> $value</li>";
    }
  }
  print '</ul>';
}

// Iterate over first generation
function iterateFirstGen($data, $info)
{
  print "<li><strong>$info:</strong></li>";
  foreach ($data as $members) {
    print '<ul>';
    foreach ($members as $memberKey => $memberValue) {
      if ($memberKey == 'b') {
        print "<li><strong>Born:</strong> $memberValue</li>";
      } else if ($memberKey == 'd') {
        print "<li><strong>Death:</strong> $memberValue</li>";
      } else {
        print "<li><strong>" . ucfirst($memberKey) . ":</strong> $memberValue</li>";
      }
    }
    print '</ul>';
    print '<br>';
  }
}
// Iterate over second generation
function iterateSecondGen($data, $info)
{
  print "<li><strong>$info</strong></li>";
  foreach ($data as $members) {
    print '<ul>';
    foreach ($members as $memberKey => $memberValue) {
      if ($memberKey == 'wife' || $memberKey == 'husband') {
        print '<h4>Espos@ de ' . $members['name'] . ':</h4>';
        print '<ul>';
        foreach ($memberValue as $wifeKey => $wifeValue) {
          if ($wifeKey == 'b') {
            print "<li><strong>Born:</strong> $wifeValue</li>";
          } else if ($wifeKey == 'd') {
            print "<li><strong>Death:</strong> $wifeValue</li>";
          } else {
            print "<li><strong>" . ucfirst($wifeKey) . ":</strong> $wifeValue</li>";
          }
        }
        print '</ul>';
      } else if ($memberKey == 'b') {
        print "<li><strong>Born:</strong> $memberValue</li>";
      } else if ($memberKey == 'd') {
        print "<li><strong>Death:</strong> $memberValue</li>";
      } else {
        print "<li><strong>" . ucfirst($memberKey) . ":</strong> $memberValue</li>";
      }
    }
    print '</ul>';
    print '<br>';
  }
}
// Iterate over third generation
function iterateThirdGen($data, $info)
{
  print "<li><strong>$info</strong></li>";
  foreach ($data as $members) {
    print '<ul>';
    foreach ($members as $memberKey => $memberValue) {
      if ($memberKey == 'parents') { // En el caso de tener la clave parents
        print '<h4>Padres de ' . $members['name'] . ':</h4>';
        print '<ul>';
        foreach ($memberValue as $parentsKey => $parentsValue) { // Recorremos los arrays de los padres

          foreach ($parentsValue as $parentKey => $parentValue) { //Recorremos cada padre internamente
            if ($parentKey != 'wife') {

              // Código alternativo si queremos mostrar también a la Espos@
              // if ($parentKey = 'wife') {
              // print '<h5>Espos@ de '.$parentsValue['name'].':</h5>';
              // print '<ul>';
              // foreach($parentValue as $wifeKey => $wifeValue){
              //   if ($wifeKey == 'b') {
              //     print "<li><strong>Born:</strong> $wifeValue</li>";

              //   }else if($wifeKey == 'd'){
              //     print "<li><strong>Death:</strong> $wifeValue</li>";

              //   }else{
              //     print "<li><strong>".ucfirst($wifeKey).":</strong> $wifeValue</li>";
              //   }
              // }
              // print '</ul>';
              //} else
              if ($parentKey == 'b') {
                print "<li><strong>Born:</strong> $parentValue</li>";
              } else if ($parentKey == 'd') {
                print "<li><strong>Death:</strong> $parentValue</li>";
              } else {
                print "<li><strong>" . ucfirst($parentKey) . ":</strong> $parentValue</li>";
              }
            }
          }
          print '<br>';
        }
        print '</ul>';
      } else if ($memberKey == 'b') {
        print "<li><strong>Born:</strong> $memberValue</li>";
      } else if ($memberKey == 'd') {
        print "<li><strong>Death:</strong> $memberValue</li>";
      } else {
        print "<li><strong>" . ucfirst($memberKey) . ":</strong> $memberValue</li>";
      }
    }
    print '</ul>';
    print '<br>';
  }
}
  ?>
<body>
  <h1>Game Of Thrones</h1>
  <?php
  compoundArrayIterator($jonsMother, 'Madre de Jon Nieve:');
  compoundArrayIterator($jonsFather, 'Padre de Jon Nieve:');
  print '<h3>Familia Stark al completo:</h3>';
  print '<ul>';
  foreach ($stark as $key => $value) {
    if ($key == '1gen') {
      //1gen
      iterateFirstGen($value, 'Primera generación:');
    } else if ($key == '2gen') {
      //2gen
      iterateSecondGen($value, 'Segunda generación:');
    } else {
      //3gen
      iterateThirdGen($value, 'Tercera generación:');
    }
  }
  print '</ul>';
  print '<h3>Familia Targaryen al completo:</h3>';
  print '<ul>';
  foreach ($targaryen as $key => $value) {
    if ($key == '1gen') {
      iterateFirstGen($value, 'Primera generación:');
    } else if ($key == '2gen') {
      iterateSecondGen($value, 'Segunda generación:');
    } else {
      iterateThirdGen($value, 'Tercera generación:');
    }
  }
  print '</ul>';
  ?>
</body>