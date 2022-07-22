<?php
    
    include ('connection.php');

    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $cpassword=md5($_POST['cpassword']);
        $pass=md5($password);
        if($password===$cpassword){
            $sql = "SELECT * FROM user WHERE email='$email' ";
            $sql1 = "SELECT * FROM artist WHERE email='$email' ";
            $result = mysqli_query($conn,$sql);
            $result2 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result)===1){
                $sql="UPDATE user set password='$password', confirm_password='$cpassword' where email='$email'";
                if(mysqli_query($conn,$sql)){
                    header("location:login.php?error1= Password changed!!");
                }
                else{
                    echo "Error: ".mysqli_error($conn);
                }

            }
            if(mysqli_num_rows($result2)===1){
                $sql="UPDATE artist set password='$password' where email='$email'";
                if(mysqli_query($conn,$sql)){
                    header("location:login.php?error1= Password changed!!");
                }
                else{
                    echo "Error: ".mysqli_error($conn);
                }

            }
            

        }
        else{
            header("location:forgetpass.php?error1= Password Doesnot match");
            exit();
        }
}
else{
    echo mysqli_error($conn);
}

?>