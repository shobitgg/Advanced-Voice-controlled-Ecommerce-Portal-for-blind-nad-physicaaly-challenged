<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "onlineshop";

// Create connection
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"onlineshop");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>