<?php 
require('top.php');
$post_id = $_POST['post_id'];
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
		alert("Please Login/ Register!");
		window.location.href='post.php?id=<?php echo $post_id ?>';
	</script>
	<?php
}else{
	if ((isset($_GET['operation']) && $_GET['operation'] != "") && (isset($_GET['id']) && $_GET['id'] != "") ) {
		if($_GET['operation']=="delete"){
			$comment_id = $_GET['id'];
			$post_id = $_GET['postid'];
			$sql = "DELETE FROM `post_comments` WHERE id=$comment_id";
			if (mysqli_query($conn, $sql)) {
				header("Location:post.php?id=$post_id");
			}
		}
	}
	elseif (isset($_GET['id'])) {
		$comment_id = $_GET['id'];
		$comment=mysqli_real_escape_string($conn, $_POST['comment']);
		$post_id=mysqli_real_escape_string($conn, $_POST['post_id']);

		$sql = "UPDATE post_comments set comments='$comment' WHERE id=$comment_id";
		if (mysqli_query($conn, $sql)) {
			header("Location:post.php?id=$post_id");
		}
	}else{
		if(isset($_POST['comment'])){
			$user_id = $_SESSION['USER_ID'];
			$name = $_SESSION['USER_NAME'];
			$comment=mysqli_real_escape_string($conn, $_POST['comment']);
			$post_id=mysqli_real_escape_string($conn, $_POST['post_id']);

			$sql = "INSERT into post_comments (`user_id`, `post_id`, `name`, `comments`, `status`) VALUES ('$user_id','$post_id','$name','$comment',1)";

			if (mysqli_query($conn, $sql)) {
				header("Location:post.php?id=$post_id");
			}
		}
	}
}
?>