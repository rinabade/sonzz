<?php

    if(isset($_POST['Submit']) && $_POST['Submit']==="Upload" ){
        
        // $dir=$_SERVER['DOCUMENT_ROOT'].'http://localhost/Sonzz/one-music-gh-pages/uploads/';
        $dir='uploads/';
        $dir1='simages/';
        // var_dump($dir);
        // die();
        $audio_path=$dir.basename($_FILES['audio']['name']);
        $image_path=$dir1.basename($_FILES['img']['name']);
        if(move_uploaded_file($_FILES['audio']['tmp_name'],$audio_path) && move_uploaded_file($_FILES['img']['tmp_name'],$image_path))
        {
            upload($audio_path,$image_path);
        }
}
else{
    echo "error";
}
function upload($name,$name1){
    include"../connection.php";
    $title=$_POST['title'];
    $id=$_POST['id'];
    $sql="INSERT INTO song values('','$id',3,3,'$title',45,'{$name}','{$name1}')";
    mysqli_query($conn,$sql);
    header("location:activity.php");
   
}


?>