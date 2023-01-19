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
      window.location.href='post.php?id=<?php echo $post_id ?>';
    </script>
    <?php
  }
}
?>
<div class="header" id="topheader">
	<?php
	require('nav.php');
	?>
	<section class="header-section">
		<div class="center-div">
			<h1 class="font-weight-bold">Upload Post</h1>
			<p>Get in shape faster, live your life</p>
			<div class="header-buttons">
				<a href="blog.php">View Blog</a>
			</div>
		</div>
	</section>
</div>
<!-- Navigation End -->	

<div class="container mt-5 mb-5">
  <div class="row">
    <div class="colg-lg-12 col-md-12 col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Post</h5>
          <?php 
          if (isset($_GET['id']) && $_GET['id']!='') {
            ?>
            <form action="add_post.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control mb-4" name="post_title" value="<?php echo $row['title']; ?>" required>
                <input type="hidden" class="form-control mb-4" name="post_id" value="<?php echo $post_id; ?>">
              </div>
              <div class="form-group">
                <label>Post Content</label>
                <textarea class="form-control" name="post_content" rows="8" required><?php echo $row['content']; ?></textarea>
              </div> 
              <div class="row">
                <div class="form-group mt-3 col-lg-6 col-md-6 col-6">
                  <label>Select Post Category</label>
                  <select class="form-control" name="post_category">
                    <?php 
                    $categories = getAllCategory($conn);
                    foreach ($categories as $cat) {
                      if($cat['id']==$post_id){
                        echo "<option selected value=".$cat['id'].">".$cat['category_name']."</option>";
                      }else{
                        echo "<option value=".$cat['id'].">".$cat['category_name']."</option>";
                      }
                    }
                    ?>                  
                  </select>
                </div>   
                <div class="form-group mt-3 col-lg-6 col-md-6 col-12">
                  <label>Select Post Status</label>
                  <select class="form-control" name="post_status">
                    <?php 
                    if ($row['status']==1) {
                      ?>
                      <option value="1">Public</option> 
                      <option value="0">Private</option>
                      <?php 
                    }else{
                      ?>
                      <option value="0">Private</option>
                      <option value="1">Public</option>                     
                      <?php 
                    } 
                    ?>                                                        
                  </select>
                </div> 
              </div> 
              <div class="row">
                <div class="form-group mt-3 col-lg-6 col-md-6 col-6">
                  <label>Upload Images (Max 3):</label>
                  <input type="file" class="form-control" name="post_image[]" accept="image/*" multiple>
                </div> 
                <div class="form-group mt-3 col-lg-6 col-md-6 col-6">
                  <label>Uploaded Images:</label>
                  <div class="row">                    
                    
                      <?php 
                      $post_images = getImages($conn, $row['id']);
                      foreach($post_images as $image) {
                        ?>       
                        <div class="col-lg-4 col-sm-6 col-12 text-center">         
                        <img src="images/<?php echo $image['image'] ?>" class="d-block w-100" style="height:100px">
                        <a href="delete_post_img.php?img_id=<?php echo $image['id'] ?>&id=<?php echo $post_id ?>" class="btn btn-danger mt-2 mb-2" onclick="return confirm('Are you sure you want to delete this image?');"><i class="fa fa-trash"></i></a>
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                </div>

              </div>                               
            </div>
            <input type="submit" class="btn btn-success mt-4" name="update_post" value="Update Post">                 
          </form> 
          <?php
        }else{
          ?>
          <form action="add_post.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Title</label>
              <input type="text" class="form-control mb-4" name="post_title" required>
            </div>
            <div class="form-group">
              <label>Post Content</label>
              <textarea class="form-control quill-editor-full" name="post_content" rows="8" required></textarea>
            </div> 
            <div class="row">
              <div class="form-group mt-3 col-lg-6 col-md-6 col-12">
                <label>Select Post Category</label>
                <select class="form-control" name="post_category">
                  <?php 
                  $categories = getAllCategory($conn);
                  foreach ($categories as $cat) {
                    ?>
                    <option value="<?php echo $cat['id'] ?>"><?php echo $cat['category_name'] ?></option>
                    <?php
                  }
                  ?>                    
                </select>
              </div>   
              <div class="form-group mt-3 col-lg-6 col-md-6 col-12">
                <label>Upload Posts (Max 3):</label>
                <input type="file" class="form-control" name="post_image[]" accept="image/*" multiple required>
              </div> 
            </div> 
            <div class="row">
              <div class="form-group mt-3 col-lg-6 col-md-6 col-12">
                <label>Select Post Status</label>
                <select class="form-control" name="post_status">
                  <option value="1">Public</option> 
                  <option value="0">Private</option>                  
                </select>
              </div>   
            </div>
            <input type="submit" class="btn btn-success mt-4" name="add_post" value="Add Post">                       
          </form> 
          <?php 
        }
        ?>                              
      </div>
    </div>
  </div>
</div>
</div>
<?php require('footer.php')?>