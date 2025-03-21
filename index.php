<?php 
session_start(); 

include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ghibliesque</title>
    <style>
        body {
            background-image: url('images/main2.jpg');
            grid-template-rows: 1fr auto; /* Content takes available space, footer sticks */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: lightgrey;
            text-align: center;
            padding: 0;
        }
    </style>
</head>
<body>
    <?php include 'navbar.html'; ?>

    <footer>
        <h4>&copy; Studio Ghibli</h4>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>
</html>

