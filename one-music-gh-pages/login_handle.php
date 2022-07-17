<?php
    SESSION_start();
    include ('connection.php');
    $email=$_POST['email'];
    $password=$_POST['password'];
    $acctype=$_POST['acc_type'];
    if(isset($_POST['reg'])){
        header("location : register.php ");
    }
    if($acctype==='user'){
        $sql = "SELECT * FROM user WHERE email='$email' and password='$password' ";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)===1){
        	$row=mysqli_fetch_assoc($result);
        	if($row['email']===$email && $row['password']===$password){
        		$_SESSION['user_id']=$row['user_id'];
        		$_SESSION['fname']=$row['fname'];
        		header("location:user/mainpage.php ");
        		exit();
        	}

        }
        else{
        	echo ("error" .mysqli_connect_error());
        	// header("location : dashboard.php");
        	exit();
        }
    }
    if($acctype==='artist'){
        $sql = "SELECT * FROM artist WHERE email='$email' and password='$password' ";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)===1){
        	$row=mysqli_fetch_assoc($result);
        	if($row['email']===$email && $row['password']===$password){
        		$_SESSION['artist_id']=$row['artist_id'];
        		$_SESSION['name']=$row['artist_name'];
        		header("location:artist/mainpage.php ");
        		exit();
        	}

        }
        else{
        	echo ("error");
        	header("location:login.php");
        	exit();
        }
    }
 ?>