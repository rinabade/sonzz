<?php 
	include "connection.php";
	session_start();

  if(!isset($_SESSION["admin_email"])){
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html>
	<head>
  		<meta charset="utf-8">
  		<title>Users</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
			<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200&display=swap" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="css/admin_table.css?v=<?php echo time();?>">
			<link rel="stylesheet" type="text/css" href="css/search.css?v=<?php echo time();?>">
			<link rel="stylesheet" type="text/css" href="css/modal.css?v=<?php echo time();?>">
	</head>
	<body>
			<div class="text">
				<h1>USERS</h1>
					
				<!-- <div class="box">
    				<form name="search">
        			<input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();">
    				</form>
    				<i class="fas fa-search"></i>
					</div> -->
			 <hr>
				
			
			<div class="my_table">
				
					<table>
					
							<thead>
								<tr>
									<th>ID</th>
									<th>FIRST_NAME</th>
									<th>LAST_NAME</th>
									<th>EMAIL</th>
									
									<th>ADDRESS</th>
									<th style="text-align: center;">ACTION</th>
								</tr>
							</thead>

							<tbody>
										<?php
										$sql = "SELECT * FROM user";
											$result = mysqli_query($conn, $sql);

											if (mysqli_num_rows($result) > 0) {
											  // output data of each row
											  while($row = mysqli_fetch_assoc($result)) {
										?>
										<tr>
											<td><?php echo $row["user_id"]; ?></td>
											<td><?php echo $row["fname"]; ?></td>
											<td><?php echo $row["lname"]; ?></td>
											<td><?php echo $row["email"]; ?></td>
											
											<td><?php echo $row["address"]; ?></td>
											<td>
												<span class="action_btn">
													<a href="#" class="delete delete-btn" data-id="<?php echo $row["user_id"]; ?>">Delete</a>
												</span> <!-- actionbtn -->
											</td>
										</tr>

										<?php 
											  }
											} else {
											  echo "0 results";
											}

											mysqli_close($conn);
										?>
							</tbody>

				</table>
			</div>

			<!-- modal starts here -->
				<div id="delete_model" class="modal">
						<i class="fas fa-times modal-close"></i>
						
						<div class="modal-cont">
							<h2>Are you sure you want to delete?</h2>
						</div>

						<form action="delete_user.php" method="POST">
								<input type="hidden" id="Deliting_id" name="Deliting_id">
								<button class="modal-delete-btn" name="delete">Delete</button>
						</form>
				</div>

	         <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

				<script>
						$(document).ready(function(){
							$("#delete_model").hide();
						  $(".delete-btn").click(function(){
						    $("#delete_model").toggle();
						  });
						  $(".modal-close").click(function(){
						    $("#delete_model").hide();
						  });
						  $(document).on("click",".delete-btn", function(){
						            var Id = $(this).data("id");
						            $("#Deliting_id").val(Id);
						        }); 
						});
				</script>

	</body>
</html>

<!-- data-id='{$row["blog_id"]}'
$(document).on("click",".delete-btn", function(){
            var blogId = $(this).data("id");
            $("#Deliting_blog_id").val(blogId);
        }); -->
