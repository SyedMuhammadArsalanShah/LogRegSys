<?php
$showerror = false;

$login = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "partials/conn.php";
    $email = $_POST["useremail"];
    $pass = $_POST["userpass"];
    $sqlselect = "select * from info where Email = '$email'";
    $result = mysqli_query($con, $sqlselect);
    $row = mysqli_num_rows($result);
    if ($row == 1) {
        while ($item = mysqli_fetch_assoc($result)) {
            password_verify($pass, $item["PASSWORD"]);

            $login = true;

            session_start();

            $_SESSION["email"] = $email;
            $_SESSION["username"] = $item["NAME"];
            $_SESSION["logIN"] = true;



            header("location:welcome.php");
        }
    }
}



?>






















<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InfoSys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php
    require "partials/navbar.php";
    ?>

    <?php
    if ($login) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Your account successfully login.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
           </div>";
    }



    ?>

    <?php
    if ($showerror) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Error !</strong> ." . $showerror . "
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
           </div>";
    }



    ?>




    <div class="container">

        <form method="post" action="login.php">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="useremail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="userpass" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>