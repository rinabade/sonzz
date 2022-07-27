<?php
include "../connection.php";
    if(isset($_GET['songid'])&& isset($_GET['userid'])){
                    
        $sql2="UPDATE song SET likes=likes+1 WHERE song_id= {$_GET['songid']}";
        if(mysqli_query($conn,$sql2)){
            header("location:user.php");
        }
        else{
            echo mysqli_error($conn);
        }
        $songid=$_GET['songid'];
        $userid=$_GET['userid'];
        $sql1="SELECT * FROM likes WHERE user_id=$user_id AND song_id=$song_id";
        $result=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result)>0){
            header('location:user.php');
        }
        else{
        $sql="INSERT INTO likes VALUES('','$userid','$songid')";
        if(mysqli_query($conn,$sql)){
            header("location:user.php");
        }
        else{
            echo mysqli_error($conn);
        }
    }
    }
    else{
        echo mysqli_error($conn);
    }

?>