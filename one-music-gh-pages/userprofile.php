<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonzz</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/b63b22a684.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/userprofile.css">
</head>
<body>
    <div class="main-contaner">
        <div class="playlist-container">
            <div class="playlist">
            <a href="mainpage.php"><img src="img/core-img/l.png" alt="SONZZ" class="logo"></a>
                <div class="playlist-card">
                    <i class="fas fa-home"></i>
                    <a href="user.php"> <h3 class="playlist-main-content">Home</h3></a>

                </div>
                <div class="playlist-card">
                    <i class="fas fa-user"></i>
                    <a href="userprofile.php"><h3 class="playlist-main-content">Profile</h3></a>

                </div>
    
                
                <div class="playlist-extra">
                    <h4 class="playlist-main-content-header">PLAYLIST</h4>
                    <div class="playlist-card">
                    <i class="fas fa-list"></i>
                    <a href="playlist.php"><h3 class="playlist-main-content">Play List</h3></a>

                </div>
                    
                    <div class="playlist-card">
                        <i class="fas fa-bookmark"></i>
                        <a href="like.php"><h3 class="playlist-main-content">Liked Songs</h3></a>
    
                    </div>
                </div>
                
            </div>
            <div class="playing">
            <main>
      
      <div class="container d-flex justify-content-center">
        <div class="card p-3 py-4">
            <div class="text-center"> 

            <div class="artist-img">
            <img src="img/bg-img/pa1.jpg" width="100" class="rounded-circle" id="photo"/>
            
            </div>
            
                <h3 class="mt-2"> Aditi Shrestha</h3>
                  <hr class="line">
      <div class="wrapper">
        <div class="right">
                      <a href="user_profile.php"><b>INFORMATION</b></a>
        <a href="activity.php"><b>SONGS</b></a>
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
                        <button class="neo-button"><i class="fa fa-facebook fa-1x"><a href="https://www.facebook.com/"></a></i> </button>
                       <button class="neo-button"><i class="fa fa-google fa-1x"><a href="https://www.google.com/"></a></i> </button> 
                       <button class="neo-button"><i class="fa fa-twitter fa-1x"><a href="https://www.twitter.com/"></a></i> </button>

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
  </main>
 
            </div>
             
            
             </div>
 
         </div>
       
            
 </body>
 </html>