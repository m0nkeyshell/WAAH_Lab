<?php
include("./session.php");
include("../Config/config.php");

$sql = "SELECT * FROM workUpdate";
$res = $db->query($sql);
$count = 0;

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">Settings</a>
  <a href="addUser.php">Add User</a>
  <div class="login-container">
    <form action="logout.php">
      <button type="submit">Sign Out</button>
    </form>
  </div>
</div>
<div style="padding-left:16px">
  <h1>Welcome <?php echo $adminuser; ?></h1>
 <br><br>
</div >
  <div style="padding-left:16px">
  <h4> Work Update Messages!!</h4><br>

<?php 
while($row = @mysqli_fetch_array($res)){
  $count++;
  $username = $row['username'];
  $message = $row['workupdate'];

?>

  <b><p>Username: <?php echo $username; ?></p></b>
  <p>
  <pre>
  <?php echo $message; ?>
  </pre>
  <p>
<?php } ?>

  </div>
</body>
</html>
