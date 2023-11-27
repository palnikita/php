<?php

$servername ="localhost";
$username = "root";
$password = "";
$database = "dbnikki6";


// create a connection

$conn = mysqli_connect($servername , $username , $password);
// create a database

if(!$conn){
    die("sorry we failed to connect : " . mysqli_connect_error());
}

echo "connect was successfully";

?>