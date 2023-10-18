<?php 
  require("../classes/auth.php");
  require("header.php");
  require("../classes/db.php");
  require("../classes/phpfix.php");
?>

  <form action="index.php" method="POST" enctype="multipart/form-data">
    Game Name: <input type="text" name="game_name" required /><br/><br />

    Game Genre: 
    <select name="game_genre">
      <option value="Sandbox">Sandbox</option>
      <option value="RPG">RPG</option>
      <option value="Battle Royale">Battle Royale</option>
    </select><br /><br />

    Image Feature Left: <input type="file" name="image_feature_left" required /><br/><br />

    Image Feature Right: <input type="file" name="image_feature_right" required /><br/><br />
    
    Youtube Video URL: <input type="text" name="youtube_video_url" required /><br/><br />

    Game Description: <textarea name="game_description" required ></textarea><br/><br />

    Game Stars: <input type="text" name="game_stars" required /><br/><br />

    Game Downloads: <input type="text" name="game_downloads" required /><br/><br />

    Game Size: <input type="text" name="game_size" required /><br/><br />

    Game Type: <input type="text" name="game_type" required /><br/><br />

    Image Example 1: <input type="file" name="image_example_1" required /><br/><br />

    Image Example 2: <input type="file" name="image_example_2" required /><br/><br />

    Image Example 3: <input type="file" name="image_example_3" required /><br/><br />

    <input type="submit" name="Adicionar" value="Add">
  </form>

<?php
  require("footer.php");

?>

