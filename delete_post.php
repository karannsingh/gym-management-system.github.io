<?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
   window.location.href='index.php';
 </script>
 <?php
}
if (isset($_GET['id']) && $_GET['id']!='') {
  $post_id=get_safe_value($conn,$_GET['id']);
  $sql = "SELECT * from posts WHERE id=$post_id";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($res);

  if ($_SESSION['USER_ID']!=$row['user_id']) {
    ?>
    <script>
      window.location.href='my_post.php';
    </script>
    <?php
  }
  $sql = "DELETE from posts where id='$post_id'";
  $delete_comment = "DELETE from post_comments Where post_id=$post_id";
  $delete_img = "DELETE from post_images Where post_id=$post_id";
  if(mysqli_query($conn, $sql) && mysqli_query($conn, $delete_comment) && mysqli_query($conn, $delete_img)){
    ?>
    <script>
      alert('Post Deleted Successfully!');
      window.location.href='my_post.php';
    </script>
    <?php
  }else{
    ?>
    <script>
      alert('Post Not Deleted!');
      window.location.href='post.php?id=<?php echo $post_id?>';
    </script>
    <?php
  }
}
?>