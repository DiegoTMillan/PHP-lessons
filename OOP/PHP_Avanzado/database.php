<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "mysql";
// No hemos comprobado  $_POST['password'], 
//¡puede ser cualquier cosa que elusuario quiera! 
//Por ejemplo:
$_POST['User'] = 'root';
$_POST['authentication_string'] = "' OR ''='";
// Create connection
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM user WHERE User='{$_POST['User']}' AND authentication_string='{$_POST['authentication_string']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo " - Name: " .
            $row["User"] . " 
    authentication_string: " .
            $row["authentication_string"] .
            "<br>";
    }
} else {
    echo "0 results";
}

    $conn->close();
//La consulta enviada a MySQL
print '<br>' . $sql . '<br>';
//SELECT * FROM user WHERE User='root' AND authentication_string='' OR ''=''
