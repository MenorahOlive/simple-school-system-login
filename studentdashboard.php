<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:index.php");
} elseif ($_SESSION['usertype'] == 'admin') {
    header("location:index.php");
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="style.css" />
    <title>Admin Dashboard</title>
</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand"> <i class="bi bi-x-diamond "></i> Faraday Hills University</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item text-secondary">
                        <i class="bi bi-person-circle h3"></i>
                        <?php

                        error_reporting(0);
                        session_destroy();

                        echo $_SESSION['username'];



                        ?>
                    </li>
                    <span>
                        <p text-dark>txt</p>
                    </span>
                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-success">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!--sidebar menu-->
    <div class="container h-100 position-absolute top-50 start-0 translate-middle-y bg-dark overflow-auto" style="width: 200px; margin-top:70px; ">

        <p class="text-warning font-monospace"><i class="bi bi-brightness-alt-high"></i> STUDENT DASHBOARD</p>
        <a href="#" class="btn btn-secondary m-2">View Details</a>
        <a href="#" class="btn btn-secondary m-2">Self Registration</a>

    </div>


    <section class="vh-100 " style="background: linear-gradient(to right, #1f959b , #b19cd9);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-end align-items-center h-100">

                <div class="col-md-12 col-xl-5">

                    <img class="img-fluid " style="height:400px; width:400px; border-radius:15px;" src="img/faradayhills.svg" alt="" />

                </div>
                <div class="col-md-12 col-xl-5">

                    <div class="card text-white " style="background-color: #1f959b; border-radius: 15px;">
                        <div class="card-body p-5">

                            <i class="bi bi-chat-square-quote mb-4 h1"></i>

                            <p class="lead">Genius is one percent inspiration and ninety-nine percent perspiration.</p>

                            <hr>

                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Thomas Edison</p>
                                <h6 class="mb-0"><span class="badge rounded-pill" style="background-color: rgba(0,0,0, 0.2);">876</span> <i class="bi bi-bookmark-heart h4"></i>
                                </h6>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="p-1 bg-secondary text-light text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2022 Faraday Hills University</p>


        </div>
    </footer>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>