<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "ecommerce(1)";

// creating bd connection
$con = mysqli_connect($host, $username, $password, $database);

if(!$con){
    die("Connection failed:".mysqli_connect_error());
}

?>