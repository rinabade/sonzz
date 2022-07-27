<!DOCTYPE html>
<html>
<head>
    <title>Create Custom Music Player in HTML & CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="player.css">
</head>
<body>

     <div class="container">
         <div class="header">
            <a onclick="self.close()"><span class="alink"><i class="fas fa-chevron-left"></i></span></a>
             <div class="playing">now playing</div>
             <span class="alink"><i class="fas fa-ellipsis-v"></i></span>
         </div>
         <?php
                include"../connection.php";
                if(isset($_GET['songid'])){
                    
                $sql2="UPDATE song SET view_count=view_count+1 WHERE song_id= {$_GET['songid']}";
                mysqli_query($conn,$sql2);

                $sql="SELECT * FROM song WHERE song_id = {$_GET['songid']}";
                $result = mysqli_query($conn, $sql);
            
                while($row = mysqli_fetch_array($result)){
            
            ?>
         <div class="content">
             <figure class="album_cover">
                <img src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['image'] ;?>">
             </figure>
             <div class="song_info">
                 <div class="song_name"></div>
                 <div class="song_artist"><?php echo $row['song_title'];?></div>
             </div>
             <div class="timeline">
                 <div class="dueration">
                     <!-- <span class="current">00:00</span>
                     <span class="total">04:30</span> -->
                 </div>

                 <div class="slider">
                     <div class="progress">
                         <div class="pin"></div>
                     </div>
                 </div>
             </div>
             <div class="controls">
             <audio controls autoplay preload="auto">
                <source src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['song'] ;}}?>" type="audio/mpeg">
                This text displays if the audio tag isn't supported.
            </audio>
                 <!-- <span class="alink1"><i class="fas fa-random"></i></span>
                 <span class="alink2"><i class="fas fa-step-backward"></i></span>
                 <span class="alink3"><i class="fas fa-play"></i></span>
                 <span class="alink4"><i class="fas fa-step-forward"></i></span>
                 <span class="alink5"><i class="fas fa-sync-alt"></i></span> -->
             </div>
             <div class="footer">
                 <span class="alink"><i class="fas fa-angle-up"></i>
                    <div class="lyrics">Lyrics</div>
             </div>
         </div>
     </div>
</body>
</html>

