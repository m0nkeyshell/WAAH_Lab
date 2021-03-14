<?php

session_start();


if($_SESSION['username'] == false) {
    //print_r($_SESSION['username']);
    header('location: login.php');
   }


?>