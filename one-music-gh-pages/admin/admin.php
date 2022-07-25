<?php

  session_start();
  $email=$_SESSION['admin_email'];
  $id=$_SESSION['admin_id'];
 // echo $id;
 // die();
  include "connection.php";

  if(isset($_SESSION['admin_email']) && isset($_SESSION['admin_id'])){
  
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <link rel="stylesheet" type="text/css" href="css/admin.css?v=<?php echo time();?>">


  </head>
  <body>
  <section>
   
<div class="wrapper">
    <div class="right">
    <?php

          $sql="SELECT * FROM admin WHERE admin_id='$id'";
          $query = mysqli_query($conn,$sql);
          if (mysqli_num_rows($query) === 1) {
          $row =  mysqli_fetch_assoc($query);
          if($row['id'] === $id){
                 
                 
        ?>
      <h2><i class="fas fa-user-circle" style="color:#4d2600; font-size:50px;"></i> &nbsp <?php echo $row['first_name'], ' ',  $row['last_name']; ?></h2><br><br>
       <?php 
            }
        }
        ?>
        <a href="admin.php"><b>INFORMATION</b></a><br>
        <hr>
        <div class="info">
            
            <div class="info_data">

              <div class="data">
                  <h4>Fullname</h4>
                  <p><?php echo $row['first_name'], ' ',  $row['last_name']; ?></p>
              </div>
              

             <div class="data">
                <h4>Email</h4>
                <p><?php echo $row['email']; ?></p>
              </div>
              
              <div class="data">
                <h4>Phone</h4>
                <p><?php echo $row['phone']; ?></p>
              </div>
           
              <div class="data">
                <h4>Address</h4>
                <p><?php echo $row['address']; ?></p>
              </div>

              <?php
                if(isset($_GET['error'])){ $error = $_GET['error']; 
              ?>

             <p class="error" style="color:whitesmoke;background:#4d2600;padding: 5px;"><?php echo $error ; ?></p>
            <?php } ?>
            </div>
        </div>

        <div class="open">
       <button class="button button1" onclick="openform()"> Change Information </button>
     </div>

     <div class="open">
          <button class="button button2" onclick="changeform()"> Change Password </button>
        </div>


     <!-- change information -->
       <div class="popup-overlay"></div>
      <div class="popup">
         <div class="popup-close" onclick="closeForm()">×</div>
        <div class="form">
          <?php
                             
              $sql="SELECT * FROM user WHERE id = '$id'";
              $query = mysqli_query($conn,$sql);
              if (mysqli_num_rows($query) === 1) {
              $row =  mysqli_fetch_assoc($query);
              if($row['id'] === $id){
            ?>
            <form action="admin_handle.php" method="POST">

           <div class="header">
                 Change information
           </div>
           <hr><br>
          <div class="element">
            <label for="fname"><b>Firstname</b></label>
            <input type="text"  placeholder="Firstname" name="fname" id="fname" value="<?php echo $row["first_name"];   ?>"  required="required">
        </div>

        <div class="element">
            <label for="lname"><b>Lastname</b></label>
            <input type="text"  placeholder="Lastname" name="lname" id="lname" value="<?php echo $row["last_name"];   ?>"  required="required">
        </div>
  
    <div class="element">
      <label for="email"><b>Email</b></label>
        <input type="email"  placeholder="Email" name="email" id="email" value="<?php echo $row['email']; ?>" required="required">
    </div>

    <div class="element">
      <label for="phone"><b>Phone number</b></label>
        <input type="text"  placeholder="Phone number" name="Phone_number" id="phone" value="<?php echo $row['phone']; ?>"  required="required">
    </div>

    <div class="element">
      <label for="address"><b>Address</b></label>
        <input type="text"  placeholder="Address" name="address" id="address" value="<?php echo $row['address']; ?>" required="required">
    </div>
    <div class="element">
      <button type="submit" class="button2" name="save">Save changes</button>
    </div>
  </form>
    <?php
        }
      }
    ?>
    </div>
    </div>


    <!-- change password -->
    <div class="popup-overlay"></div>
      <div class="popup2">
         <div class="popup2-close" onclick="closeForm1()">×</div>
        <div class="form">
          
          <form action="ap_change_password.php " method="POST">
           <div class="header">
                 Change Password
           </div>
           <hr><br>

          <div class="element">
             <label for="cpw"><b>Current Password</b></label>
              <input type="password"  placeholder="current_password" name="cpw" id="cpw" required="required">
          </div>

          <div class="element">
            <label for="npw"><b>New Password</b></label>
              <input type="password"  placeholder="new_password" name="npw" id="npw" required="required">
          </div>
    
          <div class="element">
            <label for="cpwd"><b>Confirm Password</b></label>
              <input type="password"  placeholder="confirm_password" name="cpwd" id="cpwd" required="required">
          </div>

          <div class="element">
            <button type="submit" class="button3" name="savechange">Save changes</button>
          </div>
      </form>
  
    </div>
  </div>

<script>
  function openform(){
  document.body.classList.add("showLoginForm");
}
  function changeform(){
    document.body.classList.add("showchangeForm");
 }
  function closeForm(){
     document.body.classList.remove("showLoginForm");
  }
   function closeForm1(){
        document.body.classList.remove("showchangeForm");
    }
</script>


<br><br><br><br>
    
    </div>
</div>
</section>
</body>
</html>
<?php
}
?>
