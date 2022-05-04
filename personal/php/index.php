<!DOCTYPE html>
<html>
<head>
    <title>Hasan Syed</title>
    <meta charset="UTF-8">
    <link href="../css/reset.css" rel = "stylesheet">
    <link href="../css/common.css" rel = "stylesheet">
    <link href="../css/index.css" rel = "stylesheet">
</head>
<body>
    <?php
        include "header.php";

    ?>
    <main>
            <div id="bio">
            <h1>Hasan Syed</h1>
            <p>Algoma University</p>
            <p>hsyed@algomau.ca</p>
            </div>
            <figure>
                <img src="../images/home/mypicture.jpg">
                <figcaption>My Picture</figcaption>
            </figure>
            
        
    </main>
    <div class="intro">
        <div class="intro-text">
            <h1>
                <span class="text">Welcome To </span>
            </h1>
            <h1>
                <span class="text">My Website </span>
            </h1>
        </div>
    </div>
    <div class="slider"></div>
    <?php
        include "footer.php";
    ?>
    <script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js" 
        integrity="sha512-kVlGhj2qFy+KBCFuvjBJTGUMxbdqJKs4yK2jh0e0VPhWUPiPC87bzm4THmaaIee3Oj7j6sDpTTgm2EPPiESqBg==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    </script>
    <script src="../js/header.js"></script>
    <script src="../js/index.js"></script>
</body>
</html>