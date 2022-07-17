<?php
    if(isset($_POST['submit']) && isset($_FILES['audio'])){
        include"../connection.php";
        $audio_name=$_FILES['audio']['name'];
        $title=$_POST['title'];
        $temp_name=$_FILES['audio']['temp_name'];
        $error=$_FILES['audio']['error'];
        if($error ===0){
            $audio_ex=pathinfo($audio_name,PATHINFO_EXTENSION);
            $audio_ex_lc=strtolower($audio_ex);
            $allowed_exs=array("mp4","webm","avi","mp3");
            if(in_array($audio_ex_lc,$allowed_exs)){
                $new_audio_name= uniqid("audio-", true). '.'.$audio_ex_lc;
            $audio_upload_path='uploads/'.$new_audio_name;
            move_uploaded_file($temp_name,$audio_upload_path);
            $sql="INSERT INTO song(song_title,song) VALUES($title,$new_audio_name)";
            mysqli_query($conn,$sql);
            header("location:upload.php");
        
            }
        else{
            echo "error";
        }
    }

}
else{
    header("location:upload.php");
}

?>