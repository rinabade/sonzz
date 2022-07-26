<?php
    
    include ('../connection.php');

    if(isset($_POST['savechange'])){
        $email=$_POST['email'];
        $current_pass=md5($_POST['cpw']);
        $password=md5($_POST['npw']);
        $cpassword=md5($_POST['cpwd']);
        $sql1="SELECT password FROM user where email='$email' AND confirm_password='$current_pass' ";
        $result= mysqli_query($conn , $sql1);
        if(mysqli_num_rows( $result) >= 1){
          $result1= mysqli_query($conn,"UPDATE user SET password = '$password', confirm_password= '$password' WHERE email= '$email'");
                if(mysqli_query($conn,$result1)){
                    header("location:userprofile.php");
                }
                else{
                    echo mysqli_error($conn);
                }

            }
            else{
                echo mysqli_error($conn);
            }
            
        
}
else{
    echo mysqli_error($conn);
}