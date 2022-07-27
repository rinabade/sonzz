<?php
    // SESSION_start();
    include ('../connection.php');
    
    if(isset($_POST['save'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $bio = $_POST['bio'];
        $address = $_POST['address'];
        // $id = $_POST['id'];
        $dir='images/';
        
        $image_path=$dir.basename($_FILES['file']['name']);
        
        if(move_uploaded_file($_FILES['file']['tmp_name'],$image_path))
        {
            $sql="UPDATE artist SET picture='$image_path' WHERE email='$email'";
            if(mysqli_query($conn,$sql)){
                header("location:artistprofile.php");
            }
            else{
                echo mysqli_error($conn);
            }
        }

        $sql="UPDATE artist SET first_name='$fname',last_name='$lname',bio='$bio',address='$address' WHERE email='$email'";
        if(mysqli_query($conn,$sql)){
            header("location:artistprofile.php");
        }
        else{
            echo mysqli_error($conn);
        }
        
    }
    else{
        echo mysqli_error($conn);
    }

?>