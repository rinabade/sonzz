<?php

    if(isset($_POST['Submit']) && $_POST['Submit']==="Upload" ){
        
        // $dir=$_SERVER['DOCUMENT_ROOT'].'http://localhost/Sonzz/one-music-gh-pages/uploads/';
        $dir='uploads/';
        // var_dump($dir);
        // die();
        $audio_path=$dir.basename($_FILES['audio']['name']);
        if(move_uploaded_file($_FILES['audio']['tmp_name'],$audio_path))
        {
            upload($audio_path);
        }
}
else{
    echo "error";
}
function upload($name){
    include"../connection.php";
    $title=$_POST['title'];
    $sql="INSERT INTO song values('',1,3,3,'$title',45,'{$name}')";
    mysqli_query($conn,$sql);
    header("location:upload.php");
   
}


?>