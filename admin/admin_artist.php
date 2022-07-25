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
  		<title>Artist</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/admin_table.css?v=<?php echo time();?>">
	</head>
	<body>
		<div class="text">
			<h1>Artist</h1>
			<hr>
		</div>
			<div class="my_table">
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>NAME</th>
							<th>CONTACT</th>
							<th style="text-align: center;">SONGS UPLOADED</th>
						</tr>
					</thead>

					<tbody>

						<?php
										$sql = "SELECT * FROM donation LEFT JOIN user ON donation.donor_id = user.id GROUP BY user.id";
											$result = mysqli_query($conn, $sql);

											if (mysqli_num_rows($result) > 0) {
											  // output data of each row
											  while($row = mysqli_fetch_assoc($result)) {
						?>


						<tr>
							<td><?php echo $row["id"]; ?></td>
							<td><?php echo $row["first_name"].' '.$row["last_name"];   ?></td>
							<td><?php echo $row["phone"]; ?></td>
							<td>
								<span class="action_btn">
									<a href="admin_list.php?id=<?php echo $row["id"]; ?>" class="list list-btn">LIST</a>
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
</body>
</html>
