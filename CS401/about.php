<?php $thisPage = "About"; ?>
<html>

<head>
    <title>Jonathan Tipton - About Me</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <nav class="nav-container">
        <?php require("phpincludes/navbar.php") ?>
    </nav>
</header>
<div>
    <div class="about-text">
        <h1>ABOUT ME</h1>
        <h2>Education</h2>
        <p> Hi there, my name is Jonathan Tipton. I am a student at Boise State Univeristy currently
            pursuing a B.S. double major in Computer Science and "Games, Interactive Media, Mobile"
            (more easily referred to as GIMM). After my planned graduation in Spring 2022...lorem ipsum</p>
        <h2>Experience</h2>
        <p> TODO - list of programming languages and technologies/software familiar with.</p>
        <h2>Interests</h2>
        <p> TODO - write up lists of hobbies and outside interests</p>
        <h2>Repos & Contact</h2>
        <p> TODO - insert social/professional links. Add email button originally on index</p>
    </div>
    <div>
        <img class="about-image" src="Media/selfie.jpeg" alt="selfie">
    </div>
</div>
<footer>
    <?php include("phpincludes/footer.php") ?>
</footer>

</html>