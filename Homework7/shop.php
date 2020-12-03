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

    <span>Cart-Graphic</span>
  </div>


  <div class="content">
    <div class="row">
      <div class="column">
        <div class="card">
          <img src="https://www.w3schools.com/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
          <h1>Tailored Jeans</h1>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button>Add to Cart</button></p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="https://www.w3schools.com/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
          <h1>Tailored Jeans</h1>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button>Add to Cart</button></p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="https://www.w3schools.com/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
          <h1>Tailored Jeans</h1>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button>Add to Cart</button></p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="https://www.w3schools.com/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
          <h1>Tailored Jeans</h1>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button>Add to Cart</button></p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div>
</body>
<footer>
  <?php include("phpincludes/footer.php"); ?>
</footer>

</html>
