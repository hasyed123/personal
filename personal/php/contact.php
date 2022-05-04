<!DOCTYPE html>
<html>
<head>
    <title>Contact me</title>
    <meta charset="UTF-8">
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/common.css" rel="stylesheet">
    <link href="../css/contact.css" rel="stylesheet">
</head>
<body>
    <?php
        include "header.php";

    ?>
    <main>
        <div>
            <form action = "insert.php" method = "POST">
                <input name = "message" placeholder = "Type your message here" id="message">
                <br>
                <input name = "email" placeholder = "Email address" id="email">
                <button id="submit">Submit</button>
                
            </form>
            <p id="submitMessage"></p>
            

        </div>
    </main>
    <?php
        include "footer.php";
    ?>
    <script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/contact.js"></script>
    
</body>
</html>