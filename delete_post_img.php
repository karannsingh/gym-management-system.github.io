<?php
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
if ((isset($_GET['img_id']) && $_GET['img_id']!='') && (isset($_GET['id']) && $_GET['id']!='') ) {
  $img_id=get_safe_value($conn,$_GET['img_id']);
  $post_id=get_safe_value($conn,$_GET['id']);
  $sql = "DELETE from post_images where id='$img_id'";
  if(mysqli_query($conn, $sql)){
    ?>
    <script>
      alert('Image Deleted Successfully!');
      window.location.href='upload_post.php?id=<?php echo $post_id?>';
    </script>
    <?php
  }else{
    ?>
    <script>
      alert('Image Not Deleted!');
      window.location.href='upload_post.php?id=<?php echo $post_id?>';
    </script>
    <?php
  }
}
?>