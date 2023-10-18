<?php 
  require("../classes/auth.php");
  require("../classes/db.php");
  require("../classes/phpfix.php");
?>
<html>
  <head>
    <title>Administração</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        width: 50%;
        margin: 20px auto;
      }
      input[type="text"], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <?php require("header.php") ?>

    <form action="index.php" method="POST" enctype="multipart/form-data">
      Game Name: <input type="text" name="game_name" required /><br/>

      Game Genre: 
      <select name="game_genre">
        <option value="Sandbox">Sandbox</option>
        <option value="RPG">RPG</option>
        <option value="Battle Royale">Battle Royale</option>
      </select><br />

      Image Feature Left: <input type="file" name="image_feature_left" required /><br/><br/>

      Image Feature Right: <input type="file" name="image_feature_right" required /><br/><br/>
      
      Youtube Video URL: <input type="text" name="youtube_video_url" required /><br/>

      Game Description: <textarea name="game_description" required ></textarea><br/>

      Game Stars: <input type="text" name="game_stars" required /><br/>

      Game Downloads: <input type="text" name="game_downloads" required /><br/>

      Game Size: <input type="text" name="game_size" required /><br/>

      Game Type: <input type="text" name="game_type" required /><br/>

      Image Example 1: <input type="file" name="image_example_1" required /><br/><br/>

      Image Example 2: <input type="file" name="image_example_2" required /><br/><br/>

      Image Example 3: <input type="file" name="image_example_3" required /><br/><br/>

      <input type="submit" name="Adicionar" value="Add">
    </form>
  </body>
</html>
