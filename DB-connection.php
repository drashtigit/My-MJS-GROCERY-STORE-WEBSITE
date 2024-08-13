<?php


$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "grocery";

$conn = mysqli_connect($sname, $uname, $password, $db_name, 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>