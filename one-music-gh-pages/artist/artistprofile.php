<?php 
  SESSION_start();
  $id=$_SESSION['artist_id'];
  if(isset($_SESSION['artist_id']) && isset($_SESSION['name']) && isset($_SESSION['lname'])){
    include('../connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sonzz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"/>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/artistprofile.css">
</head>

<body>
<?php 
  $sql="SELECT * FROM artist WHERE artist_id='$id' ";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  if($row['artist_id']==$id){
    // echo base64_encode($row['image']) ;
  ?>   
    <header>
        <div class="menu_side">
        <div class="circle-frame">
        <img class="profilepic" src="img/core-img/l.png" width="150" height="150" >
          </div>
        <div class="playlist">
        <!-- <h4 class="active"><span></span><a href="artist.php"><i class="bi bi-house-door"></i>Home</a></h4> -->
                 <h4 class="active"><span></span><i class="bi bi-person-circle"></i>Profile</h4>
                 <h4 class="active"><span></span><a href="mostlyviewed.php"><i class="bi bi-emoji-heart-eyes"></i>Mostly viewed</a></h4>
        </div>
        <h5 class="yourmusic">Your Music</h5>
        <div class="playlist">
                 <h4 class="active"><span></span><a href="songs.php"><i class="bi bi-file-music"></i>Songs</a></h4>
                 <h4 class="active"><span></span><a href="album.php"><i class="bi bi-disc"></i>Albums</a></h4>
        </div>
        <div class="playlist">
                 <h4 class="active logout"><span></span><i class="bi bi-box-arrow-left"></i>Logout</h4>
                 
        </div>

        </div>
       
        <div class="song_side">
        <div class="container d-flex justify-content-center">
            <div class="card p-3 py-4">
                <div class="text-center"> 
                
                <div class="artist-img">
                <img src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['picture']; ?>" width="150" height="150"class="rounded-circle" id="photo"/>
                <!-- <input type="file" id="file">
                <label for="file" id="uploadbtn"><i style="font-size:18px" class="fa">&#xf030;</i></label> -->
                </div>
                
                    <h3 class="mt-2"><?php echo $row['first_name']?> <?php echo $row['last_name']?></h3>
                      <hr class="line">

                             
        <div class="wrapper">
        <div class="right">
            <a href="artistprofile.php"><b>INFORMATION</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="activity.php"><b>ACTIVITIES</b></a>
          <hr><br><br>
          <div class="info">
            
            <div class="info_data">
             
               <div class="data">
                    <h4>First Name &nbsp;&nbsp;:- &nbsp;&nbsp; <?php echo $row['first_name']; ?></h4>
               </div>
               <br>
                 <div class="data">
                   <h4>Last Name &nbsp;&nbsp; :- &nbsp;&nbsp;<?php echo $row['last_name']; ?></h4>
              </div>
                 <br>
                 <div class="data">
                    <h4>Email &nbsp;&nbsp; :- &nbsp;&nbsp; <?php echo $row['email']; ?></h4>
                    
                 </div>
                 <br>
                 <div class="data">
                   <h4>Bio  &nbsp;&nbsp;:- &nbsp;&nbsp;  <?php echo $row['bio']; ?></h4>
              </div>
              <br>
              <div class="data">
                   <h4>Address&nbsp;&nbsp;  :- &nbsp;&nbsp;<?php echo $row['address']; ?></h4>
              </div>
              <br><br><br>
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
                      
                        <form action="profile_handle.php" method="POST" enctype="multipart/form-data">
                             <div class="header">
                                  Change information
                             </div>
                             <hr><br>
                             <div class="element">
                                <label for="image"><b>Image</b></label>
                                <input type="file" name="file">
                              </div>
                            <div class="element">
                               <label for="fname"><b>Firstname</b></label>
                                <input type="text"  placeholder="Firstname" name="fname" id="fname" value="<?php echo $row['first_name']; ?>" required="required">
                            </div>
      
                              <div class="element">
                                <label for="lname"><b>Lastname</b></label>
                                  <input type="text"  placeholder="Lastname" name="lname" id="lname" value="<?php echo $row['last_name']; ?>" required="required">
                              </div>
                              
                              <div class="element">
                                <label for="email"><b>Email</b></label>
                                  <input type="email"  placeholder="Email" name="email" id="email" value="<?php echo $row['email']; }?>"required readonly>
                              </div>

                              <div class="element">
                                <label for="bio"><b>Bio</b></label>
                                  <input type="text"  placeholder="Bio" name="bio" id="bio" value="<?php echo $row['bio']; ?>" required="required">
                              </div>

                              <div class="element">
                                <label for="address"><b>Address</b></label>
                                  <input type="text"  placeholder="Address" name="address" id="address" value="<?php echo $row['address']; ?>" required="required">
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
</div>
</header>
</body>
</html>
<?php
  }
  else{
  echo("error");
  }
?>