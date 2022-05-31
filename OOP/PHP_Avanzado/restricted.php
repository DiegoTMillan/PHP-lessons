<?php
session_start();
if ($_SESSION['PHPSESSID'] == $_COOKIE['PHPSESSID']) {
    print 'estás logeado';
}else{
    header('Location: http://localhost/php/POO/PHP_Avanzado/cookies.php');
    die ('No estás logeado');
}
?>
<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <form action="logout.php" method="POST">
                <button type="submit" class="btn btnprimary">Logout</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>