<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sonzz</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand">Sonzz</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                <li><a href="mainpage.php">Home</a></li>
                                    <li><a href="artist.html">Artists</a></li>
                                    <li><a href="pricing_table.php">Premium</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50">
                                        <a href="login.html" id="loginBtn">Login / Register</a>
                                    </div>

                                    
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                                        
                    <div class="resis-content">
                        <h1 style="text-align:center;">Register Now</h1><br><br>
                        <!-- Login Form -->

                        <div class="login-form">
                            
                            <form action="reg_handle.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="font-size: 20px;">First Name</label>
                                    <input type="text" class="form-control" name="fname" aria-describedby="emailHelp" placeholder="Enter firstname">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="font-size: 20px;">Last Name</label>
                                    <input type="text" class="form-control" name="lname" aria-describedby="emailHelp" placeholder="Enter lastname">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="font-size: 20px;">User Type</label><br>
                                    <input id="1" type="radio" name="acc_type" value="user">
                                    <label for="1" style="font-size: 20px;">User</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input id="2" type="radio" name="acc_type" value="artist">
                                    <label for="2" style="font-size: 20px;">Artist</label>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="font-size: 20px;">Email</label>
                                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter E-mail">
                                    
                                </div>

                                <div>
                                    <?php if (isset($_GET['error'])){?>
                                        <p class="error" style="font-size: 20px;"><?php echo $_GET['error']; ?></p>
                                    <?php } ?>
                                </div>
                                

                                <div class="form-group">
                                    <label for="exampleInputPassword1" style="font-size: 20px;">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>

                                <div>
                                    <?php if (isset($_GET['error1'])){?>
                                        <p class="error" style="font-size: 20px;"><?php echo $_GET['error1']; ?></p>
                                    <?php } ?>
                                </div>
                                

                                <div class="form-group">
                                    <label for="exampleInputPassword1" style="font-size: 20px;">Confirm Password</label>
                                    <input type="password" class="form-control" name="cpassword" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="font-size: 20px;">Address</label>
                                    <input type="text" class="form-control" name="address" aria-describedby="emailHelp" placeholder="Enter address">
                                    
                                </div>
                                
                                <button type="submit" name="submit" class="btn oneMusic-btn resisbtn mt-30">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                  
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>

            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>