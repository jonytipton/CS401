<?php $thisPage = "Gallery"; ?>
<html>
<head>
    <title>Jonathan Tipton - Gallery</title>
    <link rel="stylesheet" type="text/css" href="galleryStyle.css">
</head>
<header>
    <nav class="nav-container">
        <?php require("phpincludes/navbar.php") ?>
    </nav>
</header>
    <div class="gallery-text">
        <h1>GALLERY</h1>
    </div>
    <body>


<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="Media/teton.jpeg"  onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="Media/gopher.jpg" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="Media/grand.jpeg"  onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="Media/trails.jpeg"  onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs.alt;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}
</script>

</body>
<footer>
    <?php include("phpincludes/footer.php") ?>
</footer>
</html>