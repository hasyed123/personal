<!DOCTYPE html>
<html>
<head>
    <title>Experience</title>
    <meta charset="UTF-8">
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/common.css" rel="stylesheet">
    <link href="../css/experience.css" rel="stylesheet">
</head>
<body>
    <?php
        include "header.php";

    ?>
    <main>
        <?php
            include "experienceDetails.inc";
            foreach($jobs as $job){
                echo '<div>';
                echo '<h1>'.$job->company.'</h1>';
                echo '<p>'.$job->role.'</p>';
                echo '<p>'.$job->company.'</p>';
                echo '<p>'.$job->location.'</p>';
                echo '<p>'.$job->timeframe.'</p>';
                echo '<img src = "../images/experience/'.$job->img.'.jpg">';
                echo '</div>';
            }
            

        ?>
    </main>
    <?php
        include "footer.php";
    ?>
    <script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/experience.js"></script>
</body>
</html>