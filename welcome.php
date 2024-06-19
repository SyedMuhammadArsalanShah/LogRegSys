<?php

session_start();
if (!isset($_SESSION["logIN"]) || $_SESSION["logIN"] != true) {

    header("location:login.php");

    exit;
}

?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        h3 {
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>




    <?php

    require "partials/navbar.php";

    ?>


    <div class="container mt-5">

    <!-- <h1 style="color: #CACACA;text-align: center;">I Task App</h1> -->
        <?php echo "<h3 > Welcome In our I Task App <span class='badge text-bg-primary'> " . $_SESSION["username"] . "</span></h3>";
        require "lecture05TodoApp.php";
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>