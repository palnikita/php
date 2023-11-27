
<?php
$insert = false;
$delete = false;
//connect to database
$servername ="localhost";
$username = "root";
$password = "";
$database ="crud";


// create a connection

$conn = mysqli_connect($servername , $username , $password , $database);


if(!$conn){
    die("<br> sorry we failed to connect : " . mysqli_connect_error());
}


 //echo "<br> connect was successfully <br>";
//if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['done'])){
    $name1 = $_POST['name1'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
 $sql = "INSERT INTO `crud1` ( `name`, `email`, `password`) VALUES ( '$name1', '$email', '$pass')";
 $result =  mysqli_query($conn , $sql);

 if($result){
   $insert = true;
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
} 
}

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

       
    


    <title>php crud</title>
</head>

<body>
   


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" >Search</button>
                </form>
            </div>
        </div>
    </nav>

    

  <?php
  if($insert){
   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
 Successfully record saved
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
   
   
 ?> 


    <div class="container my-4">
        <h2>ADD CLIENT</h2>
        <form action="" method="post">
                        <div class="mb-3">
                <label for="name1" class="form-label">Name</label>
                <input type="text" class="form-control" id="name1" name="name1">
            </div>
            <div class="mb-3">
                <label for="email" class="form-email">Email address</label>
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
            <button type="submit" class="btn btn-primary" name="done">Add</button>
        </form>
    </div>


    <div class="container my-4">
    
    <button class="btn btn-primary my-2"><a href="addtrain.php"></a></button>
<table class="table " id="myTable">
  <thead>
    <tr>
      <th scope="col">SNO</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>

  <?php
        $sql = " SELECT * FROM `crud1`";
         $result =  mysqli_query($conn , $sql);
           //$sno =0;
         while($row = mysqli_fetch_assoc($result)){
           //  $sno = $sno+1;
                                      
            $sno = $row['sno'];
            $name = $row['name'];
            $email = $row['email'];
            $password = $row['password'];
            echo '<tr>
              <td scope = "row">'.$sno.'</td>
            
              <td scope = "row">'.$name.'</td>
            
              <td scope = "row">'.$email.'</td>
            
              <td scope = "row">'.$password.'</td>
              <td> 
              <button class="btn btn-primary"><a href="update1.php?updateid='.$sno.'"
               class="text-light">Update</a></button>

              <button class="btn btn-danger"><a href="delete2.php?deleteid='.$sno.'"
               class="text-light">Delete</a></button>
              </td>
            
            
            </tr>';
          
         }
         
    
        
         
        
            // echo $row['sno'] . ". hello  "  .$row['name'] .  " your email is    " . $row['email']. " and your password is   ".$row['password'];
            // echo "<br>";
            ?>
         
      
        
  </tbody>
</table>
    
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script> 

 <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function() {
    $( '#myTable').dataTable();
}
); 
</script>





    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>