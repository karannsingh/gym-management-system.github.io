<?php
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}else{
if(isset($_POST['update_post'])){
	$post_id= $_POST['post_id'];
	$post_title=mysqli_real_escape_string($conn, $_POST['post_title']);
	$post_content=mysqli_real_escape_string($conn, $_POST['post_content']);
	$post_status=$_POST['post_status'];
	$post_category = $_POST['post_category'];
	$image_name = $_FILES['post_image']['name'];
	$img_tmp = $_FILES['post_image']['tmp_name'];
	
	if(count($image_name)>3){
		?>
		<script>
			alert("Please select only 3 images!");
			window.location.href='upload_post.php?id=<?php echo $post_id ?>';
		</script>
		<?php
	}else{
		$sql = "UPDATE `posts` SET `title`='$post_title',`content`='$post_content',`category_id`='$post_category', `status`='$post_status' WHERE id=$post_id";
		$run = mysqli_query($conn, $sql);
		/*Image Insert*/

		foreach ($image_name as $index => $img) {
			if (move_uploaded_file($img_tmp[$index], "images/uploads/$img")) {
				$sql_img = "INSERT into post_images (post_id, image) VALUES($post_id,'$img')";
				$run = mysqli_query($conn, $sql_img);
			}
		}
		?>
		<script>
			window.location.href='post.php?id=<?php echo $post_id ?>';
		</script>
		<?php
	}	
}
if (isset($_POST['add_post'])) {
	$user_id = $_SESSION['USER_ID'];
	$post_title=mysqli_real_escape_string($conn, $_POST['post_title']);
	$post_content=mysqli_real_escape_string($conn, $_POST['post_content']);
	$post_status=$_POST['post_status'];
	$post_category = $_POST['post_category'];
	$image_name = $_FILES['post_image']['name'];
	$img_tmp = $_FILES['post_image']['tmp_name'];
	
	if(count($image_name)>3){
		?>
		<script>
			alert("Please select only 3 images!");
			window.location.href='upload_post.php';
		</script>
		<?php
	}else{
		$sql = "INSERT into posts (user_id,title, content, category_id, status) VALUES($user_id,'$post_title','$post_content','$post_category','$post_status')";
		$run = mysqli_query($conn, $sql);
		/*Image Insert*/
		$last_post_id = mysqli_insert_id($conn);

		foreach ($image_name as $index => $img) {
			if (move_uploaded_file($img_tmp[$index], "images/uploads/$img")) {
				$sql_img = "INSERT into post_images (post_id, image) VALUES($last_post_id,'$img')";
				$run = mysqli_query($conn, $sql_img);
			}
		}
		header("Location:blog.php");
	}	
}
}
?>