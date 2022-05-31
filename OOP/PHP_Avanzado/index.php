<?php
// function __autoload($class_name)
// {
// include $class_name . '.php';
// }
// Intenta incluir Users.php

// spl_autoload_register(function($class_name){
// //    print $class_name . '.php'; 
//    include $class_name . '.php'; 
// });

//EJEMPLO PRÁCTICO DE MULTI LOAD 
// function auto_loader1($class_name)
// {
// if(is_file($class_name . '.php')){
//     include $class_name . '.php';
// }
// }
// function auto_loader2($class_name)
// {
//     if (is_file('./subDir/' . $class_name . '.php')){
//         include './subDir/' . $class_name . '.php';
//     }
// }

// spl_autoload_register('auto_loader1');
// spl_autoload_register('auto_loader2');
// $obj = new Users();
// $obj2 = new SubClass();

//EJEMPLO DE CURLY SYNTAX
// for ($i = 1; $i <= 3; $i++) {
//     ${'num' . $i} = $i;
// }
// echo "$num1 $num2 $num3";
// if (isset($num3)) {
//     print 'la variable 3 ha sido definida <br>';
// }
// if (is_null($num4)) {
//     print 'la variable 4 no está definida <br>';
// }

// for ($i = 'A'; $i <= 'F'; $i++) { //como son valores hexadecimales y sus valores ascii sse puede oner así
//     ${'variable' . $i} = $i;
// }
// if (isset($variableC)) {
//     print 'la variable C ha sido definida <br>';
// }
// print_r(get_defined_vars());//para ver todas las variables que haya por todos lados.

$saludo = 'hola_mundo';
$$saludo = 'Hello world';//con el doble $ la variable anteriormente declarada se convierte en el nombre de la variable
print_r(get_defined_vars());
print 'la variable $hola mundo contiene: ' . $hola_mundo;
