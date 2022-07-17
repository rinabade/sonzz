<?php
    SESSION_start();
    $id=$_SESSION['user_id'];
    $fname=$_SESSION['fname'];
    if(isset($_SESSION['user_id']) && isset($_SESSION['fname'])){

    
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="userprofile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container d-flex justify-content-center">
            <div class="card p-3 py-4">
                <div class="text-center"> 
                <?php 
                  include "../connection.php";

                    $sql="SELECT * FROM user WHERE user_id='" . $id . "' ";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if($row['user_id']==$id){
                      // echo base64_encode($row['image']) ;ss
                      $img=$row['image'];
                      echo '<img src="data:image;base64,'.$row['image'].'" class="rounded-circle" id="photo"> ';
                ?>
                <form action="edit.php" method="POST">
                <div class="artist-img">
                <!-- <img src="../images/pp.png" width="100" class="rounded-circle" id="photo"/> -->
                <input type="file" id="file">
                <label  for="file" id="uploadbtn"><i style="font-size:18px" class="fa">&#xf030;</i></label>
                
                </div>
                </form>
                    <h3 class="mt-2"><?php echo $fname;} ?></h3>
                      <hr class="line">
        <div class="wrapper">
        <div class="right">
                      <a href="user_profile.php"><b>INFORMATION</b></a>
        <a href="activity.php"><b>ACTIVITIES</b></a>
        <hr><br><br>
        <div class="info">
            
            <div class="info_data">
             
               <div class="data">
                    <h4>Firstname: Aditi</h4>
               </div>
               <br>
                 <div class="data">
                   <h4>Lastname : Shrestha</h4>
              </div>
                 <br>
                 <div class="data">
                    <h4>Email: aditi@gmail.com</h4>
                    
                 </div>
                 <br>
                 <div class="data">
                   <h4>Phone: 9818035087</h4>
              </div>
              <br>
              <div class="data">
                   <h4>Address: Baneshwor</h4>
              </div>
              </div>
              </div>
             <br>
              <div class="open">
                <button class="button button1" onclick="openform()"> Change Information</button>
              </div>
              <div class="open">
                <button class="button button2" onclick="changeform()"> Change Password </button>
              </div>
       <br><br><br>
                      <div class="social-buttons mt-5"> 
                        <button class="neo-button"><i class="fa fa-facebook fa-1x"></i> </button>
                       <button class="neo-button"><i class="fa fa-google fa-1x"></i> </button> 
                       <button class="neo-button"><i class="fa fa-twitter fa-1x"></i> </button>

                      </div>
                      
        
              <!-- change -->
             <div class="popup-overlay"></div>
               <div class="popup">
                  <div class="popup-close" onclick="closeForm()">×</div>
                    <div class="form">
                      
                        <form action="edit.php" method="POST" enctype="multipart/form-data">
                             <div class="header">
                                   Change information
                             </div>
                             <hr><br>
                             <div class="element">
                               <label for="image"><b>Image</b></label>
                               <input type="file" name="file">

                                <!-- <input type="text"  placeholder="Firstname" name="fname" id="fname" value="" required="required"> -->
                            </div>

                            <div class="element">
                               <label for="fname"><b>Firstname</b></label>
                                <input type="text"  placeholder="Firstname" name="fname" id="fname" value="" >
                            </div>
      
                              <div class="element">
                                <label for="lname"><b>Lastname</b></label>
                                  <input type="text"  placeholder="Lastname" name="lname" id="lname" value="">
                              </div>
                              <!-- <div class="element">
                                <label for="password"><b>Password</b></label>
                                  <input type="password"  placeholder="Password" name="password" id="password" required="required">
                              </div> -->
                              <div class="element">
                                <label for="email"><b>Email</b></label>
                                  <input type="email"  placeholder="Email" name="email" id="email" value="">
                              </div>
                              <div class="element">
                                <label for="phone"><b>Phone number</b></label>
                                  <input type="text"  placeholder="Phone number" name="Phone_number" id="phone" value="">
                              </div>
                              <div class="element">
                                <label for="address"><b>Address</b></label>
                                  <input type="text"  placeholder="Address" name="address" id="address" value="">
                              </div>
                              <div class="element">
                                <button type="submit" class="button2" name="save">Save changes</button>
                              </div>
                              
                        </form>
                          
                           
                    </div>
              </div>
      
      <!-- change password -->
      <div class="popup-overlay"></div>
            <div class="popup2">
               <div class="popup2-close" onclick="closeForm1()">×</div>
              <div class="form">
                
                <form action="p_change_password.php " method="POST">
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
      </div>
      </div>

     
                </div>
                       
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        </body>
        </html>

        <?php
    }else{
        echo "error";
    }
    ?>