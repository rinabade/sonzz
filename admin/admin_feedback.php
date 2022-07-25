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
  		<title>Feedback</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/modal.css?v=<?php echo time();?>">
		<link rel="stylesheet" type="text/css" href="css/admin_table.css?v=<?php echo time();?>">
	</head>
	<body>
		<div class="text">
			<h1>FEEDBACK</h1>
			<hr>
		</div>
			<div class="my_table">
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>FULL_NAME</th>
							<th>EMAIL</th>
							<th>COMMENT</th>
							<th style="text-align: center;">ACTION</th>
						</tr>
					</thead>

					<tbody>
						<?php
										$sql = "SELECT * FROM feedback";
											$result = mysqli_query($conn, $sql);

											if (mysqli_num_rows($result) > 0) {
											  // output data of each row
											  while($row = mysqli_fetch_assoc($result)) {
						?>

						<tr>
							<td><?php echo $row["id"]; ?></td>
							<td><?php echo $row["full_name"]; ?></td>
							<td><?php echo $row["email"]; ?></td>
							<td><?php echo $row["Comments"]; ?></td>
							<td>
								<span class="action_btn">
									<a href="#" class="delete delete-btn" data-id="<?php echo $row["id"]; ?>">Delete</a>
								</span> <!-- action btn -->
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
			</div> <!-- table end -->

			<!-- modal starts here -->
				<div id="delete_model" class="modal">
						<i class="fas fa-times modal-close"></i>
						
						<div class="modal-cont">
							<h2>Are you sure you want to delete?</h2>
						</div>

						<form action="delete_feedback.php" method="POST">
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