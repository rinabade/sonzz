
<?php
  session_start();

include "connection.php";

  if (isset($_POST["Login"])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM admin WHERE email='$email' AND password='$password'  ";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)==1){ 
      $row=mysqli_fetch_assoc($result);
      if($row['email']==$email && $row['password']==$password){
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
