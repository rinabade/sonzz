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
    <header>
        <div class="menu_side">
        <div class="circle-frame">
        <img class="profilepic" src="">
          </div>
        <div class="playlist">
        <h4 class="active"><span></span><a href="artist.php"><i class="bi bi-house-door"></i>Home</a></h4>
                 <h4 class="active"><span></span><i class="bi bi-person-circle"></i>Profile</h4>
                 <h4 class="active"><span></span><i class="bi bi-emoji-heart-eyes"></i>Mostly viewed</h4>
        </div>
        <h5 class="yourmusic">Your Music</h5>
        <div class="playlist">
                 <h4 class="active"><span></span><i class="bi bi-file-music"></i>Songs</h4>
                 <h4 class="active"><span></span><i class="bi bi-disc"></i>Albums</h4>
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
                <img src="img/core-img/pp.jpg" width="100" class="rounded-circle" id="photo"/>
                <input type="file" id="file">
                <label for="file" id="uploadbtn"><i style="font-size:18px" class="fa">&#xf030;</i></label>
                </div>
                
                    <h3 class="mt-2"> Aditi Shrestha</h3>
                      <hr class="line">
        <div class="wrapper">
        <div class="right">
                      <a href="user_profile.php"><b>INFORMATION</b></a>
        <a href="songgpic.php"><b>ACTIVITIES</b></a>
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
                   <h4>Bio: </h4>
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
                      
                        <form action="profile_handle.php" method="POST">
                             <div class="header">
                                   Change information
                             </div>
                             <hr><br>
                            <div class="element">
                               <label for="fname"><b>Firstname</b></label>
                                <input type="text"  placeholder="Firstname" name="fname" id="fname" value="" required="required">
                            </div>
      
                              <div class="element">
                                <label for="lname"><b>Lastname</b></label>
                                  <input type="text"  placeholder="Lastname" name="lname" id="lname" value="" required="required">
                              </div>
                              <!-- <div class="element">
                                <label for="password"><b>Password</b></label>
                                  <input type="password"  placeholder="Password" name="password" id="password" required="required">
                              </div> -->
                              <div class="element">
                                <label for="email"><b>Email</b></label>
                                  <input type="email"  placeholder="Email" name="email" id="email" value=" required="required">
                              </div>
                              <div class="element">
                                <label for="phone"><b>Phone number</b></label>
                                  <input type="text"  placeholder="Phone number" name="Phone_number" id="phone" value="" required="required">
                              </div>
                              <div class="element">
                                <label for="address"><b>Address</b></label>
                                  <input type="text"  placeholder="Address" name="address" id="address" value="" required="required">
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