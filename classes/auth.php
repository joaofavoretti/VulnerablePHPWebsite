<?php
  session_start();
  require('../classes/db.php'); 
  require('../classes/user.php'); 

  error_log(print_r($_POST, TRUE));

  if (isset($_POST["user"]) and isset($_POST["password"]) )
    if (User::login($_POST["user"],$_POST["password"]))  
      $_SESSION["admin"] = User::SITE;

  if (!isset($_SESSION["admin"] ) or $_SESSION["admin"] != User::SITE) {
    header( 'Location: /admin/login.php' ) ;
    die();
  }
  
?>
