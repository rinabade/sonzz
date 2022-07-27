<?php
    // SESSION_start();
    include ('../connection.php');
    
    if(isset($_POST['save'])){
        $dir="images/";
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        // $bio = $_POST['bio'];
        $address = $_POST['address'];
        // $id = $_POST['id'];
        // $image = $_POST['file'];
        $image = $dir.basename($_FILES['image']['name']);
        // var_dump($image); die();


        $sql = "UPDATE user SET image ='$image', fname='$fname', lname='$lname', address='$address' WHERE email='$email' ";
        mysqli_query($conn, $sql);
        if(mysqli_query($conn, $sql)){
          move_uploaded_file($_FILES['image']['tmp_name'],$image);
          header("Location: userprofile.php?info = inserted");
          exit();
        }
        else{
            echo mysqli_error($conn);
        }
    }

    else{
        echo mysqli_error($conn);
    }

?>