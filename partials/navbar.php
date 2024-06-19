<?php
if (!isset($_SESSION["logIN"]) || $_SESSION["logIN"] != true) {
    $loggedin = true;
} else {
    $loggedin = false;
}
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LRS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                <?php

                if ($loggedin) {


                    echo "
         
         <li class='nav-item'>
         <a class='nav-link' href='./Login.php'>Login</a>
       </li>
         

       <li class='nav-item'>
       <a class='nav-link' href='./signup.php'>Register</a>
     </li>";
                }


                if (!$loggedin) {

                    echo
                    "
 
         
       <li class='nav-item'>
     <a class='nav-link' href='#'>" . $_SESSION["email"] . "</a>
    
     </li>
         <li class='nav-item'>
       <a class='nav-link' href='./logout.php'>Logout</a>
     </li>
         ";
                }



                ?>


            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>