<?php
    
    include ('connection.php');
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $sql="INSERT INTO user(fname,lname,email,password,address) VALUES('$fname', '$lname','$email','$password','$address')";

    if(mysqli_query($conn,$sql)){
       header("location:login.php");
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
    

?>