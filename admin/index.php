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
  <title>Administração</title>
  <body>

    <?php require('header.php'); ?>

    <div>
      <?php Detail::renderAll(); ?>
    </div>
  </body>
</html>
