<?php 
session_start();

  if(!isset($_SESSION["admin_email"])){
    header("Location: index.php");
  }


?>



<!DOCTYPE html>
<html>
	<head>
  		<meta charset="utf-8">
  		<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/dashboard.css?v=<?php echo time();?>">
	</head>
	<body>

		<!-- navigation start -->
		<div class="sidenav">
			<div class="logo_content">
				<div class="logo">
						<div class="logo_name">SONZZ</div>
				</div>
				<i class='bx bx-menu' id="btn" style="color:white" ></i>
			</div>
				<ul class="navlist">
					<li class="tablinks active" onclick="openDiv(event, 'home')">
					<a href="#" >
						<i class='bx bx-home'  ></i>
						<span class="link_name">Home</span>
					</a>
					<span class="tooltip">Home</span>
					</li>
					<!-- <li class="tablinks"onclick="openDiv(event, 'donee')">
					<a href="#">
						<i class='bx bx-handicap' ></i>
						<span class="link_name">Artist</span>
					</a>
					<span class="tooltip">Artist</span>
					</li> -->
					<li class="tablinks" onclick="openDiv(event, 'artist')">
					<a href="#">
						<i class='bx bx-donate-heart' ></i>
						<span class="link_name">Artist</span>
					</a>
					<span class="tooltip">Artist</span>
					</li>
					<li class="tablinks" onclick="openDiv(event, 'request')">
					<a href="#">
						<i class='bx bxl-firebase'></i>
						<span class="link_name">Payment</span>
					</a>
					<span class="tooltip">Payment</span>
					</li>
					<li class="tablinks" onclick="openDiv(event, 'feedback')">
					<a href="#">
						<i class='bx bx-outline'></i>
						<span class="link_name">Feedback</span>
					</a>
					<span class="tooltip">Feedback</span>
					</li>
					<li class="tablinks" onclick="openDiv(event, 'users')">
					<a href="#">
						<i class='bx bx-group' ></i>
						<span class="link_name">Users</span>
					</a>
					<span class="tooltip">Users</span>
					</li>
					<li class="tablinks" onclick="openDiv(event, 'admins')">
					<a href="#">
						<i class='bx bx-user'></i>
						<span class="link_name"> Admin</span>
					</a>
					<span class="tooltip">Admin</span>
					</li>
				</ul>
				 <div class="profile_contents">
					<div class="profile">
						<div class="profile_details">
							<div class="name">
								<div class="name_log"><a href="admin_logout.php" style="color:darkblue" >Log_out</a></div>
							</div>
						</div>
						<a href="admin_logout.php"><i class='bx bx-log-out' id="log_out" style="color:darkblue"></i></a> 
					</div>
				</div> 
		</div>
		<!-- navigation end -->

		<!-- main body start -->
		<div class="home_content">
			<div id="home" class="tabcontent">
				<iframe src="admin_home.php" height="100%" width="100%" title="Iframe Example"></iframe>				
			</div>
			<div id="artist" class="tabcontent">	
				<iframe src="admin_artist.php" height="100%" width="100%" title="Iframe Example"></iframe>	
			</div>
			<div id="donor" class="tabcontent">
				<iframe src="admin_donor.php" height="100%" width="100%" title="Iframe Example"></iframe>				
			</div>
			<div id="request" class="tabcontent">
				<iframe src="admin_requests.php" height="100%" width="100%" title="Iframe Example"></iframe>				
			</div>
			<div id="feedback" class="tabcontent">
				<iframe src="admin_feedback.php" height="100%" width="100%" title="Iframe Example"></iframe>				
			</div>
			<div id="users" class="tabcontent">
				<iframe src="admin_users.php" height="100%" width="100%" title="Iframe Example"></iframe>				
			</div>
			<div id="admins" class="tabcontent">
				<iframe src="admin.php" height="100%" width="100%" title="Iframe Example"></iframe>			
			</div>
		</div>
		<!-- main body end -->

		<!-- JQuery for navigation -->
		<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
		<script>
			let btn = document.querySelector("#btn");
			let sidenav = document.querySelector(".sidenav");
			btn.onclick = function(){
				sidenav.classList.toggle("active");
			}
		</script>
		<script src="js/dashboard.js"></script>
	</body>
</html>
