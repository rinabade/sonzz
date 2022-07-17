<?php
    // SESSION_start();
    include ('../connection.php');
    $img = $_POST['img'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE user SET image='$img' WHERE email='$email' ";
    if(mysqli_query($conn,$sql)){
        header("location:user.php");
    }
    else{
        echo ("error");
    }

