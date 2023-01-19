<?php require('top.php')?>
<div class="header" id="topheader">
	<?php
	require('nav.php');
	?>
	<section class="header-section">
		<div class="center-div">
			<h1 class="font-weight-bold">Blog</h1>
			<p>Get in shape faster, live your life</p>
			<div class="header-buttons">
				<a href="index.php">Home</a>
			</div>
		</div>
	</section>
</div>
<!-- Navigation End -->	

<div>
	<div class="container m-auto mt-3 row">
		<div class="col-8">

			<?php 
			if (!isset($_SESSION['USER_ID'])) {
				$_SESSION['USER_ID']='';
			}

			if (isset($_GET['mypost'])) {
				$post_id = $_GET['mypost'];
				$postQuery = "Select * from posts where id=$post_id";
				$result = mysqli_query($conn, $postQuery);
			}
			if (isset($_GET['id'])) {
				$post_id = $_GET['id'];
				$postQuery = "Select * from posts where id=$post_id AND status=1";
				$result = mysqli_query($conn, $postQuery);
			}				
			if ($post = mysqli_fetch_assoc($result)) {

			}else{
				?>
				<script>
					window.location.href='blog.php';
				</script>
				<?php
			}
			$posted_by = getUserName($conn, $post['user_id']);
			if (empty($posted_by)) {
				$posted_name = "Posted By - Unknown";
			}else{
				$posted_name = "Posted By - ".$posted_by;
			}
			?>

			<div class="card mb-3">

				<div class="card-body">
					<h5 class="card-title"><?php echo $post['title'] ?></h5>
					<span class="badge bg-primary ">Posted on <?php echo date('F jS, Y', strtotime($post['added_on'])) ?></span>
					<span class="badge bg-danger"><?php echo getCategory($conn, $post['category_id']); ?></span>
					<span class="badge bg-success" style="color: white"><?php echo $posted_name;?></span>
					<?php 
					if($_SESSION['USER_ID']==$post['user_id']){
						?>
						<span class="post-text-right badge bg-danger text-white">
							<a href="delete_post.php?id=<?php echo $post_id?>" onclick="return confirm('Are you sure you want to delete this post?');">Delete</a>
						</span>
						<span class="post-text-right badge bg-success text-white">
							<a href="upload_post.php?id=<?php echo $post_id?>">Edit</a>
						</span>		
						<?php 
					}
					?>												
					<div class="border-bottom mt-3"></div>					
					<?php
					$post_images = getImages($conn, $post['id']); 
					?>

					<div id="demo" class="carousel slide" data-ride="carousel">

						<!-- The slideshow -->
						<div class="carousel-inner">
							<?php 
							$c=1;
							foreach($post_images as $image) {
								if($c>1){
									$active = "";
								}else{
									$active = "active";
								}
								?>
								<div class="carousel-item <?php echo $active; ?>">
									<img src="images/<?php echo $image['image'] ?>" class="d-block w-100" style="height:500px">
								</div>
								<?php
								$c++;
							}
							?>
						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>

					</div>
					<!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" class="img-fluid mb-2 mt-2" alt="Responsive image"> -->
					<p class="card-text"><?php echo $post['content'] ?></p>
					<!-- Share Buttons -->
					<div class="addthis_inline_share_toolbox"></div>

					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Comment on this</button>

					<!-- The Modal -->
					<div class="modal" id="myModal">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Add Your Comment</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<form action="add_comment.php" method="post">
										<div class="form-group">
											<input type="hidden" name="post_id" value="<?php echo $post_id; ?>" id="postid">
											<label for="pwd">Comment:</label>
											<textarea class="form-control" rows="4" placeholder="Enter Comment" id="comment" name="comment" required></textarea>
										</div>
										<button type="submit" class="btn btn-primary">Add Comment</button>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div>
				<h4>Related Posts</h4>
				<?php
				$related= "SELECT * from posts where category_id={$post['category_id']} AND status=1 order by id desc LIMIT 3";
				$related_run = mysqli_query($conn, $related);
				while ($related_post= mysqli_fetch_assoc($related_run)) {
					if ($related_post['id']==$post_id) {
						continue;
					}
					?>
					<a href="post.php?id=<?php echo $related_post['id'];?>">
						<div class="card mb-3" style="max-width: 700px;">
							<div class="row g-0">
								<div class="col-md-5" style="background-image: url('https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg');background-size: cover">
									<!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
								</div>
								<div class="col-md-7">
									<div class="card-body">
										<h5 class="card-title"><?php echo $related_post['title'] ?></h5>
										<p class="card-text text-truncate"><?php echo $related_post['content'] ?></p>
										<p class="card-text"><small class="text-muted">Posted on <?php echo date('F jS, Y', strtotime($related_post['added_on'])) ?></small></p>
									</div>
								</div>
							</div>
						</div> 
					</a>
					<?php
				} 
				?>

			</div>
		</div>
		<?php
		include('sidebar.php');
		?>
	</div>
</div>

<?php require('footer.php')?>