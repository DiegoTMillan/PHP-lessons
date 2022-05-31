<?php
session_start();
unset($_SESSION['PHPSESSID']);
session_destroy();
header('Location: http://localhost/php/POO/PHP_Avanzado/cookies.php');