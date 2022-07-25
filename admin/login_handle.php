
<?php
  session_start();

include "connection.php";


  if (isset($_POST["Login"])){

    $email=$_POST['email'];
    $passwor=$_POST['password'];
    $pass=md5($passwor);
 
    $sql="SELECT * FROM user WHERE email='$email' AND confirm_password='$pass' AND role ='2' ";

    $result=mysqli_query($conn,$sql);

    

    if (mysqli_num_rows($result)==1){ 
  
      $row=mysqli_fetch_assoc($result);

      if($row['email']==$email&& $row['confirm_password']==$pass){

        $_SESSION['admin_email']=$row['email'];
        $_SESSION['admin_id']=$row['id'];

        header("location:dashboard.php");
        
      }
    } 
   else{
      header("location:index.php?error=Incorrect email or Password");
     
    }
 }
  mysqli_close($conn);
?>
