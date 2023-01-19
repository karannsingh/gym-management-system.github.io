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

<!-- Service Start -->
<section class="header-extradiv" id="service">
	<div class="container">
		<div class="row">
			<div class="extra-div col-lg-4 col-md-4 col-12 px-4">					
				<img src="images/services-1.jpg" class="img-responsive">
				<h2>Exercise Program</h2>
				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
				<a href="#">Learn More</a>
			</div>
			<div class="extra-div col-lg-4 col-md-4 col-12 px-4">
				<img src="images/services-2.jpg">					
				<h2>Nutrition Plans</h2>
				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
				<a href="#">Learn More</a>
			</div>
			<div class="extra-div col-lg-4 col-md-4 col-12 px-4">					
				<img src="images/services-3.jpg">					
				<h2>Diet Program</h2>
				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
				<a href="#">Learn More</a>
			</div>
		</div>
	</div>
</section>
<!-- Service End -->

<!-- Coach Start -->
<section class="coach">
	<div class="container headings text-center">
		<h1 class="text-center font-weight-bold">What Do We Offer</h1>
		<p>Your Health is Our Top Priority with Comprehensive, Affordable Health.</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0">
				<div class="bars my-3">
					<h1>Training</h1>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%">100%</div>
					</div>
				</div>
				<div class="bars my-3">
					<h1>Nutrition</h1>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:100%">100%</div>
					</div>
				</div>
				<div class="bars my-3">
					<h1>HIIT</h1>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:100%">100%</div>
					</div>
				</div>
				<div class="bars my-3">
					<h1>Diet</h1>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:100%">100%</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12 bardiv">
				<h2>Hello! Health Care is a natural way of improving your health.</h2>
				<p>
					A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.

					A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
				</p>
			</div>
		</div>
	</div>
</section>
<!-- Coach End -->

<!-- Why to Choose Us Start -->
<section class="choose-us">
	<div class="container headings text-center">
		<h1 class="text-center font-weight-bold">Why Choose Us</h1>
		<p>Your Health is Our Top Priority with Comprehensive, Affordable Health.</p>
	</div>
	<div class="container d-flex justify-content-around align-items-center text-center">
		<div>
			<h1 class="count">1500</h1>
			<p>Happy Clients</p>
		</div>
		<div>
			<h1 class="count">15</h1>
			<p>Years Of Experience</p>
		</div>
		<div>
			<?php 
			$sql = "SELECT * from branch";
			$res = mysqli_query($conn, $sql);
			$count = mysqli_num_rows($res);
			?>
			<h1 class="count"><?php echo $count?></h1>
			<p>Branches</p>
		</div>
		<div>
			<?php 
			$sql = "SELECT * from users where user_type='Trainer'";
			$res = mysqli_query($conn, $sql);
			$count1 = mysqli_num_rows($res);

			$sql = "SELECT * from admin_users";
			$res = mysqli_query($conn, $sql);
			$count2 = mysqli_num_rows($res);
			$TotalStaff = $count1 + $count2;
			?>
			<h1 class="count"><?php echo $TotalStaff?></h1>
			<p>Expert Staffs</p>
		</div>
	</div>
</section>
<!-- Why to Choose Us End -->

<?php
if(!isset($_SESSION['USER_LOGIN'])){ 
	?>
	<!-- Pricing/ Plans Start -->
	<section class="plan" id="pricing">
		<div class="container headings text-center text-white">
			<h1 class="text-center font-weight-bold">PRICE & PLANS</h1>
			<p class="text-white">Choose Your Perfect Plans</p>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-12">
					<div class="card text-center">
						<div class="card-header">
							<h1>Starter</h1>
							<p>A Beautiful Healthcare</p>
						</div>
						<div class="card-body">
							<li>₹<span class="money">1999</span></li>
							<li>20 Workouts</li>
							<li>Meal plans in mobile</li>
							<li>One Coaching</li>
							<li>-50% Group coaching</li>
							<li>24/7 Customer support</li>
						</div>
						<div class="card-footer">
							<a href="#">
								Get Started
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12 card-second">
					<div class="card text-center">
						<div class="card-header">
							<h1>Standard</h1>
							<p>A Beautiful Healthcare</p>
						</div>
						<div class="card-body">
							<li>₹<span class="money">2999</span></li>
							<li>20 Workouts</li>
							<li>Meal plans in mobile</li>
							<li>One Coaching</li>
							<li>-50% Group coaching</li>
							<li>24/7 Customer support</li>
						</div>
						<div class="card-footer">
							<a href="#">
								Get Started
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="card text-center">
						<div class="card-header">
							<h1>Premium</h1>
							<p>A Beautiful Healthcare</p>
						</div>
						<div class="card-body">
							<li>₹<span class="money">3999</span></li>
							<li>20 Workouts</li>
							<li>Meal plans in mobile</li>
							<li>One Coaching</li>
							<li>-50% Group coaching</li>
							<li>24/7 Customer support</li>
						</div>
						<div class="card-footer">
							<a href="#">
								Get Started
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Pricing/ Plans End -->
	<?php 
}
?>

<!-- Happy Clients / Feedbacks Start -->
<section class="happyclients">
	<div class="container headings text-center">
		<h1 class="text-center font-weight-bold">Happy Clients & Feedbacks</h1>
		<p class="">Our Satisfied Customer Says</p>
	</div>
	<div id="demo" class="carousel slide" data-ride="carousel">

		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>

		<div class="container carousel-inner">
			<div class="carousel-item active">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<div class="box">
							<a href="#"><img src="images/services-2.jpg" class="img-fluid img-thumbnail"></a>
							<p class="m-4">
								Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
							</p>
							<h1>Client</h1>
							<h2>Web Developer</h2>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="box">
							<a href="#"><img src="images/services-2.jpg" class="img-fluid img-thumbnail"></a>
							<p class="m-4">
								Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
							</p>
							<h1>Client</h1>
							<h2>Web Developer</h2>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="box">
							<a href="#"><img src="images/services-2.jpg" class="img-fluid img-thumbnail"></a>
							<p class="m-4">
								Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
							</p>
							<h1>Client</h1>
							<h2>Web Developer</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<div class="box">
							<a href="#"><img src="images/services-2.jpg" class="img-fluid img-thumbnail"></a>
							<p class="m-4">
								Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
							</p>
							<h1>Client</h1>
							<h2>Web Developer</h2>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="box">
							<a href="#"><img src="images/services-2.jpg" class="img-fluid img-thumbnail"></a>
							<p class="m-4">
								Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
							</p>
							<h1>Client</h1>
							<h2>Web Developer</h2>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="box">
							<a href="#"><img src="images/services-2.jpg" class="img-fluid img-thumbnail"></a>
							<p class="m-4">
								Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
							</p>
							<h1>Client</h1>
							<h2>Web Developer</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<div class="box">
							<a href="#"><img src="images/services-2.jpg" class="img-fluid img-thumbnail"></a>
							<p class="m-4">
								Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
							</p>
							<h1>Client</h1>
							<h2>Web Developer</h2>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="box">
							<a href="#"><img src="images/services-2.jpg" class="img-fluid img-thumbnail"></a>
							<p class="m-4">
								Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
							</p>
							<h1>Client</h1>
							<h2>Web Developer</h2>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="box">
							<a href="#"><img src="images/services-2.jpg" class="img-fluid img-thumbnail"></a>
							<p class="m-4">
								Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
							</p>
							<h1>Client</h1>
							<h2>Web Developer</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>
</section>
<!-- Happy Clients / Feedbacks End -->

<!-- Contact Us Start -->
<section class="contactus" id="contact">
	<div class="container headings text-center">
		<h1 class="text-center font-weight-bold">CONTACT US</h1>
		<p class="text-capitalize pt-1">We're Here To Help And Answer Any Question You Might Have. We Look Forward To Hearing From You!</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">
				<form action="manage_contact.php" method="post" autocomplete="off">
					<div class="form-group">
						<input type="text" class="form-control" name="fullname" placeholder="Enter Full Name" id="name">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Enter Email" id="email">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number" id="mobile">
					</div>
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

<!-- Blog Start -->
<section class="blog-extradiv">
	<div class="container headings text-center">
		<h1 class="text-center font-weight-bold">NEWS & BLOG</h1>
		<p>Latest news from our blog</p>
	</div>
	<div class="container">
		<div class="row">
			<?php 
			$query="SELECT * from posts order by id desc limit 3";
			$get_post=mysqli_query($conn,$query);
			foreach($get_post as $post){
				?>

				<div class="blog-div col-lg-4 col-md-4 col-12 px-4">
					<a href="post.php?id=<?php echo $post['id'];?>">
						<?php $post_images = getImages($conn, $post['id']);
						$img = current($post_images);						
						?>						
						<img src="images/<?php echo $img['image'] ?>" class="img-responsive">
						<h2><?php echo $post['title'] ?></h2>						
						<p class="text-truncate"><?php echo $post['content'] ?></p>
						<p><small>Posted on <?php echo date('F jS, Y', strtotime($post['added_on'])) ?></small></p>
					</a>
				</div>
				<?php 
			} 
			?>
		</div>
	</div>
</section>
<!-- Blog End -->

<!-- Newsletter Start -->	
<section class="newsletter" id="newsletterid">
	<div class="container headings text-center">
		<h1 class="text-center font-weight-bold">Subscribe to your newsletter</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<div class="input-group mb-3">
					<input type="text" class="form-control news-input" placeholder="Your Email">
					<div class="input-group-append">
						<span class="input-group-text">Subscribe</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Newsletter End -->	

<?php require('footer.php')?>