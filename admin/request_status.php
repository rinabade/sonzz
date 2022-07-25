<?php
	include "connection.php";

	$status = $_GET['status'];
	$request_id = $_GET['id'];
	if($status == 'accept'){

		$sql = "UPDATE request SET request_status = 'Accepted'
		WHERE request_id = $request_id ";

		if(mysqli_multi_query($conn, $sql)){
    		header("Location:http://localhost/sahyog/admin/admin_requests.php");
   			 echo "successfully added";
 		 }else{
   			 echo "Query Failed." ;
  		}
	}
	if($status == 'reject'){

		$sql = "UPDATE request SET request_status = 'Rejected'
		WHERE request_id = $request_id ";

		if(mysqli_multi_query($conn, $sql)){
    		header("Location:http://localhost/sahyog/admin/admin_requests.php");
   			 echo "successfully added";
 		 }else{
   			 echo "Query Failed." ;
  		}
	}
 ?>


 <!-- UPDATE `donation` SET `id`=[value-1],`amount`=[value-2],`quantity`=[value-3],`location`=[value-4],`contact`=[value-5],`mode`=[value-6],`donee_id`=[value-7],`donor_id`=[value-8],`agenda`=[value-9],`help`=[value-10],`image`=[value-11],`request_status`=[value-12],`requested_date`=[value-13],`donation_date`=[value-14] WHERE 1 -->