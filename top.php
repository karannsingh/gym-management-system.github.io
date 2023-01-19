<?php
require('config.php');
require('functions.inc.php');

if (isset($_SESSION['LAST_ACTIVE_TIME'])) {
	if ((time()-$_SESSION['LAST_ACTIVE_TIME'])>900) {
		header('location:logout.php');
		die();
	}
}
$_SESSION['LAST_ACTIVE_TIME']=time();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adiansh Gym - Fitness Center</title>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

	<!-- Font Awesome V.4.0.1-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.css" />

	<!-- Bootstrap File V.4.0.0 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

	<!-- CSS File -->
	<link rel="stylesheet" href="css/style.css">
	<script src="https://use.fontawesome.com/6ea1ec3617.js"></script>
	<link href="admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
</head>
<body>