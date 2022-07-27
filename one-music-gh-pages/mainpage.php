
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
                        <a href="mainpage.php" class="nav-brand">S0NZZ</a>

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
                                        <a href="login.php" id="loginBtn">Login / Register</a>
                                    </div>

                                    <!-- Cart Button -->
                                    <!-- <div class="cart-btn">
                                        <p><span class="icon-shopping-cart"></span> <span class="quantity">1</span></p>
                                    </div> -->
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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Rewind The Happiness <span>Rewind The Happiness </span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Latest Albums Area Start ##### -->
    <section class="latest-albums-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <h2>About Sonzz</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
                        <p>Sonzz is to create, provide and expand positively life-changing experiences through music for all. We believe that music and arts.It supports communities throughout the Nepalese in creating and sharing their music.It gives creative artists the opportunity to live off their art and fans the opportunity to enjoy and be inspired by it.</p>
                    </div>
                </div>
            </div>

    </section>
    <!-- ##### Latest Albums Area End ##### -->

    <!-- ##### Buy Now Area Start ##### -->
    <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>See what’s new</p>
                        <h2>Buy What’s New</h2>
                    </div>
                </div>
            </div>

            <div class="row">
            <?php
                include_once "connection.php";
                $sql="SELECT * FROM song ORDER BY song_id DESC LIMIT 0,12";
                $result = mysqli_query($conn, $sql);
                            
                while($row = mysqli_fetch_array($result)){
                                
            ?>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                        <div class="album-thumb">
                            <img src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['image'];?>" height ="200"alt="">
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="<?php echo 'user/play.php?songid='.$row['song_id']; ?>" class="video--play--btn">
                                    <span class="icon-play-button">

                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5></h5>
                            </a>
                            <p><?php echo $row['song_title']?></p>
                            <!-- <audio preload="auto">
                                <source src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['song'] ;?>" type="audio/mpeg">
                            </audio> -->
                        </div>
                    </div>
                </div>
                <?php } ?>
        </div>
    </section>
    <!-- ##### Buy Now Area End ##### -->

    <!-- ##### Featured Artist Area Start ##### -->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/bg-4.jpg);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                <?php
                            $sql1="SELECT * FROM song ORDER BY song_id DESC LIMIT 1";
                            $result = mysqli_query($conn, $sql1);
                            
                            while($row = mysqli_fetch_array($result)){
                                
                        ?>
                    <div class="featured-artist-thumb">
                        <img src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['image'];?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>See what’s new</p>
                            <h2>Buy What’s New</h2>
                        </div>
                        <p></p>
                        
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>01. <?php echo $row['song_title'];?></p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['song'] ;}?>">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Featured Artist Area End ##### -->

    <!-- ##### Miscellaneous Area Start ##### -->
    <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- ***** Weeks Top ***** -->
                <div class="col-12 col-lg-4">
                    <div class="weeks-top-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>This week’s top</h2>
                        </div>
                        
                        <?php
                  $sql="SELECT * FROM song  join artist on 	song.artist_id=artist.artist_id ORDER BY view_count DESC LIMIT 7";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($result)){
                 ?>
                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['image'];?>" alt="">
                            </div>
                            <div class="content-">
                                <h6><?php echo $row['first_name']?> <?php echo $row['last_name']?></h6>
                                <p><?php echo $row['song_title']?></p>
                            </div>
                        </div>
                        <?php }?> 
                    </div>
                </div>

                <!-- ***** New Hits Songs ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>New Hits</h2>
                        </div>
                        <?php
                        $sql="SELECT * FROM song  join artist on song.artist_id=artist.artist_id ORDER BY view_count DESC LIMIT 0,7";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($result)){
                        ?>
                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['image'];?>" alt="">
                                </div>
                                <div class="content-">
                                    <h6><?php echo $row['first_name']?> <?php echo $row['last_name']?></h6>
                                    <p><?php echo $row['song_title']?></p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['song'] ;?>">
                            </audio>
                        </div>
                        <?php }?> 
                    </div>
                </div>

                <!-- ***** Popular Artists ***** -->
                <div class="col-12 col-lg-4">
                    <div class="popular-artists-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>Popular Artist</h2>
                        </div>
                        <?php
                            $sql2="SELECT * FROM artist ORDER BY artist_id DESC LIMIT 5";
                            $result1= mysqli_query($conn, $sql2);
                            
                            while($row1 = mysqli_fetch_array($result1)){
                                
                        ?>
                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row1['picture'];?>" width="50"height="20" alt="">&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="content-">
                                <p><b><?php echo $row1['first_name']?> <?php echo $row1['last_name'];?></b></p>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Miscellaneous Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <!-- <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Albums</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul> -->
                    </div>
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