<?php
  session_start(); 
  session_destroy();
  require("../classes/db.php");
  require("../classes/phpfix.php");
  // require("../classes/picture.php");
  
?>
<html>
  <body>
   <div id="box">

      <h1>Login</h1>
      <div class="block" id="block-login">
        <h2>Login Box</h2>
        <div class="content login">
          <div class="flash">
          </div>



          <form action="index.php" method="POST" class="form login">
            <div class="group wat-cf">
              <div class="left">
                <label class="label right">Login</label>
              </div>
              <div class="right">

                <input type="text" class="text_field" name="user" />
              </div>
            </div>
            <div class="group wat-cf">
              <div class="left">
                <label class="label right">Password</label>
              </div>
              <div class="right">

                <input type="password" class="text_field" name="password" />
              </div>
            </div>
            <div class="group navform wat-cf">
              <div class="right">
                <button class="button" type="submit">
                  Login
                </button>
              </div>

            </div>
          </form>
  


<?
  require("footer.php");

?>

