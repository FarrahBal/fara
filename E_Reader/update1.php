

<?php
include('configuration.php');
if (isset($_POST['edit'])) {
	# code...
	$user=$_POST['username'];
	$em=$_POST['email'];
	$bkn=$_POST['bookname'];
	$db=$_POST['datebrowed'];
	$dr=$_POST['datereturned'];
	$code=intval($_GET['id']);

	$upd=mysqli_query($conn,"UPDATE borrow SET username='$user',email='$em',bookname='$bkn',Date_borrowed='$db',Date_returned='dr' WHERE id='$code'");
	if ($upd) {
		# code...
		echo "<script>alert('Data Updated as well') </script>";
		echo "<script> window.location.href='orders.php'</script>";
	}
	else{
		echo "Error".mysqli_error($conn);
	}
}
?>




<form action="#" method="POST">

<?php
if (isset($_GET['id'])) {
	# code...
	$code=$_GET['id'];
	$sel=mysqli_query($conn,"SELECT * FROM borrow WHERE id='$code'");
	$data=mysqli_fetch_array($sel);

?>



	<input type="text" name="username" value=" <?php echo $data['username'] ?>" placeholder="">
	<input type="email" name="email" value=" <?php echo $data['email'] ?>" placeholder="">
	<input type="text" name="bookname" value=" <?php echo $data['bookname'] ?>" placeholder="">
	<input type="date" name="datebrowed" value=" <?php echo $data['Date_borrowed'] ?>" placeholder="">
	<input type="date" name="datereturned" value=" <?php echo $data['Date_returned'] ?>" placeholder="">
	<button type="submit" name="edit">
		Edit Now
	</button>
</form>

<?php
}
?>