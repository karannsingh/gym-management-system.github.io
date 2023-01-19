<?php
include('../config.php');
include('../functions.inc.php'); 
if (!isset($_SESSION['ADMIN_LOGIN'])) {
  header('location:login.php');
}

$admin = getAdminInfo($conn, $_SESSION['ADMIN_EMAIL']);

$categories='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($conn,$_GET['id']);
	$res=mysqli_query($conn,"select * from post_category where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories=$row['category_name'];
	}else{
		header('location:categories.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories=get_safe_value($conn,$_POST['category_name']);
	$res=mysqli_query($conn,"select * from post_category where category_name='$categories'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Categories already exist";
			}
		}else{
			$msg="Categories already exist";
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			mysqli_query($conn,"update post_category set category_name='$categories' where id='$id'");
		}else{
			mysqli_query($conn,"insert into post_category(category_name,status) values('$categories','1')");
		}
		header('location:categories.php');
		die();
	}
}

include('top.php');

include('sidebar.php');

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Categories</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="categories.php">All Categories</a></li>
          <li class="breadcrumb-item active">Add Categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Categories Form</strong></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Categories</label>
									<input type="text" name="category_name" placeholder="Enter categories name" class="form-control" required value="<?php echo $categories?>">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn mt-3 btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>   

  </main><!-- End #main -->
<?php
  include('footer.php');
?>