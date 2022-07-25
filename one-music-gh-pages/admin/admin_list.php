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
  		<title>SONGS_LIST</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
		<link rel="stylesheet" type="text/css" href="css/admin_table.css?v=<?php echo time();?>">
		<link rel="stylesheet" type="text/css" href="css/modal.css?v=<?php echo time();?>">
	</head>
	<body>
		<div class="text" style="margin-bottom: 20px;">
			<h1>SONGS_LIST</h1>
			<hr>
		</div>
	
	<div class="my_table">
		
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>CATEGORY</th>
					<th>UPLOADED_DATE</th>
					<th>GENRE</th>
					<th>SONG_NAME</th>
					<th>PREVIEW</th>
				</tr>
			</thead>
			<tbody>

				<?php
										
										$id = $_GET['id'];

										$sql = "SELECT * FROM song   WHERE artist_id = '$id' " ;

											$result = mysqli_query($conn, $sql);

											if (mysqli_num_rows($result) > 0) {
											  // output data of each row
											  while($row = mysqli_fetch_assoc($result)) {
				?>

				<tr>
					<td><?php echo $row["song_id"]; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td><?php echo $row["song_title"]; ?></td>
					<td><audio preload="auto" controls style="height:30px; width:300px;">
                                <source src="http://localhost/Sonzz/one-music-gh-pages/artist/<?php echo $row['song'] ;?>">
                            </audio></td>
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
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
</body>
</html>