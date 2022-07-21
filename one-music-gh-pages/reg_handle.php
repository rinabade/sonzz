<?php
    
    include ('connection.php');
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
        $address = $_POST['address'];
        if($password===$cpassword){
            $sql="INSERT INTO user(fname,lname,email,password,cpassword,address) VALUES('$fname', '$lname','$email','$password','cpassword','$address')";
        
            if(mysqli_query($conn,$sql)){
                header("location:login.php");
            }
            else{
                echo "Error: ".mysqli_error($conn);
            }
        }
        else{
            echo mysqli_error($conn);
            header("location:register.php");
        }   
    }
    else{
        echo mysqli_error($conn);
    }
    

?>