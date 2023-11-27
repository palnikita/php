<?php


$servername ="localhost";
$username = "root";
$password = "";
$database = "dbnikki6";


// create a connection

$conn = mysqli_connect($servername , $username , $password , $database);
// create a database

if(!$conn){
    die("<br> sorry we failed to connect : " . mysqli_connect_error());
}

echo "<br> connect was successfully";


$sql = "INSERT INTO `form9` (`sno`, `name`, `age`, `gender`) VALUES ( '5' , 'suhani' , '10', 'female')";


$result =  mysqli_query($conn , $sql);
// echo "this is result " .var_dump($result);


//check database creation is sucessfully or not
if($result){
   echo "<br> record sucessfully";
}
else{
    echo "<br> the record is not successfully" .mysqli_error($conn);
}


?>