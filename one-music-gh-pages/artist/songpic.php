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
    <link rel="stylesheet" href="css/songpic.css">
</head>

<body>
    <header>
        <div class="menu_side">
        <div class="circle-frame">
        <img class="profilepic" src="">
          </div>
        <div class="playlist">
        <!-- <h4 class="active"><span></span><a href="artist.php"><i class="bi bi-house-door"></i>Home</a></h4> -->
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
                      <a href="artistprofile.php"><b>INFORMATION</b></a>
        <a href="activity.php"><b>ACTIVITIES</b></a>
        <br><hr>
        <div class="projects">

            <a href="#"><b>Upload song</b></a>
            <a href="#"><b>Upload album</b></a>
            
        </div>
         </div>
         <br><br>
         
         <div class="form">
         <div class="container1">
					<label>Song Name:</label><br>
					<input type="text" placeholder="" name="id"  required><br><br>
					
					<label>Song</label><br>
                    <div class="choose"> 
					<input type="file" name="audio" class="file">
					
				   </div><br><br>
                   <label>Image</label><br>
                        <div class="choose"> 
					<input type="file" name="img" class="file">
					
				   </div><br><br>
                   <div class="open">
                <button class="button button2"> Upload </button><br><br>
              </div>
				</div>
             </div>
            
        
              <!-- change -->
             
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</div>
</header>
</body>
</html>
