<?php
//METODOS DE IMPORTACIÓN
include './POO/Static/Math.php';// mediante la ruta
require './POO/soluciones/Usuario.php';//igual que include, sin embargo, si hay error, no permitirá que se
//ejecute a continuación. Si va en forma de include_once solo lo importa una vez y es la forma más usual.
$usersList = [
    [
        "first" => "Livy",
        "last" => "Presdee",
        "email" => "lpresdee0@acquirethisname.com",
        "password" => "oW40LIBet"
    ],
    [
        "first" => "Barry",
        "last" => "Mayhow",
        "email" => "bmayhow1@lycos.com",
        "password" => "lqdCGacjuV"
    ],
    [
        "first" => "Antonio",
        "last" => "Batterton",
        "email" => "abatterton2@blogs.com",
        "password" => "fwDa8i"
    ],
    [
        "first" => "Hamel",
        "last" => "Brien",
        "email" => "hbrien3@chronoengine.com",
        "password" => "WFU031i"
    ],
    [
        "first" => "Emily",
        "last" => "Eddisforth",
        "email" => "eeddisforth4@google.com.br",
        "password" => "FtUhUMND0X4C"
    ],
    [
        "first" => "Betsey",
        "last" => "Topping",
        "email" => "btopping5@usnews.com",
        "password" => "Zg6IcB"
    ],
    [
        "first" => "Ola",
        "last" => "Gommowe",
        "email" => "ogommowe6@craigslist.org",
        "password" => "iCwfM1OV"
    ],
    [
        "first" => "Cary",
        "last" => "Klaussen",
        "email" => "cklaussen7@fastcompany.com",
        "password" => "BT6nlZPNFINA"
    ],
    [
        "first" => "Jyoti",
        "last" => "Huggill",
        "email" => "jhuggill8@usatoday.com",
        "password" => "GreyVSBvESd"
    ],
    [
        "first" => "Erl",
        "last" => "Gusney",
        "email" => "egusney9@barnesandnoble.com",
        "password" => "E44HTZZ"
    ]
];
class User
{   
    const CA = [1,2,3];//Ejemplo de array con valores constantes. Son ejemplos a parte del ejercicio users
    const CITY = 'Silicon Valley';//algo que no cambia nunca es con const y luego todo mayúscula.
    //si hay más de una palabra seguido de guión bajo p.e CITY_CHACHI
    protected $first, $last, $email, $password; //se ha puesto protected para que pueda heredar la función de abajo
    function __construct(...$data)
    {
        foreach ($data[0] as $key => $value) {
            switch ($key) {
                case 'first':
                    $this->first = $value;
                    break;
                case 'last':
                    $this->last = $value;
                    break;
                case 'email':
                    $this->email = $value;
                    break;
                    case 'password':
                        $this->password = $value;
                        break;
                    }
                }
            }
            // function setData($info)
            // {
                //     $this->data = $info;
                // }

    //EJEMPLO DE DESTRUCT Y HERENCIA

    function setFist($name)
    {
        $this->first = $name;
    }
    function getFirst()
    {
        return $this -> first;
    }
    function __destruct()
    {
        //print $this -> first;
    }
    function print()
    {
        print '<br> Esto está en la clase user <br>';
    }
}
class StandardUser extends User
{
    function printData()
    {
        print 'Name: ' . $this ->first . '<br>';
        print 'Last: ' . $this ->last . '<br>';
        print 'Email: ' . $this ->email . '<br>';
        print 'Password: ' . $this ->password . '<br>';
    }
    function setFirst($first)
    {
        $this -> first = $first;
    }
    function setLast($last)
    {
        $this -> last = $last;
    }
    function getFirst()
    {
        print $this -> first;
    }
    function print()
    {
        User::print();//He aquí las dos maneras de llamar al padre
        parent::print();
        print print '<br> Esto está en la clase StandardUser <br>';
    }

}
$userStandard = new StandardUser();
$userStandard -> setFirst('John');
print $userStandard -> getFirst();
print '<br>';
$userStandard -> setLast('Doe');
print $userStandard ->printData();

$user = new User ($userList[0]);
print '<br>no habrá salida en pantalla<br>';
$user -> getFirst();
print '<br>Esto generará la salida en pantalla del nombre de usuario';
$userStandard ->getFirst();

$user->print();
$userStandard->print();
print $userStandard::CITY;


//Continuación constructor y usuarios. Comentado para incluir destructor de por medio
// $listaObjetos = [];
// $contador = 0;
// foreach ($usersList as $usuario) {

//     $listaObjetos[$contador++] = new User($usuario);
// }
// print_r($listaObjetos[0]);
// // new User($usersList[0]);
// // new User($usersList[1]);

//EJEMPLOS DE DEFINE

define('SERVER','localhost');
define('DATABASE','cities');
define('USER','usuario');
define('PASSWORD','usuario', true);//ojo con el plugin al ponerlo en minúscula marca error y no va, sin embargo
//si que está funcionando. la causa? el plugin es php intelephense
print '<br>' . DATABASE;
// print '<br>' . password;//Comentado por bonito, funcionar funciona
print '<br>' . PASSWORD;
define('SALUDO', 'Hola, tú.', true);
echo '<br>' . SALUDO;
// echo '<br>' . saludo;//Funcionar funciona, comentado para que queda bonito
// $userStandard::CA[0] = 5;//da error por que no es posible modificar el valor del array
?>

