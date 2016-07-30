<?php
//From tutorial https://www.youtube.com/watch?v=Yb3c-HljFro

?>

<html>
    <head>
        <title>Ajax search with auto suggest from DB</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php
            require 'db/database.php';
        ?>

        <span id="box">
            <input type="text" id="search_box"> <button id="search_button">Search</button>
        </span>
        <div id="search_result"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="js/main.js"></script>


    </body>
</html>
