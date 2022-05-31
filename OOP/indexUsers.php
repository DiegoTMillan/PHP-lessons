<?php
//connecting with usuarios
include 'Usuarios.php';
//all users charged
$data1 = new Usuario1();
$data2 = new Usuario2();
$data3 = new Usuario3();
$data4 = new Usuario4();
$data5 = new Usuario5();
$data6 = new Usuario6();


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Users</title>
</head>

<body>

    <div class="mx-auto d-flex flex-wrap col-8">
    <!-- card1 -->
        <div class="card mt-3 ms-3 me-3" style="width: 18rem;">
        <img src=<?php echo $data1->photo ?> class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php print $data1->name ?></h5>
                <p class="card-text"><strong>Email: </strong><?php print $data1->email ?></p>
                <p class="card-text"><strong>Password: </strong><?php print $data1->password ?></p>
                <p class="card-text"><strong>Phone: </strong><?php print $data1->phone ?></p>
            </div>
        </div>
        <!-- card2 -->
        <div class="card mt-3 ms-3 me-3" style="width: 18rem;">
        <img src=<?php echo $data2->photo ?> class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php print $data2->name ?></h5>
                <p class="card-text"><strong>Email: </strong><?php print $data2->email ?></p>
                <p class="card-text"><strong>Password: </strong><?php print $data2->password ?></p>
                <p class="card-text"><strong>Phone: </strong><?php print $data2->phone ?></p>
            </div>
        </div>
        <!-- card3 -->
        <div class="card mt-3 ms-3 me-3" style="width: 18rem;">
        <img src=<?php echo $data3->photo ?> class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php print $data3->name ?></h5>
                <p class="card-text"><strong>Email: </strong><?php print $data3->email ?></p>
                <p class="card-text"><strong>Password: </strong><?php print $data3->password ?></p>
                <p class="card-text"><strong>Phone: </strong><?php print $data3->phone ?></p>
            </div>
        </div>
        <!-- card4 -->
        <div class="card mt-3 ms-3 me-3" style="width: 18rem;">
        <img src=<?php echo $data4->photo ?> class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php print $data4->name ?></h5>
                <p class="card-text"><strong>Email: </strong><?php print $data4->email ?></p>
                <p class="card-text"><strong>Password: </strong><?php print $data4->password ?></p>
                <p class="card-text"><strong>Phone: </strong><?php print $data4->phone ?></p>
            </div>
        </div>
        <!-- card5 -->
        <div class="card mt-3 ms-3 me-3" style="width: 18rem;">
        <img src=<?php echo $data1->photo ?> class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php print $data5->name ?></h5>
                <p class="card-text"><strong>Email: </strong><?php print $data5->email ?></p>
                <p class="card-text"><strong>Password: </strong><?php print $data5->password ?></p>
                <p class="card-text"><strong>Phone: </strong><?php print $data5->phone ?></p>
            </div>
        </div>
        <!-- card6 -->
        <div class="card mt-3 ms-3 me-3" style="width: 18rem;">
        <img src=<?php echo $data6->photo ?> class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php print $data6->name ?></h5>
                <p class="card-text"><strong>Email: </strong><?php print $data6->email ?></p>
                <p class="card-text"><strong>Password: </strong><?php print $data6->password ?></p>
                <p class="card-text"><strong>Phone: </strong><?php print $data6->phone ?></p>
            </div>
        </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>