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

echo "<br> connect was successfully <br>";

//$sql = "UPDATE `form10` SET `password` = 'nikki10' WHERE `sno` = 2";
$sql = "DELETE FROM `form10` WHERE `sno` = 2";


// $aff = mysqli_affected_rows($conn);
// echo "<br> no of rows are affected : $aff";

$result =  mysqli_query($conn , $sql);

// find the no of records returned
// $num = mysqli_num_rows($result);
// echo $num;

// echo " records are found in database <br>";

if($result){
   
}
else{
    echo "records are not deleted";
}


?>