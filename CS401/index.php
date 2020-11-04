<?php $thisPage="index"; ?>
<html>
<head>
  <title>Jonathan Tipton - Welcome</title>
  <link rel="stylesheet" type="text/css" href="myStyle.css">
  <link rel="icon" type="image/png" href="Media/logo.png">
</head>
<nav class="nav-container">
  <?php require('phpincludes/navbar.php'); ?>
</nav>
<body class="staticSplash">
    <div class="slogan-text">
      <h1>
        <span class ="font-courier">Coding{}</span>
        <span class ="font-copperplate">Game_Design</span>
        <span class ="font-cursive">Photography</span>
        <span class ="italicized font-fantasy ">Alternate Realities?</span>
      </h1>
      <a class="contact-button display-block underline" href="#">todo: move contact button to about and make a modality</a>
      <a class="contact-button display-block underline" href="#">todo: add page carousel below</a>
    </div>
    <div welcome>
    <hr class="welcome">
    <p class="white-text welcome welcome-text">Welcome to this site. TODO: Site description</p>
    </div>
</body>
<footer>
    <?php include("phpincludes/footer.php") ?>
  </footer>
</html>
