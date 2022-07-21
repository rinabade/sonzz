<?php
    // SESSION_start();
    include ('../connection.php');
    
   
    $fname = $_POST['name'];
    $id = $_POST['id'];
    $dir='images/';
    // var_dump($dir);
    // die();
    $image_path=$dir.basename($_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'],$audio_path))
    {
        upload($image_path);
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