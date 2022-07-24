<?php
include "connection.php";

if (isset($_POST['delete'])) {
	
echo $id =$_POST['Deliting_id'];
echo $sql = "DELETE FROM request WHERE request_id={$id}";

if (mysqli_query($conn, $sql)) {
 header("Location:http://localhost/sahyog/admin/admin_donee.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

mysqli_close($conn);

 ?>