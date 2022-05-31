<?php

class EasyClass{//aquí tenemos todas las cosas que se pueden declarar.
    const DIA_SEMANA_1 = 'Lunes';
    public $saludo = 'hola' . 'mundo';
    public $saludoHeredoc = <<<START
    esto es un
    string
    multilínea
    START;
    public $suma = 2 + 2;
    public $listaElementos = [true, 1.2, 'hello', ];
    public $saludoNowdoc = <<<'START'
    esto es un
    string
    multilínea
    START;
    //NO SE PUEDEN DECLARAR LAS SIGUIENTES PROPIEDADES
    // public $variable =DIA_SEMANA_1;//aunque ponga que no está definida el problema es que no se puede cambiar.
    //constante a variable
    // public $variable = $variableNoDefinida;//no se puede llamar a variables no definidas
    static function metodoEstatico(){
    }
    // public $contieneMetodoEstatico = self::metodoStatico();
}


?>