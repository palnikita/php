<?php


$servername ="localhost";
$username = "root";
$password = "";
$database ="crud";


// create a connection

$conn = mysqli_connect($servername , $username , $password , $database);


if(!$conn){
    die("<br> sorry we failed to connect : " . mysqli_connect_error());
}
else{
    echo "sucessfully connect";
}
if(isset($_GET['deleteid'])){
    $sno = $_GET['deleteid'];
    $sql = "DELETE FROM `crud1` WHERE `sno` = $sno ";
    $result =  mysqli_query($conn , $sql);
    if($result){
         header('location:crud.php');
        
     }
     else{
         echo "the db is not successfully" .mysqli_error($conn);
     }

}


?>