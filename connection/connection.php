<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "clientes_tolired";
$connection = new mysqli($hostname, $username, $password, $database);

if(!$connection){
    die("Connection field: ".mysqli_connect_errno());
}


?>