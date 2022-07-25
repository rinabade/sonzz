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
        <h4 class="active"><span></span><a href="artist.php"><i class="bi bi-house-door"></i>Home</a></h4>
                 <h4 class="active"><span></span><i class="bi bi-person-circle"></i>Profile</h4>
                 <h4 class="active"><span></span><a href="mostlyviewed.php"><i class="bi bi-emoji-heart-eyes"></i>Mostly viewed</a></h4>
        </div>
        <h5 class="yourmusic">Your Music</h5>
        <div class="playlist">
                 <h4 class="active"><span></span><a href="songs.php"><i class="bi bi-file-music"></i>Songs</a></h4>
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
                <img src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['picture']; ?>" width="150" height="150"class="rounded-circle" id="photo"/>
                <!-- <input type="file" id="file">
                <label for="file" id="uploadbtn"><i style="font-size:18px" class="fa">&#xf030;</i></label> -->
                </div>
                
                    <h3 class="mt-2"><?php echo $row['first_name']?> <?php echo $row['last_name'];}?></h3>
                      <hr class="line">

                             
        <div class="wrapper">
        <div class="right">
            <a href="artistprofile.php"><b>INFORMATION</b></a>
            <a href="activity.php"><b>ACTIVITIES</b></a>
            <hr><br>
            
            <a href="#"><b>Upload Song</b></a>
            <a href="#"><b>Upload Album</b></a>
        <div class="info">
        <div class="form">
                      
                      <form action="uploadhandle.php" method="POST" enctype="multipart/form-data">
                           <!-- <div class="header">
                                 Upload Songs
                           </div> -->
                           <br><br><br>
                           <div class="element">
                                <label>Song : &nbsp;&nbsp;</label>
                                <input name="audio" type="file"/>
                            </div>
                            <br>
                          <div class="element">
                                <label>Image : &nbsp;&nbsp;</label>
                                <input name="img" type="file">
                          </div>
                          <br>
                        <div class="element">
                            <label>Title : &nbsp;&nbsp;</label>
                                <input type="text" name="title">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                            </div>
                            <br>
                            <div class="element">
                                <Button type="submit" name="Submit" id="Submit" value="Upload">Upload</Button>
                            </div>
                            
                      </form>
                        
                         
                  </div>
        <div class="info_data">
             
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