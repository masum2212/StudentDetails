<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student information";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Could not connect to server" .mysqli_connect_error());
}
// echo "Connected to server";
?>