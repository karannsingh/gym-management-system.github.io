<div class="col-4">
	<!-- <div class="card mb-3">
		<h5 class="card-header">Featured</h5>
		<div class="card-body">
			<h5 class="card-title">Special title treatment</h5>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
		</div>
	</div>
	<div class="card mb-3">
		<h5 class="card-header">Featured</h5>
		<div class="card-body">
			<h5 class="card-title">Special title treatment</h5>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
		</div>
	</div> -->

	<?php	
	if (isset($_GET['id'])) {
		$post_id = $_GET['id'];
	}if (isset($_GET['mypost'])) {
		$post_id = $_GET['mypost'];
	}
	?>
	<div class="card mb-3">
		<h5 class="card-header">Comments</h5>
		<?php 
		$comments = getComments($conn, $post_id);
		if(count($comments)<1){
			?>
			<div class="card-body">
				<p class="card-text text-center">No Comments...</p>
			</div>
			<?php
		}
		foreach ($comments as $comment) {
			?>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-10 col-sm-10 col-10">
						<h5 class="card-title" style="margin-bottom: 0px!important;"><?php echo $comment['name'] ?></h5>
						<span class="text-secondary"><small><?php echo date('F jS, Y', strtotime($comment['added_on'])) ?></small></span>
						<p class="card-text"><?php echo $comment['comments']; ?></p>
						<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
					</div>
					<?php 
					if($_SESSION['USER_ID']==$comment['user_id']){
						?>
						<div class="col-lg-2 col-sm-2 col-2">
							<button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#editcomment<?php echo $comment['id'] ?>"><i class="fa fa-edit" style="width:12px;"></i></button>

							<a href="add_comment.php?operation=delete&id=<?php echo $comment['id'] ?>&postid=<?php echo $post_id ?>" class="btn btn-danger mb-2" onclick="return confirm('Are you sure you want to delete this comment?');"><i class="fa fa-trash"></i></a>
						</div>							
						<?php 
					}
					?>											
				</div>	
				<?php 
				$subcomments = getSubComments($conn, $post_id, $comment['id']);
				foreach($subcomments as $subcomment){
					if ($comment['id']==$subcomment['comment_id']) {													
						?>
						<div class="row">
							<div class="col-lg-2 col-md-2 col-2">
								<span class="mt-4 pl-3" style="display: block">-</span>							
							</div>
							<div class="col-lg-8 col-md-8 col-8">
								<h5 class="card-title" style="margin-bottom: 0px!important;"><?php echo $subcomment['name'] ?></h5>
								<span class="text-secondary"><small><?php echo date('F jS, Y', strtotime($subcomment['added_on'])) ?></small></span>
								<p class="card-text"><?php echo $subcomment['comment']; ?></p>				
							</div>
							<?php 
							if($_SESSION['USER_ID']==$subcomment['user_id']){
								?>
								<div class="col-lg-2 col-sm-2 col-2">
									<button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#editsubcomment<?php echo $subcomment['id'] ?>"><i class="fa fa-edit" style="width:12px;"></i></button>

									<a href="add_sub_comment.php?operation=delete&id=<?php echo $subcomment['id'] ?>&postid=<?php echo $post_id ?>" class="btn btn-danger mb-2" onclick="return confirm('Are you sure you want to delete this sub comment?');"><i class="fa fa-trash"></i></a>
								</div>							
								<?php 
							}
							?>
						</div>	
						<!-- Modal for Sub Comment Edit -->
			<div class="modal" id="editsubcomment<?php echo $subcomment['id'] ?>">
				<div class="modal-dialog">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Edit Your Comment</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<form action="add_sub_comment.php?id=<?php echo $subcomment['id']; ?>" method="post">
								<div class="form-group">
									<input type="hidden" name="post_id" value="<?php echo $post_id; ?>" id="postid">
									<label for="pwd">Comment:</label>
									<textarea class="form-control" rows="4" placeholder="Enter Comment" id="comment" name="comment" required><?php echo $subcomment['comment']; ?></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Update Sub Comment</button>
							</form>
						</div>
					</div>
				</div>
			</div>
						<?php 
					}
				}
				?>			
			</div>

			<!-- Modal for Comment Edit -->
			<div class="modal" id="editcomment<?php echo $comment['id'] ?>">
				<div class="modal-dialog">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Edit Your Comment</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<form action="add_comment.php?id=<?php echo $comment['id']; ?>" method="post">
								<div class="form-group">
									<input type="hidden" name="post_id" value="<?php echo $post_id; ?>" id="postid">
									<label for="pwd">Comment:</label>
									<textarea class="form-control" rows="4" placeholder="Enter Comment" id="comment" name="comment" required><?php echo $comment['comments']; ?></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Update Comment</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
			<?php 
		}
		?>
	</div>          
</div>