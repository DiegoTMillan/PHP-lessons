<?php

class AccesoPrivado
{
    private $num;
    function setNum($object, $value){
        $object -> num = $value;//aquí siempre poner this en vez de objetos de fuera para evitar líos.
        return $this ->num;
    }
    function getNum(){
        return $this->num;
    }
}

$acceso1 = new AccesoPrivado();
$acceso2 = new AccesoPrivado();
// if ($acceso1 === $acceso2) {
//     print 'son el mismo objeto';
// }else {
//     print 'no son el mismo objeto';
// }
// $acceso3 = $acceso1;
// if ($acceso1 === $acceso3) {
//     print 'son el mismo objeto  ';
// }else {
//     print '   no son el mismo objeto';
// }

// $acceso3 -> num = 20;
// print $acceso1 ->num;

$acceso1 -> setNum($acceso2, 40);
print $acceso2 -> getNum() . '<br>';
print 'no sale nada '. $acceso1 -> getNum() . 'antes de ser modificado<br>';
$acceso1 -> setNum($acceso1, 10); 
print $acceso1 -> getNum() . ' después de ser modificado';
?>