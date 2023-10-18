<?php
require "db.php";

class Detail {
  public $game_id, $game_name, $game_genre, $image_feature_left, $image_feature_right, $youtube_video_url, $game_description, $game_stars, $game_downloads, $game_size, $game_type, $image_example_1, $image_example_2, $image_example_3;

  function __construct($game_id) {
      $this->game_id = $game_id;
  }

  static function getDetails($game_id) {
      $sql = "SELECT * FROM details WHERE id = " . $game_id;

      $results = mysql_query($sql);

      if ($results) {
          $row = mysql_fetch_assoc($results);

          if ($row == null) {
              return null;
          }

          $detail = new Detail($game_id);
          
          $detail->game_name = $row['game_name'];
          $detail->game_genre = $row['game_genre'];
          $detail->image_feature_left = $row['image_feature_left'];
          $detail->image_feature_right = $row['image_feature_right'];
          $detail->youtube_video_url = $row['youtube_video_url'];
          $detail->game_description = $row['game_description'];
          $detail->game_stars = $row['game_stars'];
          $detail->game_downloads = $row['game_downloads'];
          $detail->game_size = $row['game_size'];
          $detail->game_type = $row['game_type'];
          $detail->image_example_1 = $row['image_example_1'];
          $detail->image_example_2 = $row['image_example_2'];
          $detail->image_example_3 = $row['image_example_3'];
      
          return $detail;
      }

      echo mysql_error();

      return null;
  }

  static function render($game_id) {
      $detail = Detail::getDetails($game_id);
      Detail::renderDetail($detail);
  }

  static function renderDetail($detail) {

      if ($detail == null) {
          ?>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="page-content">
                  <div class="game-details">
                    <div class="row">
                      <div class="col-lg-12">
                        <h2 style="text-transform: uppercase;"><?php echo "Game not found" ?></h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
          
          $html = ob_get_clean();

          echo $html;
        
          return;
      }
      
      ob_start();
      ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-content">

              <!-- ***** Featured Start ***** -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="feature-banner header-text">
                    <div class="row">
                      <div class="col-lg-4">
                        <img src="assets/images/<?php echo $detail->image_feature_left ?>" alt="" style="border-radius: 23px; height: 300px; object-fit: cover; object-position: center;">
                      </div>
                      <div class="col-lg-8">
                        <div class="thumb">
                          <img src="assets/images/<?php echo $detail->image_feature_right ?>" alt="" style="border-radius: 23px; height: 300px; object-fit: cover; object-position: center;">
                          <a href="<?php echo $detail->youtube_video_url ?>" target="_blank"><i class="fa fa-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ***** Featured End ***** -->

              <!-- ***** Details Start ***** -->
              <div class="game-details">
                <div class="row">
                  <div class="col-lg-12">
                    <h2 style="text-transform: uppercase;"><?php echo $detail->game_name ?> Details</h2>
                  </div>
                  <div class="col-lg-12">
                    <div class="content">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="left-info">
                            <div class="left">
                              <h4 style="text-transform: capitalize;"><?php echo $detail->game_name ?></h4>
                              <span><?php echo $detail->game_genre ?></span>
                            </div>
                            <ul>
                              <li><i class="fa fa-star"></i> <?php echo $detail->game_stars ?></li>
                              <li><i class="fa fa-download"></i> <?php echo $detail->game_downloads ?></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="right-info">
                            <ul>
                              <li><i class="fa fa-star"></i> <?php echo $detail->game_stars ?></li>
                              <li><i class="fa fa-download"></i> <?php echo $detail->game_downloads ?></li>
                              <li><i class="fa fa-server"></i> <?php echo $detail->game_size ?></li>
                              <li><i class="fa fa-gamepad"></i> <?php echo $detail->game_type ?></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <img src="assets/images/<?php echo $detail->image_example_1 ?>" alt="" style="border-radius: 23px; margin-bottom: 30px; height: 220px; object-fit: cover; object-position: center;">
                        </div>
                        <div class="col-lg-4">
                          <img src="assets/images/<?php echo $detail->image_example_2 ?>" alt="" style="border-radius: 23px; margin-bottom: 30px; height: 220px; object-fit: cover; object-position: center;">
                        </div>
                        <div class="col-lg-4">
                          <img src="assets/images/<?php echo $detail->image_example_3 ?>" alt="" style="border-radius: 23px; margin-bottom: 30px; height: 220px; object-fit: cover; object-position: center;">
                        </div>
                        <div class="col-lg-12">
                          <?php echo $detail->game_description ?>
                        </div>
                        <div class="col-lg-12">
                          <div class="main-border-button">
                            <a href="#">Download <?php echo $detail->game_name ?> Now!</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ***** Details End ***** -->

              <!-- ***** Other Start ***** -->
              <div class="other-games">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="heading-section">
                      <h4><em>Other Related</em> Games</h4>
                    </div>
                  </div>
                  <?php if ($detail->game_id != "1"): ?>
                    <div class="col-lg-6">
                      <div class="item">
                        <img src="assets/images/fortnite-feature-left.jpg" alt="" class="templatemo-item">
                        <h4><a href="/details.php?game=1">Fortnite</a></h4><span>Sandbox</span>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                        </ul>
                      </div>
                    </div>
                  <?php endif; ?>
                  <?php if ($detail->game_id != '2'): ?>
                  <div class="col-lg-6">
                    <div class="item">
                      <img src="assets/images/pubg-feature-left.jpg" alt="" class="templatemo-item">
                      <h4><a href="/details.php?game=2">PUBG</a></h4><span>Battle Royale</span>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.5</li>
                        <li><i class="fa fa-download"></i> 1.2M</li>
                      </ul>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if ($detail->game_id != '3'): ?>
                  <div class="col-lg-6">
                    <div class="item">
                      <img src="assets/images/minecraft-feature-left.jpg" alt="" class="templatemo-item">
                      <h4><a href="/details.php?game=3">Minecraft</a></h4><span>Sandbox</span>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.9</li>
                        <li><i class="fa fa-download"></i> 1.5M</li>
                      </ul>
                    </div>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
              <!-- ***** Other End ***** -->

            </div>
          </div>
        </div>
      </div>
      <?php
      $html = ob_get_clean();
      echo $html;
  }

  static function getAllDetails() {
    $details = array();

    $sql = "SELECT * FROM details";

    $results = mysql_query($sql);

    if ($results) {
      while ($row = mysql_fetch_assoc($results)) {
        $detail = new Detail($row['id']);
        
        $detail->game_name = $row['game_name'];
        $detail->game_genre = $row['game_genre'];
        $detail->image_feature_left = $row['image_feature_left'];
        $detail->image_feature_right = $row['image_feature_right'];
        $detail->youtube_video_url = $row['youtube_video_url'];
        $detail->game_description = $row['game_description'];
        $detail->game_stars = $row['game_stars'];
        $detail->game_downloads = $row['game_downloads'];
        $detail->game_size = $row['game_size'];
        $detail->game_type = $row['game_type'];
        $detail->image_example_1 = $row['image_example_1'];
        $detail->image_example_2 = $row['image_example_2'];
        $detail->image_example_3 = $row['image_example_3'];

        $details[] = $detail;
      }

      return $details;
    }

    echo mysql_error();

    return null;
  }

  static function renderAll() {
    $details = Detail::getAllDetails();

    foreach ($details as $detail) {
      Detail::renderSimpleDetail($detail);
    }
  }

  static function renderSimpleDetail($detail) {
    ob_start();
    ?>
    <div style="display: flex; align-items: center; margin-bottom: 20px;">
      <img src="../assets/images/<?php echo $detail->image_feature_left ?>" alt="<?php echo $detail->game_name ?>" style="width: 100px; height: 100px; margin-right: 20px;">
      <div>
        <h3 style="margin: 0;"><a href="/details.php?game=<?php echo $detail->game_id ?>"><?php echo $detail->game_name ?></a></h3>
        <p style="margin: 0;"><?php echo $detail->game_genre ?></p>
        <ul style="display: flex; list-style: none; padding: 0; margin: 0;">
          <li style="margin-right: 10px;"><i class="fa fa-star"></i> <?php echo $detail->game_stars ?></li>
          <li><i class="fa fa-download"></i> <?php echo $detail->game_downloads ?></li>
        </ul>
      </div>
    </div>
    <?php
    $html = ob_get_clean();

    echo $html;
  }

  static function add() {
    error_log("add");
    error_log(print_r($_FILES, true));

    $dir = '../assets/images/';

    $game_name = $_POST['game_name'];
    $game_genre = $_POST['game_genre'];
    $image_feature_left = $_FILES['image_feature_left']['name'];
    $image_feature_right = $_FILES['image_feature_right']['name'];
    $youtube_video_url = $_POST['youtube_video_url'];
    $game_description = $_POST['game_description'];
    $game_stars = $_POST['game_stars'];
    $game_downloads = $_POST['game_downloads'];
    $game_size = $_POST['game_size'];
    $game_type = $_POST['game_type'];
    $image_example_1 = $_FILES['image_example_1']['name'];
    $image_example_2 = $_FILES['image_example_2']['name'];
    $image_example_3 = $_FILES['image_example_3']['name'];

    $sql = "INSERT INTO details (game_name, game_genre, image_feature_left, image_feature_right, youtube_video_url, game_description, game_stars, game_downloads, game_size, game_type, image_example_1, image_example_2, image_example_3) VALUES ('$game_name', '$game_genre', '$image_feature_left', '$image_feature_right', '$youtube_video_url', '$game_description', '$game_stars', '$game_downloads', '$game_size', '$game_type', '$image_example_1', '$image_example_2', '$image_example_3')";
  
    $results = mysql_query($sql);

    if ($results) {
      move_uploaded_file($_FILES['image_feature_left']['tmp_name'], $dir . $image_feature_left);
      move_uploaded_file($_FILES['image_feature_right']['tmp_name'], $dir . $image_feature_right);
      move_uploaded_file($_FILES['image_example_1']['tmp_name'], $dir . $image_example_1);
      move_uploaded_file($_FILES['image_example_2']['tmp_name'], $dir . $image_example_2);
      move_uploaded_file($_FILES['image_example_3']['tmp_name'], $dir . $image_example_3);
    } else {
      echo "Error: ";
      echo mysql_error();
    }
  }

  
}

?>