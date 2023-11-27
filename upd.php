
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
        <form action="" method="post">
            <div class="mb-3">
                <label for="name1" class="form-label"> update Name</label>
                <input type="text" class="form-control" id="name1" name="name1">
            </div>
            <div class="mb-3">
                <label for="email" class="form-email"> update Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label"> update Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>

            <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
            <button type="submit" class="btn btn-primary" name="done">Submit</button>
        </form>
    </div>
</body>
</html>

   



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


    if (isset($_POST['done'])) {

        // $firstname = $_POST['firstname'];

        // $user_id = $_POST['user_id'];

        // $lastname = $_POST['lastname'];

        // $email = $_POST['email'];

        // $password = $_POST['password'];

        // $gender = $_POST['gender']; 

        $sno = $_GET['updateid'];
        $name = $_POST['name1'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "UPDATE `crud1` SET `name`='$name',`email`='$email',`pass`='$password' WHERE `sno`='$sno'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

// if (isset($_GET['sno'])) {

//     $updateid = $_GET['sno']; 

//     $sql = "SELECT * FROM `crud1` WHERE `sno`='$updateid'";

//     $result = $conn->query($sql); 

//     if ($result->num_rows > 0) {        

//         while ($row = $result->fetch_assoc()) {


            
//             $sno = $row['sno'];
//             $name = $row['name'];
//             $email = $row['email'];
//             $password = $row['password'];

//         } 


// if (isset($_GET['sno'])) {

//     $user_id = $_GET['sno']; 

//     $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

//     $result = $conn->query($sql); 

//     if ($result->num_rows > 0) {        

//         while ($row = $result->fetch_assoc()) {

//             $first_name = $row['firstname'];

//             $lastname = $row['lastname'];

//             $email = $row['email'];

//             $password  = $row['password'];

//             $gender = $row['gender'];

//             $id = $row['id'];

//         } 

//     ?>

