<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "dbnikki9";

// create a connection

$conn = mysqli_connect($servername , $username , $password , $database);
// create a database

if(!$conn){
    die("<br> sorry we failed to connect : " . mysqli_connect_error());
}

echo "<br> connect was successfully";

$sql = "SELECT * FROM `form10` ";

$result =  mysqli_query($conn , $sql);

// find the no of records returned
$num = mysqli_num_rows($result);
echo $num;

echo "<br>";

//display rows
while($row = mysqli_fetch_assoc($result)){
    echo var_dump($row);
    echo "<br>";
}







?>