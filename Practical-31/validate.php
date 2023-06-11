<?php

$name = $_POST['name'];
$pass = $_POST['pass'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "info";


$conn = new mysqli($servername, $username,$password,$database);

if($conn->connect_error)
{
    die("Connection Failed" . $conn->connect_error);
}
else
{
    $sql  = "select * from records where name = '$name' and pass = '$pass'";

    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        echo "You are now logged in as $name <br>";
    }
    else
    {
        echo "No user exists of given detalils <br>";
    }

}
$conn->close();
?>