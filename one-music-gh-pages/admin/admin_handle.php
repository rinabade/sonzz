<?php 
session_start();

$email=$_SESSION['admin_email'];
$id=$_SESSION['admin_id'];


  if(isset($_SESSION['admin_email']) && isset($_SESSION['admin_id'])){

    include "connection.php";

    if(isset($_POST['save'])){
      $first_name = $_POST['fname'];
      $last_name = $_POST['lname'];
      // $password = md5($_POST['password']);
      $email = $_POST['email'];
      $Phone_number = $_POST['Phone_number'];
      $address = $_POST['address'];

     $sql = "UPDATE user SET first_name='$first_name', last_name='$last_name', email='$email', phone='$Phone_number', address='$address' WHERE id='$id'";

      if(mysqli_query($conn,$sql)){
        header("location:admin.php");
      }
      else{
        echo mysqli_error($conn);
      }
    }

    }
?>
