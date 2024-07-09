<?php
$servername ="localhost";
$username="root";
$password = "";
$dbname = "mydb";


// <!-- create connection -->

$conn= mysqli_connect($servername,$username,$password,$dbname);

// check conn


if(!$conn)
{
    die("connection failed" .mysqli_connect_error());
}


?>
