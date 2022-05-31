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
            <form action="login.php" method="POST">
                <!-- Si pones GET en vez de POST la info aportada sale en la URL -->
                <div class="mb-3">
                    <label for='exampleInputEmail1' class="form-label">Email adresss</label>
                    <input type='datos[email]' name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="formtext">We'll never share your email with anyone else </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="datos[password]" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="rememberMe " class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <select class="form-select" aria-label="Default select example" name="heroes[]" size="3" multiple="tr">
                    <option selected>Choose your hero</option>
                    <option value="thor">Thor</option>
                    <option value="IronMan">Iron Man</option>
                    <option value="drStrange">Dr. Strange</option>
                </select>
                <button type="submit" class="btn btnprimary">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>