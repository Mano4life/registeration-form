<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$connect_db = mysqli_connect($serverName, $username, $password, $dbname);

if(!$connect_db) {
    die("connection failed". mysqli_connect_error());
}
?>