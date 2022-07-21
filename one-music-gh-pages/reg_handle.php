<?php
    
    include ('connection.php');

    if(isset($_POST["register"])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
        $address = $_POST['address'];

        if(strlen($password) <= 6){
                header("location:register.php?error1=Password too short");
            exit();
        }
        else if($password != $cpassword){
            header("location:register.php?error=Incorrect  Password");
            exit();
        }

    $sql="INSERT INTO user(fname,lname,email,password,cpassword,address) VALUES('$fname', '$lname','$email','$password','cpassword','$address')";

    if(mysqli_query($conn,$sql)){
       header("location:login.php");
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
}
    

?>