<?php
    SESSION_start();
    include ('connection.php');
 
    if(isset($_POST['reg'])){
        header("location : register.php ");
    }
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $acctype=$_POST['acc_type'];
        $pass=md5($password);
        $sql = "SELECT * FROM user WHERE email='$email' and password='$pass' ";
        $sql1 = "SELECT * FROM artist WHERE email='$email' and password='$pass' ";
        $result = mysqli_query($conn,$sql);
        $result2 = mysqli_query($conn,$sql1);

        if(mysqli_num_rows($result)===1){
            $row=mysqli_fetch_assoc($result);
            if($row['email']===$email && $row['password']===$pass){
                $_SESSION['user_id']=$row['user_id'];
                $_SESSION['fname']=$row['fname'];
                header("location:user/user.php ");
                exit();
            }
        }

        else if(mysqli_num_rows($result2)===1){
            $row=mysqli_fetch_assoc($result2);
            if($row['email']===$email && $row['password']===$pass){
                $_SESSION['artist_id']=$row['artist_id'];
                $_SESSION['name']=$row['first_name'];
                $_SESSION['lname']=$row['last_name'];
                header("location:artist/artistprofile.php ");
                exit();
            }

        }
        else{
            echo ("error");
            header("location:login.php");
            exit();
        }

    }
    else{
        echo ("error");
        header("location:login.php");
        exit();
    }
 ?>