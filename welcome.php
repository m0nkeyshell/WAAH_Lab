<?php
include("./session.php");
include("./Config/config.php");

if(isset($_POST["username"])){

   $username = $_POST['username'];
   $workupdate = $_POST['workUpdate']; 
   
  $sql = "insert into workupdate(username, workupdate) values('$username', '$workupdate')";
   if ($db->query($sql) === TRUE) {
      $error = "Work Update sent!";
      echo  "<script>alert('". $error. "')</script>";
    } else {
      $error = "Something went wrong!";
      echo  "<script>alert('". $error. "')</script>";
    }
}

?>
<html">
   <head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

   
   </head>
   <body class="container">

<h1>Welcome <?php echo $_SESSION['username']; ?></h2>

<br><br>
<h3>Send your work update!</h3>
<br>
<form method="post">
  <div class="form-group">
    <label for="exampleFormControlTextarea1"></label>
    <textarea name="workUpdate" placeholder="Your work update..." class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>" />

  <br>
  <button type="submit" class="btn btn-primary">Submit</button>

  <inpu>
</form>
   </body>
   
</html>