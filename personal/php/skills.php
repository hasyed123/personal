<!DOCTYPE html>
<html>
<head>
    <title>Skills</title>
    <meta charset="UTF-8">
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/common.css" rel="stylesheet">
    <link href="../css/skills.css" rel="stylesheet">
</head>
<body>
    <?php
        include "header.php";

    ?>
    <main>
        <div class = "innerDiv">
        <div id = "technical">
            <h1>Technical Skills</h1>
            <ul class="outerList">
                <?php
                    include "skillsDetails.inc";

                    foreach($skillTypes as $skillType){
                        echo '<li>'.$skillType->name;
                        echo '<ul class="innerList">';
                        foreach($skillType->skills as $skill){
                            echo '<li>'.$skill->name.'</li>';
                        }
                        echo '</ul></li>';
                    }

                ?>
            </ul>
        </div>
        <div>
            <h1>Soft Skills</h1>
            <ul class = "outerList">
                <li>Communication
                    <ul class="innerList"><li>Greeted hundreds of customers daily at Walmart and Bakhter</li></ul>
                </li>
                <li>Problem Solving
                    <ul class="innerList"><li>Resolved customers' issues with their online grocery orders at Walmart</li></ul>
                </li>
                <li>Collaboration
                    <ul class="innerList"><li>Worked on a team at all of my previous jobs</li></ul>
                </li>
                <li>Organization
                    <ul class="innerList"><li>Managed issues in Jira at MPAC</li></ul>
                </li>
                
            </ul>
        </div>
        </div>

        <div class ="innerDiv" class = "images">
                <figure>
                    <img>
                </figure>

                <figure>
                    <img>
                </figure>
        </div>
    </main>
    <?php
        include "footer.php";
    ?>
    <script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/skills.js"></script>
</body>
</html>