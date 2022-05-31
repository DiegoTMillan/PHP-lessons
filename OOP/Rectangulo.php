<?php
class Rectangulo
{
    //propiedades de clase
    private $lado1, $lado2;

    //Métodos
    //setters, para establecer el valor de las propiedades
    function setLado1($lado)
    {
        $this->lado1 = $lado;
    }

    function setLado2($lado)
    {
        $this->lado2 = $lado;
    }

    //getters, para obtener el valor de las propiedades
    function getLado1(){
        return $this -> lado1;
    }
    function getLado2(){
        return $this -> lado2;
    }

    private function calcularArea($l1, $l2)
    {
        return $l1 * $l2;
    }

    public function obtenerArea()
    {
        return $this->calcularArea($this->lado1, $this->lado2);
    }
}


//Hacer este ejercicio en un nuevo directorio llamado Users:
//Escribir la clase Usuario para crear usuario con los datos:
    //- nombre, - dirección, - mail, - teléfono, - contraseña
//Escribir los setters y getters correspondientes. Utilizar los modificadores de acceso más restrictivos posibles
//Crear el ínidce y generar datos (mockaroo) para al menos 6 usuarios
//Utilizando una imagen genérica para imagen de perfil, incrustar los datos en card de bootstrap.
