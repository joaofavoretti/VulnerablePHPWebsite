<?php
function generateNavigationMenu() {
  $pages = array(
    'index.php' => 'Home',
    'browse.php' => 'Browse',
    'details.php' => 'Details',
    'streams.php' => 'Streams',
    'profile.php' => 'Profile'
  );

  $currentPage = basename($_SERVER['PHP_SELF']);
  
  echo '<ul class="nav">';
  foreach ($pages as $url => $title) {
    $activeClass = ($currentPage == $url) ? 'class="active"' : '';
    echo "<script>console.log('$activeClass');</script>";
    echo "<li><a href=\"$url\" $activeClass>$title</a></li>";
  }
  echo '</ul>';
}

?>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.php" class="logo">
            <img src="assets/images/logo.png" alt="">
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Search End ***** -->
          <div class="search-input">
            <form id="search" action="#">
              <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
              <i class="fa fa-search"></i>
            </form>
          </div>
          <!-- ***** Search End ***** -->
          <!-- ***** Menu Start ***** -->
          <?php
            generateNavigationMenu();
          ?>

          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->