<?php 
session_start();
$thisPage = "Shop";

if (isset($_SESSION['authenticated']) && !$_SESSION['authenticated'] || !isset($_SESSION['authenticated'])) {
  header("Location: https://peaceful-ravine-93431.herokuapp.com/login.php");
  //header("Location: http://localhost/~Jonathan/CS401/login.php");
}
?>

<html>

<head>
  <title>Jonathan Tipton - Shop</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
  <nav class="nav-container">
    <?php require("phpincludes/navbar.php") ?>
  </nav>
</header>

<body>
  <h1>SHOP</h1>
  <div>
    
      <div class="container">
        <p><a href = "account.php">Account Info</a></p>
        <?php
        if(isset($_SESSION["DisplayName"])) {
          $DisplayName = $_SESSION["DisplayName"];
          echo "<h2>Welcome $DisplayName!</h2>";
      }
      ?>
      <form action="logout_handler.php" method="post">
        <button type="submit">Logout</button>
      
    </form>
    </div>
  </div>
  <div class="content">
    <div class="row">

      <div class="column">
        <div class="card">
          <h1>T.A. Moulton Barn</h1>
          <a href="Media/barn.jpg" download>
              <img src="Media/barn.jpg">
          <a>
            <h4>Click image for free download</h4>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h1>Bears in Grand Teton</h1>
          <a href="Media/bears.jpg" download>
              <img src="Media/bears.jpg">
          <a>
            <h4>Click image for free download</h4>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h1>"Trip" in the Mountains"</h1>
          <a href="Media/trip.jpg" download>
              <img src="Media/trip.jpg">
          <a>
            <h4>Click image for free download</h4>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="column">
        <div class="card">
          <h1>Rainbow Galaxy</h1>
          <a href="Media/milkyway.jpg" download>
              <img src="Media/milkyway.jpg">
          <a>
            <h4>Click image for free download</h4>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h1>Shoshone Cliffside</h1>
          <a href="Media/shoshone.jpg" download>
              <img src="Media/shoshone.jpg">
          <a>
            <h4>Click image for free download</h4>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h1>T.A. Moulton Barn (Comets)</h1>
          <a href="Media/barnStars.jpg" download>
              <img src="Media/barnStars.jpg">
          <a>
            <h4>Click image for free download</h4>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h1>"Boise Timelapse"</h1>
          <a href="Media/citylapse.mp4" download>
              <img src="Media/citylapse.mp4">
          <a>
            <h4>Click image for free download</h4>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <h1>Grand Teton Landscape</h1>
          <a href="Media/horses.jpeg" download>
              <img src="Media/horses.jpeg">
          <a>
            <h4>Click image for free download</h4>
        </div>
      </div>
    </div>
  </div>
</body>
<footer>
  <?php include("phpincludes/footer.php"); ?>
</footer>

</html>
