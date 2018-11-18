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
                <?php if(!isset($_SESSION['valid'])): ?>
                    <!-- User Login Info -->
                    <div class="user-login-info">
                        <a href="#openModal" rel="modal:open"><img src="./assets/img/core-img/user.svg" alt=""></a>
                    </div>
                <?php endif; ?>
                <?php if(isset($_SESSION['valid']) &&  $_SESSION['valid']): ?>
                    <!-- User Login Info -->
                    <div class="user-login-info">
                        <a href="?c=Login&a=logout">Salir</a>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- Modal HTML embedded directly into document -->
    <div id="openModal" class="modal" style="margin-top: 100px;">
        <ul class="tab-group">
            <li class="tab active"><a href="#signup">Registrarse</a></li>
            <li class="tab"><a href="#login">Log In</a></li>
        </ul>
        <div class="tab-content">
            <div id="login">
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
    
            <div id="signup">
                <div class="checkout_details_area mt-50 clearfix">
                    <form action="?c=Login&a=signup" method="post">
                        <!-- ##### Breadcumb Area Start ##### -->
                        <div class="breadcumb_area bg-img" style="background-image: url(./assets/img/bg-img/breadcumb.jpg);">
                            <div class="container h-100">
                                <div class="row h-100 align-items-center">
                                    <div class="col-12">
                                        <div class="page-title text-center">
                                            <h2>Registrarse</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ##### Breadcumb Area End ##### -->
                        <div class="row">
                            <div class="col-12">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="usernameRegister" value="" required autocomplete="off" name="username">
                            </div>
                            <div class="col-12">
                                <label for="first_name">Nombres</label>
                                <input type="text" class="form-control" id="first_name" value="" required autocomplete="off" name="first_name">
                            </div>
                            <div class="col-12">
                                <label for="last_name">Apellidos</label>
                                <input type="text" class="form-control" id="last_name" value="" required autocomplete="off" name="last_name">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="document_type">Tipo de documento <span>*</span></label>
                                <select class="w-100" id="document_type" name="document_type">
                                    <option value="CC">Cedula de ciudadania</option>
                                    <option value="CE">Cedula de extrangeria</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="document_number">Numero de documento</label>
                                <input type="number" class="form-control" id="document_number" value="" required autocomplete="off" name="document_number">
                            </div>
                            <div class="col-12">
                                <label for="phone_number">Telefono</label>
                                <input type="number" class="form-control" id="phone_number" value="" required autocomplete="off" name="phone_number">
                            </div>
                            <div class="col-12">
                                <label for="city">Ciudad</label>
                                <input type="text" class="form-control" id="city" value="" required autocomplete="off" name="city">
                            </div>
                            <div class="col-12">
                                <label for="address">Dirección</label>
                                <input type="text" class="form-control" id="address" value="" required autocomplete="off" name="address">
                            </div>
                            <div class="col-12">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" value="" required autocomplete="off" name="email">
                            </div>
                            <div class="col-12" style="margin-bottom: 15px">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="passwordRegister" value="" required autocomplete="off" name="password">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn essence-btn">Registrarse</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
