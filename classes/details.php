<?php
require "db.php";

class Detail {
    public $game_name, $game_genre, $image_feature_left, $image_feature_right, $youtube_video_url, $game_description, $game_stars, $game_downloads, $game_size, $game_type, $image_example_1, $image_example_2, $image_example_3;

    function __construct($game_name) {
        
        $this->game_name = $game_name;
        
        $this->getDetails($game_name);
    }

    function getDetails($game_name) {
        // print "Hello World";

        $sql = "SELECT * FROM details WHERE game_name = '$game_name'";
        $results = mysql_query($sql);

        $row = mysql_fetch_assoc($results);
        if ($row) {
            $this->game_genre = $row['game_genre'];
            $this->image_feature_left = $row['image_feature_left'];
            $this->image_feature_right = $row['image_feature_right'];
            $this->youtube_video_url = $row['youtube_video_url'];
            $this->game_description = $row['game_description'];
            $this->game_stars = $row['game_stars'];
            $this->game_downloads = $row['game_downloads'];
            $this->game_size = $row['game_size'];
            $this->game_type = $row['game_type'];
            $this->image_example_1 = $row['image_example_1'];
            $this->image_example_2 = $row['image_example_2'];
            $this->image_example_3 = $row['image_example_3'];
        }
    }
}

?>