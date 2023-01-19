<?php
include('../config.php');
include('../functions.inc.php'); 
if (!isset($_SESSION['ADMIN_LOGIN'])) {
	header('location:login.php');
}

$admin = getAdminInfo($conn, $_SESSION['ADMIN_EMAIL']);

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$user_type = $_POST['user_type'];

	$res=mysqli_query($conn,"INSERT INTO `users`(`name`, `password`, `email`, `mobile`, `user_type`, `status`) VALUES('$name','$password','$email','$mobile','$user_type',1)");
	if ($res) {
		header('location:users.php');
		die();
	}else{
		?>
	<script>
	alert("User Not Created!");
	</script>
	<?php
	}
}

include('top.php');

include('sidebar.php');

?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Add Users</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="users.php">All Users</a></li>
				<li class="breadcrumb-item active">Add Users</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->

	<div class="content pb-0">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header"><strong>User Form</strong></div>
						<form method="post">
							<div class="card-body card-block">
								<div class="form-group">
									<label for="categories" class=" form-control-label">Name</label>
									<input type="text" name="name" placeholder="Enter name" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Email</label>
									<input type="email" name="email" placeholder="Enter email" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Mobile</label>
									<input type="text" name="mobile" placeholder="Enter mobile" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Password</label>
									<input type="password" name="password" placeholder="Enter name" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">User Type</label>
									<select class="form-control" name="user_type">
										<option value="Client">Client</option>
										<option value="Trainer">Trainer</option>
									</select>
								</div>
								<button id="payment-button" name="submit" type="submit" class="btn mt-3 btn-info btn-block">
									<span id="payment-button-amount">Submit</span>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>   

</main><!-- End #main -->
<?php
include('footer.php');
?>