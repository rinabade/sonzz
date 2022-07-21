<!DOCTYPE html>
 <html>
    <head></head>
    <body>
    <?php
        include"../connection.php";
        if(isset($_GET['songid'])){
            
        $sql="SELECT * FROM song WHERE song_id = {$_GET['songid']}";
        $result = mysqli_query($conn, $sql);
       
        
        while($row = mysqli_fetch_array($result)){
            $file=$row['song'];
            
        }
    }
    ?>
    
    <audio controls autoplay preload="auto">
        <source src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $file ;?>" type="audio/mpeg">
        This text displays if the audio tag isn't supported.
    </audio>
    
    </body>   
</html>