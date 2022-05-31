<?php
// setcookie('fullStack10', date('Y-m-d'), time()+(60*60*2)+120);
// setcookie('fullStack11', date('Y-m-d'), time()+20);
// print $_COOKIE['fullStack10'];
//se puede eliminar una cookie poniendo a cero la duración y date
// setcookie('fullStack10', 0, 0);

session_start();
// print $_COOKIE['PHPSESSID'] . '<br>';
// print_r($_SESSION['PHPSESSID']) . '<br>';
$_SESSION['PHPSESSID'] = $_COOKIE['PHPSESSID'];
// print $_COOKIE['PHPSESSID'] . '<br>';
print '<h1>Bienvenid@</h1>';
