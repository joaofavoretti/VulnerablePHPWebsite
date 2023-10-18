<?php 
  require("../classes/auth.php");
  require("../classes/db.php");
  require("../classes/phpfix.php");
  require("../classes/details.php");
  // require("../classes/picture.php");

   if(isset($_FILES['image_feature_left'])){
      Detail::add();
   }
?>

<html>
  <head>
    <title>Administração</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      h1, h2, h3 {
        color: #333;
      }
      #content {
        background-color: #fff;
        padding: 20px;
        margin: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
      }
    </style>
  </head>
  <body>

    <?php require('header.php') ?>

    <div id="content">
      <h2>Jogos Adicionados </h2>
      <div>
        <?php Detail::renderAll(); ?>
      </div>
    </div>
  </body>
</html>
