<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dataBase = "e-commerce";


$conn = new mysqli($serverName, $userName, $password, $dataBase);

if (!$conn) {
    die("connection Failed : " . $conn->connect_error);
}
