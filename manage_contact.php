<?php
require('top.php');
if (isset($_POST['contact_submit'])) {
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$comment = $_POST['comment'];

	$sql = "INSERT into contact (`name`, `email`, `mobile`, `comment`) VALUES('$fullname','$email','$mobile','$comment')";
	if (mysqli_query($conn, $sql)) {
		header("Location:index.php");
	}
}
?>