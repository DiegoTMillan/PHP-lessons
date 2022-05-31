<?php

class Math
{
    static $number;
    static function generateNumber($min, $max)
    {
        self::$number = rand($min, $max);
    }
    static function printNumber()
    {
        print self::$number;
    }
}
Math::generateNumber(1,6);
print 'El número generado es:  <br>';
Math::printNumber();
//ejemplo de como los valores estáticos dentro de una función quedan guardados
//es por ello que en vez de dar 1 en todas las llamadas da 1,2,3,4,5.
function callMe()
{
    static $num = 1;
    print '<br> $num vale: ' . $num++;
}
callMe();
callMe();
callMe();
callMe();
callMe();

?>