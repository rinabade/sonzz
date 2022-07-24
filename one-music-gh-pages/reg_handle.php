<?php
    
    include ('connection.php');

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass=$_POST['password'];
        $user_type=$_POST['acc_type'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
        $address = $_POST['address'];
       

        //check for unique email id
        $sql1="SELECT * FROM user where email='$email'";
        $sql2="SELECT * FROM artist where email='$email'" ;
        $result=mysqli_query($conn,$sql1);
        $result1=mysqli_query($conn,$sql2);
        $num_rows=mysqli_num_rows($result);
        $num_rows1=mysqli_num_rows($result1);
        if($num_rows>=1 || $num_rows1>=1){
            header("location:register.php?error=Email already exists!! Please choose another email.");
            exit();
        }
        else
        {
            if(strlen($pass) <= 6){
                header("location:register.php?error1=Password too short");
                exit();
            }
            if($password===$cpassword){
                if($user_type==='user'){ 
                    $sql="INSERT INTO user(fname,lname,email,password,confirm_password,address) VALUES('$fname', '$lname','$email','$password','$cpassword','$address')";
                    if(mysqli_query($conn,$sql)){
                        header("location:login.php?error1= Registration Successfull");
                    }
                    else{
                        echo "Error: ".mysqli_error($conn);
                    }
                }
                if($user_type==='artist'){ 
                    $sql="INSERT INTO artist(first_name,last_name,email,password,address) VALUES('$fname', '$lname','$email','$password','$address')";
                        if(mysqli_query($conn,$sql)){
                            header("location:login.php?error1= Registration Successfull");
                        }
                        else{
                            echo mysqli_error($conn);
                        }
                    }
            }
            else{
                header("location:register.php?error1= Password Doesnot match");
                exit();
                }
            }
        }
    else{
        echo mysqli_error($conn);
        header("location:register.php");
    }   

?>