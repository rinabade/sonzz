<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonzz</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/b63b22a684.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
    <div class="main-contaner">
        <div class="playlist-container">
            <div class="playlist">
            <a href="mainpage.php"><img src="img/core-img/l.png" alt="SONZZ" class="logo"></a>
                <div class="playlist-card">
                    <i class="fas fa-home"></i>
                    <a href="user.php"> <h3 class="playlist-main-content">Home</h3></a>

                </div>
                <div class="playlist-card">
                    <i class="fas fa-user"></i>
                    <a href="userprofile.php"><h3 class="playlist-main-content">Profile</h3></a>

                </div>
    
                
                <div class="playlist-extra">
                    <h4 class="playlist-main-content-header">PLAYLIST</h4>
                   <div class="playlist-card">
                    <i class="fas fa-list"></i>
                    <a href="playlist.php"><h3 class="playlist-main-content">Play List</h3></a>

                </div>
                  
                    <div class="playlist-card">
                        <i class="fas fa-bookmark"></i>
                        <a href="like.php"><h3 class="playlist-main-content">Liked Songs</h3></a>
    
                    </div>
                </div>
                
            </div>

            <div class="playing">
                <div class="top-header">
                    
                    <div class="header-icons">
                    <div class="search">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search Music...">
                </div>
                         <div class="profile">
                       
                                  <img class="profilepic" src="img/core-img/pp.jpg">
                                  <div class="dropdown">
                                           <button class="dropbtn"> <i class="fas fa-chevron-down"></i></button>
                                               <div class="dropdown-content">
                                                     <a href="mainpage.php">Logout</a>
 
                                                 </div>
                                   </div>
                                  
                           
                        </div>
                    </div>
                    <br><br>
               

                <div class="popular_songs">
                <div class="h4">
                    <h4>Trending</h4>
                    
                 </div>
                 <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                        <img src="img/artist-img/a2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="2"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/a3.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="3"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/a4.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="4"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/a5.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="5"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      
                      
                 </div>
            </div><br><br>
            <div class="Artist">
                <div class="h4">
                    <h4>Artists</h4>
                    
                 </div>
                 <div class="artist_song">
                    <li class="asongItem">
                        <div class="aimg_play">
                        <a href="artist_album.php"><img src="img/artist-img/a2.jpg" alt=""></a>
                              
                          </div>
                          
                      </li>
                      <li class="songItem">
                        <div class="aimg_play">
                        <a href="artist_album.php"><img src="img/artist-img/A1.jpg" alt=""></a>
                            
                          </div>
                      </li>
                      <li class="songItem">
                        <div class="aimg_play">
                        <a href="artist_album.php"><img src="img/artist-img/a3.jpg" alt=""></a>
                            
                          </div>
                          
                      </li>
                      <li class="songItem">
                        <div class="aimg_play">
                        <a href="artist_album.php"><img src="img/artist-img/a4.jpg" alt=""></a>
                             
                          </div>
                          
                      </li>
                      <li class="songItem">
                        <div class="aimg_play">
                           <a href="artist_album.php"> <img src="img/artist-img/a5.jpg" alt=""></a> 
                          </div>
                          
                      </li>
                      
                      
                 </div>
            </div><br><br>
            <div class="popular_songs">
                <div class="h4">
                    <h4>what's new</h4>
                    
                 </div>
                 <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/a6.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/a7.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="2"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/a3.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="3"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/a4.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="4"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="5"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      
                      
                 </div>
            </div><br><br>
            <div class="popular_songs">
                <div class="h4">
                    <h4>Lastest album</h4>
                    
                 </div>
                 <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="2"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="3"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="4"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      <li class="songItem">
                        <div class="img_play">
                            <img src="img/artist-img/A1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="5"></i>  
                          </div>
                          <h5> Moutain High</h5>
                      </li>
                      
                      
                 </div>
            </div><br><br>
               </div>
             
            
            </div>

        </div>
      
           
</body>
</html>