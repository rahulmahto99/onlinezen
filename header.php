<?php

require ("config.php");
require ("function.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Fontawesome Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- stylesheet link  -->
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets\css\course_details.css">
    <link rel="stylesheet" href="assets/css/checkout.css">

    <title>OnlineZen</title>
</head>

<body>

    <!-- Navigation bar start Here  -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary pt-3 pb-3 ps-5 pe-5 sticky-top">
        <div class="container-fluid fullnavigation">
            <a class="navbar-brand fs-4" href="index.php"><img src="assets\images\LogoMakr-3quV9P.png" height="40px
            " alt=""> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex header-search-btn" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="course.php">Courses</a>
                    </li>

                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add_to_cart.php">
                            <i class="fa-solid  fs-4 fa-cart-shopping">

                            </i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <!-- Button trigger modal -->

                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                            <span class="header-login-button"><i class="fa-regular pe-1 fw-normal fa-user"></i><span class="fw-semibold">Login/Register
                                 
                            </span>
                            </span>
                        </a>


                    </li>
                    

                </ul>

            </div>
        </div>
    </nav>


    <!-- Navigation bar end Here  -->