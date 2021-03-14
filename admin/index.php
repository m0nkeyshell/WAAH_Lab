<?php
session_start();
   include("../Config/config.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $myusername = mysqli_real_escape_string($db,$_POST['adminuser']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pswd']); 
      
      $sql = "SELECT id, username FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      if($row['username'] == $myusername){
         $_SESSION['adminuser'] = $row['username'];
         header('location: welcome.php');
      
      }else {
         $error = "Some problem";
      }
      
      $count = mysqli_num_rows($result);
      
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
</br>
  <h2>Admin Login</h2>
  </br>
  </br>
  <form class="form-inline" method="POST">
    <label for="email2" class="mb-2 mr-sm-2">Username:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="Enter Username" name="adminuser">
    <label for="pwd2" class="mb-2 mr-sm-2">Password:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="Enter password" name="pswd">  
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </form>
</div>

</body>
</html>