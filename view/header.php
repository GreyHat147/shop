<!DOCTYPE html>
<?php 
    
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Shop</title>
    <!-- <link rel="icon" href="../assets/img/core-img/favicon.ico"> -->
    <link rel="icon" href="./assets/img/core-img/favicon.ico">
    
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="./assets/css/core-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="./assets/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.php"><img style="width: 50px" src="./assets/img/logoU.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="?c=Publishment">Carros y Motos</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>


            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <div class="hover-content">
                    <?php if(isset($_SESSION['valid']) &&  $_SESSION['valid']): ?>
                        <!-- Add to Cart -->
                        <div class="add-to-cart-btn" style="padding: 17px">
                            <a style="color: #ffffff" href="?c=Publishment&a=goToCreate" class="btn essence-btn">Publicar</a>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#ex1" rel="modal:open""><img src="./assets/img/core-img/user.svg" alt=""></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- Modal HTML embedded directly into document -->
    <div id="ex1" class="modal">
        <div class="checkout_details_area mt-50 clearfix">
            <form action="?c=Login&a=login" method="post">
                <!-- ##### Breadcumb Area Start ##### -->
                <div class="breadcumb_area bg-img" style="background-image: url(./assets/img/bg-img/breadcumb.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="page-title text-center">
                                    <h2>Login</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ##### Breadcumb Area End ##### -->
                <div class="row">
                    <div class="col-12">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" value="" required autocomplete="off" name="username">
                    </div>
                    <div class="col-12" style="margin-bottom: 15px">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" value="" required autocomplete="off" name="password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn essence-btn">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
