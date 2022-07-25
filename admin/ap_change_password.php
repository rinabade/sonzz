<?php 
session_start();

  $email=$_SESSION['admin_email'];

   include "connection.php";
  
if(isset($_POST['savechange'])){
    if(isset($_POST['cpw'])&&isset($_POST['npw'])&&isset($_POST['cpwd'])){

          $cpw=md5($_POST['cpw']);
          $npw=md5($_POST['npw']);
          $cpwd=md5($_POST['cpwd']);

            if($npw !== $cpwd){

                $error="The Confirmation Password does not match.";
                header("Location: admin.php?error=$error");

              }
              else{
                //hashing the password
                $email= $_SESSION['admin_email'];

                $sql = "SELECT confirm_password
                        FROM user 
                        WHERE email= '$email' AND confirm_password= '$cpw' ";

                $result= mysqli_query($conn , $sql);

                    if(mysqli_num_rows( $result) >= 1){

                      $result1= mysqli_query($conn,"UPDATE user SET confirm_password = '$cpwd' WHERE email= '$email'");

                      if($result1){
                       echo $error = 'Your password has been updated successfully.';
                         header("Location: admin.php?error=$error");
                      }


                    }
                    else{
                      echo  $error = ' New Password and confirm password does not match.';
                        header("Location: admin.php?error=$error");
                    }
                }

    }
    else{
      header("Location: admin.php?error=''");
      $error = '';
       exit();
     
    }
  }else{
  $error = '';

}
?>
