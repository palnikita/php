

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
    
}



if(isset($_POST['done'])){
    $sno = $_GET['updateid'];
    $name1 = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
 $sql = "UPDATE crud1 SET name='$name1' ,email='$email' ,password='$pass'  WHERE sno= '$sno'";
 $result =  mysqli_query($conn , $sql);
 if($result){
    header('location:crud.php');
 }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>update</title>
</head>
<body>
<div class="container my-4">
        <h2>ADD CLIENT</h2>

        <?php
        $updateid = $_GET['updateid'];
        $sql = " SELECT * FROM  `crud1` where sno='$updateid'";
         $result =  mysqli_query($conn , $sql);
           //$sno =0;
         while($row = mysqli_fetch_assoc($result)){
           //  $sno = $sno+1;

           ?>


        <form action="" method="post">
            <div class="mb-3">
                <label for="name1" class="form-label"> update Name</label>
                <input type="text" class="form-control" value="<?= $row['name']; ?>" id="name1" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-email"> update Email address</label>
                <input type="email" name="email" value="<?= $row['email']; ?>" class="form-control" id="email" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label"> update Password</label>
                <input type="password" value="<?= $row['password']; ?>" class="form-control" id="pass" name="pass">
            </div>

            <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
            <button type="submit" class="btn btn-primary" name="done">Submit</button>
        </form>

        <?php } ?>
    </div>
</body>
</html>