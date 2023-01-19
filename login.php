<?php 
require('top.php');
if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']=='yes'){
	?>
	<script>
		window.location.href='index.php';
	</script>
	<?php
}
?>
<div class="Loginheader" id="topheader">
	<?php
	require('nav.php');
	?>
	<section class="login-section">
		<div class="center-div">
			<h1 class="font-weight-bold mb-5">Login</h1>
			<div class="header-buttons">
				<a href="index.php">Home</a>
			</div>
		</div>
	</section>
</div>

<!-- Login/ Register Start -->
<section class="registersection">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="mb-4">Login</h2>
				<form id="login-form" method="post" autocomplete="off">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter Email" name="login_email" id="login_email">
						<span class="field_error" id="login_email_error"></span>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Enter Your Password" name="login_password" id="login_password">
						<span class="field_error" id="login_password_error"></span>
					</div>
					<div class="d-flex justify-content-center login-button">
						<button type="button" onclick="user_login()" class="btn btn-primary">Login</button>
					</div>						
				</form>
				<div class="form-output login_msg">
					<p class="form-messege field_error"></p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="mb-4">Register</h2>	
				<form id="register-form" method="post" autocomplete="off">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Name" name="name" id="name" >
						<span class="field_error" id="name_error"></span>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Your Email" name="email" id="email">
						<span class="field_error" id="email_error"></span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Mobile" name="mobile" id="mobile">
						<span class="field_error" id="mobile_error"></span>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Your Password" name="password" id="password">
						<span class="field_error" id="password_error"></span>
					</div>
					<div class="d-flex justify-content-center login-button">
						<button type="button" class="btn btn-primary" onclick="user_register()">Register</button>
					</div>						
				</form>
				<div class="form-output register_msg">
					<p class="form-messege field_error"></p>
				</div>			
			</div>
		</div>
	</div>
</section>
<!-- Login/ Register End -->

<?php require('footer.php')?>