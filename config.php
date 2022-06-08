<?php 

$host = "localhost";
$username = "root";
$password = "";
$dbName = "guestBook";

$conn = mysqli_connect($host, $username, $password, $dbName);

// check connection

if(!$conn){
    echo "connection failed" . mysqli_connect_error();
}
