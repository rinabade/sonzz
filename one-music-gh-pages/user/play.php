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
        $sql1="SELECT * FROM view WHERE song_id = {$_GET['songid']}";
        $result1=mysqli_query($conn,$sql1);
        if (mysqli_num_rows($result1) > 0) {
            
            while($row1 = mysqli_fetch_assoc($result1)) {
                $count=$row['count'];
            
            // for($i=0; $i<$count; $i++){
            //     echo $counter[$i];
            // }
        }
            echo $count;
            // $sql2="UPDATE view SET count=$count+1 WHERE song_id= {$_GET['songid']}";
            // mysqli_query($conn,$sql2);
        }
        
        }
    ?>
    
    <audio controls autoplay preload="auto">
        <source src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $file ;?>" type="audio/mpeg">
        This text displays if the audio tag isn't supported.
    </audio>
    
    </body>   
</html>