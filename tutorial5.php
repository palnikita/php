
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="container ">
    <div class="card mb-3">
    <h1 class="text-center">Signup page</h1>
   <form action="" method="post">
  <div class="row  g-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first-name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last-name">
  </div>
</div>
  <div class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="inputEmai14">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="Address">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="Address2">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  
  
  <div class="col-12">
    <button type="submit"  name="signup" class="btn btn-primary w-100" >Sign in</button>
  </div>
</div>

   </form>
</div>
<div class="card mt-5">
    <h1 class="text-center">User record</h1>
   <table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">ADD.</th> 
      <th ></th> 
      <th ></th> 
    </tr>
  </thead>
  <tbody>

  

<?php 
$servername ="localhost";
$username = "root";
$password = "";

// create a connection

$conn = mysqli_connect($servername , $username , $password);
// create a database

if(!$conn){
    die("sorry we failed to connect : " . mysqli_connect_error());
}

echo "connect was successfully";




$sql = "CREATE DATABASE dbnikki6";
 $result =  mysqli_query($conn , $sql);
// echo "this is result " .var_dump($result);


//check database creation is sucessfully or not
if($result){
   echo "<br> sucessfully";
}
else{
    echo "the db is not successfully" .mysqli_error($conn);
}



?>

</body>
</html>


