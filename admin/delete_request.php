<?php
include "connection.php";
if (isset($_POST['delete'])) {
	
$id =$_POST['Deliting_id'];
$sql = "DELETE FROM donee WHERE id={$id}";

if (mysqli_query($conn, $sql)) {
 header("Location:http://localhost/sahyog/admin/admin_requests.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

mysqli_close($conn);

 ?>