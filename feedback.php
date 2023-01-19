<?php require('top.php')?>
<div class="header" id="topheader">
	<?php
	require('nav.php');
	?>
	<section class="header-section">
		<div class="center-div">
			<h1 class="font-weight-bold">Welcome to Adiansh</h1>
			<p>Get in shape faster, live your life</p>
			<div class="header-buttons">
				<a href="#">Learn More</a>
				<a href="#">Contact Us</a>
			</div>
		</div>
	</section>
</div>
<!-- Navigation End -->	

<!-- Contact Us Start -->
<section class="contactus" id="contact">
	<div class="container headings text-center">
		<h1 class="text-center font-weight-bold">Feedback Form</h1>
		<p class="text-capitalize pt-1">We're Here To Help And Answer Any Question You Might Have. We Look Forward To Hearing From You!</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">
				<form action="manage_contact.php" method="post" autocomplete="off">
					<!-- <div class="form-group">
						<input type="text" class="form-control" name="fullname" placeholder="Enter Full Name" id="name">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Enter Email" id="email">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number" id="mobile">
					</div> -->
					<div class="form-group">
						<textarea class="form-control" rows="4" name="comment" id="comment" placeholder="Enter Your Message"></textarea>
					</div>
					<div class="d-flex justify-content-center form-button">
						<button type="submit" name="contact_submit" class="btn btn-primary">Submit</button>
					</div>						
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Contact Us End -->	

<?php require('footer.php')?>