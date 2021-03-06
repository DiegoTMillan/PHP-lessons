<?php
require_once 'inc.php';
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
$obj = new Database(HOST, USER, PASSWORD, DB);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="p-5">
    <h1>Cities of the world</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Country Code</th>
                <th scope="col">Population</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //   $data = ['name' => 'Springfield', 'countrycode' => 'USA', 'district' => 'evergreen terrace', 'population' => 13475];
            //   $obj -> insertData('CITY', 'sssi', $data, 'name=?', 'countrycode=?', 'district=?', 'population=?');
            // $obj->deleteData('CITY', 'i', 1210);
            // $obj->updateData('CITY', 'si', 'Curitiva', 'name=?', 1212);
            $obj->setQuery('SELECT * FROM CITY');
            $obj->generateRows('id', 'name', 'countrycode', 'district',  'population');
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>