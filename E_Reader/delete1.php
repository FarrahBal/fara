<?php
include('configuration.php');


if (isset($_GET['id'])) {
	$data = $_GET['id'];

	

	$sql = "DELETE FROM   borrow  WHERE id = $data";
	if (mysqli_query($conn,$sql)) {
		echo"<script>alert('delete record successfully ')</script>";
		echo "<script>window.location.href='orders.php'</script>";
	}

	else{

		echo"FAILED TO DELETE RECORD: " . mysqli_error($conn);
	}
}






?>