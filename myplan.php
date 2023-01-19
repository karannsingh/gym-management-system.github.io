<?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>
<div class="Myplan" id="topheader">
	<?php
	require('nav.php');	
	?>
	<section class="login-section">
		<div class="center-div">
			<h1 class="font-weight-bold mb-5">My Plans</h1>
			<div class="header-buttons">
				<a href="index.php">Home</a>
			</div>
		</div>
	</section>
</div>

<!-- Current Plan Start -->
<section class="currentplandiv">
	<div class="container headings text-center">
		<h1 class="text-center font-weight-bold"><?php echo $_SESSION['USER_NAME']?>, Welcome!</h1>
		<p>Get in shape faster, live your life</p>
	</div>
	<div class="container currentplan text-center">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h1>Current Plan (Standard)</h1>
				<li>Remainding Workouts sessions - 20</li>
				<h2>Want to upgrade plan?</h2>
				<a href="#">
					<button type="button" class="btn btn-success">Upgrade</button>
				</a>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h1>Plan History</h1>
				<li>Plan Added on - Date</li>
				<li>Cost of plan - price</li>			
			</div>
		</div>
	</div>
</section>
<!-- Current Plan End -->

<?php require('footer.php')?>        