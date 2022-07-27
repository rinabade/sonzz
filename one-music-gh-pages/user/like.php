<?php
SESSION_start();
 if(isset($_SESSION['user_id'])){
    include "../connection.php";
 
?>
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
    <link rel="stylesheet" href="css/like.css">
</head>
<body>
    <div class="main-contaner">
        <div class="playlist-container">
            <div class="playlist">
            <a href="mainpage.php"><img src="img/core-img/l.png" alt="SONZZ" class="logo"></a>
                <div class="playlist-card">
                    <i class="fas fa-home"></i>
                    <a href="user.php"><h3 class="playlist-main-content">Home</h3></a>

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
                     
                        <div class="playlist-image-container">
                        <div class="image-data">
                            <h1 class="data a">
                            Liked songs
                            </h1>
                        </div>
                     </div>
                  
                    </div><br>
              
                   
               <div class="playing-songs">
                     
                     <div class="playing-songs-container">
                     <div class="songs-container1">
                                <div class="songs-container11">
                                 <h2 class="songs-text1">Add songs</h2>
                                 <h4 class="songs-details"> </h4>
                             </div> 
                             <div class="plus-music">
                             <i class="fas fa-plus-square"></i>
                             </div> 
                             
                        </div>
                        <div class="songs-contaner2">
                            <h3 class="songs-text"></h3>
                        </div>
                     </div>
                     <div class="playing-songs-container">
                        <div class="songs-container1">
                            <?php
                            $sql="SELECT * from likes join song on likes.song_id=song.song_id join artist on song.artist_id= artist.artist_id";
                            // $sql1="SELECT * from song join artist on song.song_id=artist.artist_id";
                            $result = mysqli_query($conn, $sql);
                            // $result1 = mysqli_query($conn, $sql1);
                            while($row = mysqli_fetch_array($result)){
                            ?>
                             <div class="icon-music">
                             <img src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['image'];?>" class="image-playlist" alt="">
                             </div> 
                             <div class="songs-container11">
                                 <h1 class="songs-text">
                                    <?php echo $row['song_title'];?><br>
                                    
                                    
                                </h1>
                                <small> by <?php echo $row['first_name'];?> <?php echo $row['last_name'];?></small>
                                 <h4 class="songs-details"> </h4>
                             </div> 
                             <?php 
                            }
                            ?>
                        </div>
                        <div class="songs-contaner2">
                            <!-- <h3 class="songs-text">3:10</h3> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="music-player"> 
            <div class="player-content-1">
            <img src="img/artist-img/A1.jpg" class="image-playlist1" alt="">
                <div class="player-text">
                    <h3>Raili Garee</h3>
                    <h4> </h4>  
                </div>
                <div class="player-icons">
                    <i class="fas fa-heart"></i>
                </div>
                
            
            </div>
            <div class="player-content-2">
                <div class="player-controls">
                    <i class="fas fa-redo-alt"></i>
                    <i class="fas fa-backward"></i>
                    <i class="fas fa-play"></i>
                    <i class="fas fa-forward"></i>
                    <i class="fas fa-random"></i>
                </div>
                <div class="playerslider">
                    <div class="start-timer">
                        <h3 class="timer">0:00</h3>
                    </div>
                    <div class="timeline">
                        <span ></span>
                    </div>
                    <div class="end-timer">
                        <h3 class="timer">3:30</h3>
                    </div>
                </div>
            </div>
            <div class="player-content-3">
                <i class="fas fa-list"></i>
                <i class="fas fa-desktop"></i>
                <i class="fas fa-volume-up"></i>

                
            </div>
        </div>

               
                    </div>
             
            
             </div>
 
         </div>
       
            
 </body>
 </html>
 <?php
}
else{
    echo mysqli_error($conn);
}
?>