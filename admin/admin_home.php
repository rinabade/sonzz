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
  		<title>home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/modal.css?v=<?php echo time();?>">
		<link rel="stylesheet" type="text/css" href="css/admin_home.css?v=<?php echo time();?>">
		<link rel="stylesheet" type="text/css" href="css/admin_table.css?v=<?php echo time();?>">
	</head>
	<body>
		<div class="text">
			<h1>HOME</h1>
			<hr>
		</div>
		<div class="quote">
				"Music is a breather to life."
			</div>
		<div class="main">
		<div class="container">
			<!-- <div class="total_donee">
				<h4>TOTAL DONEE </h4>
				<?php
										 $sql = "SELECT COUNT(donee_id) FROM request GROUP BY donee_id";
											$result = mysqli_query($conn, $sql);

											 $total_donee=mysqli_num_rows($result);

											
											 ?>
						<span class="number"><?php echo $total_donee; ?></span>							
			</div> -->

			<div class="total_donor">
				<h4>TOTAL ARTISTS </h4>
				<?php
										 $sql = "SELECT COUNT(donor_id) FROM donation GROUP BY donor_id ";
											$result = mysqli_query($conn, $sql);

											 $counter=mysqli_num_rows($result);
							
				?>

				<span class="number"><?php echo $counter; ?></span>
			</div>

			<div class="total_users">
				<h4>TOTAL USERS </h4>

				<?php
										 $sql = "SELECT * FROM user  ";
											$result = mysqli_query($conn, $sql);

											 $counter=mysqli_num_rows($result);
							
				?>

				<span class="number"><?php echo $counter; ?></span>
			</div>

			<div class="total_requests">
				<h4>TOTAL SONGS </h4>
				<?php
										 $sql = "SELECT * FROM request  ";
											$result = mysqli_query($conn, $sql);

											 $counter=mysqli_num_rows($result);
							
				?>

				<span class="number"><?php echo $counter; ?></span>
			</div>
		</div>

		<div class="tables">
			<div class="feedbacks">
				<h3>Latest Uploads</h3>
				<div class="my_table">
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>ARTIST_NAME</th>
							<th>SONG</th>
							<th>PREVIEW</th>
						</tr>
					</thead>

					<tbody>

						<?php
										$sql = "SELECT * FROM feedback LIMIT 5";
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
						</tr>

						<?php 
						  }
							} else {
								 echo "0 results";
									}

							
						?>
						

					</tbody>
				</table>
			</div> <!-- table end -->
			</div>

			<div class="donors">
				<h3>Top 5 Artist</h3>
				<div class="my_table">
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>NAME</th>
							<th>CONTACT</th>
							<th>NUMBER OF DONATION DONE</th>
						</tr>
					</thead>

					<tbody>

						<?php
										 $sql = "SELECT COUNT(donor_id) , donor_id, first_name, last_name, phone FROM donation LEFT JOIN user ON donation.donor_id = user.id GROUP BY donor_id  ORDER BY  COUNT(donor_id) DESC LIMIT 5";
											$result = mysqli_query($conn, $sql);

											if (mysqli_num_rows($result) > 0) {
											  // output data of each row
											  while($row = mysqli_fetch_assoc($result)) {
						?>


						<tr>
							<td><?php echo $row["donor_id"]; ?></td>
							<td><?php echo $row["first_name"].' '.$row["last_name"];   ?></td>
							<td><?php echo $row["phone"]; ?></td>
							<td><?php echo $row["COUNT(donor_id)"]; ?></td>
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
			</div>

			
			
		</div>
	</div>
	</body>
</html>
