<?php $thisPage = "About"; ?>
<html>
<head>
    <title>Jonathan Tipton - About Me</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script>
        $(document).ready(function(){
            $(".about-image").hide().css({visibility: "visible"}).delay(500).fadeIn(5000);
            $("#t0").hide().css({visibility: "visible"}).fadeIn(2500);
            $("#t1").hide().css({visibility: "visible"}).delay(500).fadeIn(2500);

            $("#t2").hide().css({visibility: "visible"}).delay(2000).fadeIn(2500);
            $("#t3").hide().css({visibility: "visible"}).delay(2500).fadeIn(2500);
            $("#t4").hide().css({visibility: "visible"}).delay(2500).fadeIn(2500);

            $("#t5").hide().css({visibility: "visible"}).delay(4000).fadeIn(2500);
            $("#t6").hide().css({visibility: "visible"}).delay(4500).fadeIn(2500);
            $("#t7").hide().css({visibility: "visible"}).delay(4500).fadeIn(2500);

            $("#t8").hide().css({visibility: "visible"}).delay(6000).fadeIn(2500);
            $("#t9").hide().css({visibility: "visible"}).delay(6500).fadeIn(2500);
        });
</script>
</head>
<header>
    <nav class="nav-container">
        <?php require("phpincludes/navbar.php") ?>
    </nav>
</header>
<div>

    <div class="about-text">
        <h1>ABOUT ME</h1>
        <div class = "about-image-container">
        <img class="about-image" src="Media/selfie.jpeg" alt="selfie">
    </div>
        <h2 id="t0">Education & Work</h2>
        <p id="t1"> Student at Boise State Univeristy pursuing degrees in Computer Science and "Games, Interactive Media, Mobile Technology"
            (more easily referred to as GIMM). Looking forward to graduation in Spring 2022. Currently employed as a "Genius" at Apple.</p>
        <h2 id="t2">Experience</h2>
        <p id="t3"><strong>Languages:</strong> | ActionScript3 | C | C# | Java | JavaScript | Swift |</p>
        <p id="t4"><strong>Programs:</strong> | Adobe Creative Cloud | Blender | Maya | Unity | Xcode |</p>
        <h2 id="t5">Interests</h2>
        <p id="t6"><strong>Personal:</strong> | ⛰ Biking  | 🎮 Gaming | 🛶 Kayaking | 🎿 Snowboarding |</p>
        <p id = "t7"><strong>Professional:</strong> | 🕹 3D/VR Game Design | 💻 AR/iOS Applications | Front-End Developement | UI/UX Design |</p>
        <h2 id="t8">Contact & Repos</h2>
        <span id ="t9"> 
            <a href="https://github.com/jonytipton" target="_blank" class="fa fa-github"></a>
            <a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile" target="_blank" class="fa fa-linkedin"></a>  
            <a href="mailto:jonathantipton@u.boisestate.edu" class="fa fa-google"></a>   
        </span>
    </div>
    
</div>
<footer>
    <?php include("phpincludes/footer.php") ?>
</footer>

</html>