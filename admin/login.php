<?php
  session_start(); 
  session_destroy();
  require("../classes/db.php");
  require("../classes/phpfix.php");
  
?>
<html>
  <head>
    <title>Login</title>
    <style>
      body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
      }
      .container {
        margin: 0 auto;
        max-width: 400px;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
      }
      h1 {
        text-align: center;
        margin-bottom: 20px;
      }
      label {
        display: block;
        margin-bottom: 5px;
      }
      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
        box-sizing: border-box;
      }
      button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
      }
      button[type="submit"]:hover {
        background-color: #3e8e41;
      }
    </style>
  </head>
  <body>
   <div class="container">
      <h1>Login</h1>
      <div>
        <div>
          <div>
          </div>
          <form action="index.php" method="POST" class="form login">
            <div>
              <div>
                <label>Username</label>
              </div>
              <div>
                <input type="text" name="user" />
              </div>
            </div>
            <div>
              <div>
                <label>Password</label>
              </div>
              <div>
                <input type="password" name="password" />
              </div>
            </div>
            <div>
              <div>
                <button type="submit">
                  Login
                </button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
