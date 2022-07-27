<?php
    SESSION_start();
    $id=$_SESSION['user_id'];
    if(isset($_SESSION['user_id'])){
    include ('../connection.php');
    
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                    <a href="logout.php">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                
                    <div class="popular_songs">
                        <div class="h4">
                            <h4>Trending</h4>
                            
                        </div><br>
                     
                        <div class="pop_song">
                            <?php
                                $sql="SELECT * FROM song ORDER BY view_count DESC LIMIT 0,6";
                                $result=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_array($result)){
                                ?>
                            <li class="songItem">
                                <div class="img_play">
                                    <img src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['image'];?>" alt="">
                                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>  
                                </div>
                                <h5><?php echo $row['song_title'];?></h5>
                                <a href="likehandle.php?songid=<?php echo $row['song_id']; ?>&amp;userid=<?php echo $id; ?>" id="like"><i class="material-icons" >thumb_up </i></a>
                                <h6 style="color: white;">Likes</h6>
                            </li> 
                            <?php }}?>  
                        </div>
                    </div><br><br>
                     
                    <div class="Artist">
                        <div class="h4">
                            <h4>Artists</h4>
                            <br><br>
                        </div>
                        <div class="artist_song">
                            <?php
                                $sql="SELECT * 
                                      FROM song 
                                      join artist on song.song_id=artist.artist_id 
                                      ORDER BY view_count DESC LIMIT 0,6";
                                $result=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_array($result)){
                            ?>
                            <li class="asongItem">
                                <div class="aimg_play">
                                    <img src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['picture'];?>" alt="">
                                </div>
                                <h5><?php echo $row['first_name'];?> <?php echo $row['last_name'];?></h5>
                                <a href="likehandle.php?songid=<?php echo $row['artist_id']; ?>&amp;artistid=<?php echo $id; ?>" id="like"></a>
                            </li>
                            <?php }}?> 
                        </div>
                    </div><br><br><br>

            <div class="popular_songs">
                <div class="h4">
                    <h4>what's new</h4>
                    <br><br>
                 </div>
                 <div class="pop_song">
                    <?php
                        $sql="SELECT * 
                                FROM song 
                                ORDER BY song_id DESC LIMIT 0,6";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_array($result)){
                    ?>
                        <li class="songItem">
                            <div class="img_play">
                                <img src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['image'];?>" alt="">
                                <i class="bi playListPlay bi-play-circle-fill" id="1"></i>  
                            </div>
                            <h5><?php echo $row['song_title'];?></h5>
                            <a href="likehandle.php?songid=<?php echo $row['song_id']; ?>&amp;songid=<?php echo $id; ?>" id="like"></a>
                        </li>
                    <?php }}?>
                </div>
            </div><br><br><br>

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
<?php 
}
else{
    echo mysqli_error($conn);
}
?>