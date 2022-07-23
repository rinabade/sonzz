<?php 
  SESSION_start();
  if(isset($_SESSION['artist_id']) && isset($_SESSION['name']) && isset($_SESSION['lname'])){
    include('../connection.php');
?>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/artist.css">
</head>

<body>
    <header>
        <div class="menu_side">
        <div class="circle-frame">
        <img class="profilepic" src="img/core-img/l.png">
          </div>
        <div class="playlist">
        <h4 class="active"><span></span><i class="bi bi-house-door"></i>Home</h4>
                 <h4 class="active"><span></span><a href="artistprofile.php"><i class="bi bi-person-circle"></i>Profile</a></h4>
                 <h4 class="active"><span></span><a href="mostlyviewed.php"><i class="bi bi-emoji-heart-eyes"></i>Mostly viewed</a></h4>
        </div>
        <h5 class="yourmusic">Your Music</h5>
        <div class="playlist">
                 <h4 class="active"><span></span><a href="songs.php"><i class="bi bi-file-music"></i>Songs</a></h4>
                 <h4 class="active"><span></span><i class="bi bi-disc"></i>Albums</h4>
        </div>
        <div class="playlist">
                 <h4 class="active logout"><span></span><i class="bi bi-box-arrow-left"></i>Logout</h4>
                 
        </div>

        </div>
        <div class="song_side">
            <nav>
                <div class="search">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search Music...">
                </div>
                <div class="user">
                    <img src="img/core-img/l.png"> 
            </nav>
            <div class= "content">
                <h1><?php echo $_SESSION['name']?> <?php echo $_SESSION['lname']?></h1>
                <p>bio: </p>
                <div class="buttons">
                    <button><h4>Followers: 20k</h4></button>
                </div>
            </div>
            <div class="popular_songs">
                <div class="h4">
                    <h4>Popular songs</h4>
                    <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                    </div>
                 </div>
                 <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      
                 </div>
            </div>
            <div class="popular_songs">
                <div class="h4">
                    <h4> Songs</h4>
                    <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                    </div>
                 </div>
                 <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      
                 </div>
            </div>
            <div class="popular_songs">
                <div class="h4">
                    <h4> Mostly viewed</h4>
                    <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                    </div>
                 </div>
                 <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      
                 </div>
            </div>
        </div>
    </header>
    <script src="js/artist.js"></script>
</body>
<html>
<?php
  }
  else{
  echo("error");
  }
?>