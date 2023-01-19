<!-- Navigation Start -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
	<div class="container text-uppercase p-2">
		<a class="navbar-brand font-weight-bold text-white" href="#">Adiansh</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">

				<!-- Home -->
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>

				<!-- Service/ Pricing -> My Plan -->
				<?php 
				if(isset($_SESSION['USER_LOGIN'])){
					echo '<li class="nav-item"><a class="nav-link" href="myplan.php">My Plan</a></li>';
				}else{
					echo '<li class="nav-item"><a class="nav-link" href="index.php#service">Services</a></li>';
					echo '<li class="nav-item"><a class="nav-link" href="index.php#pricing">Pricing</a></li>';
				}

				/*Blog*/
				if(isset($_SESSION['USER_LOGIN'])){
					?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Blog
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="my_post.php">My Posts</a>
							<a class="dropdown-item" href="upload_post.php">Upload Posts</a>
							<a class="dropdown-item" href="blog.php">All Posts</a>
						</div>
					</li>
					<?php
				}else{
					echo '<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>';
				}
				?>

				<!-- Contact Us -->
				<li class="nav-item">
					<a class="nav-link" href="index.php#contact">Contact</a>
				</li>

				<!-- About Us -->
				<li class="nav-item">
					<a class="nav-link" href="index.php#aboutus">About</a>
				</li>

				<!-- Login / Logout -->
				<?php 
				if(isset($_SESSION['USER_LOGIN'])){
					?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbar-Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Hi <?php echo $_SESSION['USER_NAME']?>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbar-Dropdown">
							<a class="dropdown-item" href="history.php">Plan History</a>
							<a class="dropdown-item" href="profile.php">Profile</a>
							<a class="dropdown-item" href="feedback.php">Feedback</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>
					<?php
				}else{
					echo '<li class="nav-item"><a href="login.php" class="nav-link">Login/Register</a></li>';
				}
				?>
			</ul>
		</div>
	</div>			
</nav>