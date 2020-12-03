<?php $thisPage="index"; ?>
<html>
<head>
  <title>Jonathan Tipton - Welcome</title>
  <link rel="stylesheet" type="text/css" href="myStyle.css">
  <link rel="icon" type="image/png" href="Media/logo.png">
  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script>
     $(document).ready(function(){
            $("#byName").hide().fadeIn(2500);
            $("#name").hide().delay(500).fadeIn(2500)});
    </script>

</head>
<nav class="nav-container">
  <?php require('phpincludes/navbar.php'); ?>
</nav>
<body class="staticSplash">
    <div class="slogan-text">
      <h1>
        <span class ="font-courier item-1">Coding{}<br>👨🏻‍💻</span>
        <span class ="font-copperplate item-2">Game_Design<br>👾</span>
        <span class ="font-cursive item-3">[Photography]<br>📸</span>
      </h1>
      <div class="name-span">
    <h3 id="byName">by</h3>
    <h2 id="name">Jonathan Tipton</h2>  
</div>
</div>

</div>


</body>
<footer class=".white-text">
    <?php include("phpincludes/footer.php") ?>
  </footer>
</html>
