<div><a href="index.php" class="logo">
    <img src="Media/logo.png" alt="icon">
  </a>
  <ul class="navbar monospace">
    <li<?php if ($thisPage == "About")
          echo " id=\"active\""; ?>>
      <a href="about.php">About Me</a></li>
      <li<?php if ($thisPage == "Arcade")
            echo " id=\"active\""; ?>>
        <a href="arcade.php">Arcade</a></li>
        <li<?php if ($thisPage == "Gallery")
              echo " id=\"active\""; ?>>
          <a href="gallery.php">Gallery</a></li>
          <li<?php if ($thisPage == "Shop")
                echo " id=\"active\""; ?>>
            <a href="shop.php">Shop</a></li>
  </ul>
</div>