<?php 

session_start();

if($_SESSION['adminuser'] == false) {
    //print_r($_SESSION['username']);
   header('location: index.php');
   }
  $adminuser =  $_SESSION['adminuser'] ;


   ?>