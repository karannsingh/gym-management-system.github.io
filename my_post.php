<?php 
require('top.php');
if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 1;
}
$user_id = $_SESSION['USER_ID'];
$post_per_page = 5;
$result = ($page-1)*$post_per_page;
?>
<div class="blog" id="topheader">
	<?php
	require('nav.php');
	?>
	<section class="header-section">
		<div class="center-div">
			<h1 class="font-weight-bold">Blog</h1>
			<p>Get in shape faster, live your life</p>
			<form class="text-center" autocomplete="off">
				<div class="input-group">
					<input type="text" class="form-control news-input" name="search" placeholder="Search">
					<button class="input-group-append input-group-text" type="submit">Search</button>
				</div>
			</form>
		</div>
	</section>
</div>
<!-- Navigation End -->	

<div>
	<div class="container m-auto mt-3 row">
		<div class="col-8">

			<?php
			if (isset($_GET['search'])) {
				$keyword = $_GET['search'];
				$postQuery = "SELECT * from posts WHERE user_id=$user_id AND title LIKE '%$keyword%' order by id desc limit $result, $post_per_page";
			}else{
				$postQuery = "SELECT * from posts WHERE user_id=$user_id order by id desc limit $result, $post_per_page";
			}
			$post_result = mysqli_query($conn, $postQuery);
			$p_result = mysqli_num_rows($post_result);
			if ($p_result == "0") {
				?>			
				<h2>No Records Found</h2>
				<?php
			}else{
				while ($post = mysqli_fetch_assoc($post_result)) {
					?>

					<div class="card mb-3" style="max-width: 800px;">
						<a href="post.php?mypost=<?php echo $post['id'];?>">
							<div class="row g-0">
								<?php $post_images = getImages($conn, $post['id']);
									$img = current($post_images);						
								?>
								<div class="col-md-5" style="background-image: url('images/<?php echo $img['image'] ?>');background-size: cover">
								</div>
								<div class="col-md-7">
									<div class="card-body">
										<h5 class="card-title"><?php echo$post['title'] ?></h5>
										<p class="card-text text-truncate"><?php echo $post['content'] ?></p>
										<p class="card-text"><small class="text-muted">Posted on <?php echo date('F jS, Y', strtotime($post['added_on'])) ?></small></p>
										<p class="badge bg-success text-white"><?php 
										if($post['status']==1){
											echo "<p class='badge bg-success text-white'>Public</p>";
										}else{
											echo "<p class='badge bg-danger text-white'>Private</p>";
										}
									?></p>
									</div>
								</div>
							</div>
						</a>
					</div>

					<?php	
				}
			}
			?>

		</div>
		<?php
		//include('sidebar.php');
		?>
	</div>

	<?php 
	if (isset($_GET['search'])) {
		$keyword = $_GET['search'];
		$q = "SELECT * from posts WHERE user_id=$user_id AND title LIKE '%$keyword%'";
	}else{
		$q="SELECT * from posts WHERE user_id=$user_id";
	}
	
	$r=mysqli_query($conn, $q);
	$total_posts = mysqli_num_rows($r);
	$total_pages= ceil($total_posts/$post_per_page); 
	

	?>

	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<?php 
			if ($page>1) {
				$switch = "";
			}else{
				$switch = "disabled";
			}

			if ($page<$total_pages) {
				$next_switch = "";
			}else{
				$next_switch = "disabled";
			}			
			?>
			<li class="page-item <?php echo $switch ?>">
				<a class="page-link" href="?<?php if (isset($_GET['search'])) {echo "search=$keyword&";} ?>page=<?php echo $page-1 ?>" tabindex="-1" aria-disabled="true">Previous</a>
			</li>
			<?php 
			for ($i=1; $i <= $total_pages ; $i++) { 
				?>
				<li class="page-item"><a class="page-link" href="?<?php if (isset($_GET['search'])) {echo "search=$keyword&";} ?>page=<?php echo $i ?>"><?php echo $i ?></a></li>
				<?php 
			}
			?>
			<li class="page-item <?php echo $next_switch ?>">
				<a class="page-link" href="?<?php if (isset($_GET['search'])) {echo "search=$keyword&";} ?>page=<?php echo $page+1 ?>">Next</a>
			</li>
		</ul>
	</nav>
</div>

<?php require('footer.php')?>