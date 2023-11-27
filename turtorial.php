



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Get/post</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name1 = $_POST['name1'];
   $email = $_POST['email'];
  $pass = $_POST['pass'];
  

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbnikki9";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{ 
  // Submit these to a database
  // Sql query to be executed 
  $sql = "INSERT INTO `form10` (`name`, `email`, `password`) VALUES ('$name1' , '$email' , '$pass')";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your entry has been submitted successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>';
  }
  // else{
  //     // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  //   <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
  //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //     <span aria-hidden="true">×</span>
  //   </button>
  // </div>';
  // }

}

}







// $result =  mysqli_query($conn , $sql);
// // echo "this is result " .var_dump($result);


// //check database creation is sucessfully or not
// if($result){
//    echo "<br> record sucessfully";
// }
// else{
//     echo "<br> the record is not successfully" .mysqli_error($conn);
// }

// if($_SERVER['REQUEST_METHOD']=='POST'){
//   $name1 = $_POST['name1'];
//   $email = $_POST['email'];
//   $pass = $_POST['pass'];
  
  



// $servername ="localhost";
// $username = "root";
// $password = "";
// $database = "dbnikki9";


// // create a connection

// $conn = mysqli_connect($servername , $username , $password , $database);


// if(!$conn){
//     die("<br> sorry we failed to connect : " . mysqli_connect_error());
// }
// else{
//   echo "sucessfully conected";
// }


// $sql = "INSERT INTO `form10` (`name`, `email`, `password`) VALUES ('$name1' , '$email' , '$pass')";
// $result =  mysqli_query($conn , $sql);
// // echo "this is result " .var_dump($result);


// //check database creation is sucessfully or not
// if($result){
//   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//   Successfully record saved
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }
// // else{
// //     echo "<br> the record is not successfully" .mysqli_error($conn);
// // }
// }

?>


<div class="container">
    <h1>Please Enter your email and password</h1>
<form action="" method="post">
<div class="mb-3">
<label for="name1" class="form-label">Name</label>
    <input type="text" class="form-control" id="name1" name="name1">
  </div>
  <div class="mb-3">
    <label for="email"class="form-email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
  
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>