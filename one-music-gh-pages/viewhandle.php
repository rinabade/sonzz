<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $sql="SELECT * FROM song";
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each rowss
            while($row = mysqli_fetch_assoc($result)) {
                
                $song_id=$row["song_id"];
                // $count=$row["count"];
                
                $sql1="INSERT INTO view VALUES('','$song_id','')";
                if(mysqli_query($conn,$sql1)){
                    echo "successful";
                }
                else{
                    echo mysqli_error($conn);
                } 
                
            }
            for($i=0; $i<$count; $i++){
                echo $counter[$i];
            }
        }
           
    }
    
else{
    echo mysqli_error($conn);

    }
?>