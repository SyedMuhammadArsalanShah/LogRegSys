<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "infosys";

$con = mysqli_connect($server, $username, $password, $db);

if (!$con) {
    die("connection is failed " . mysqli_connect_error());
} else {
    // echo "is success";
}
?>