<?php
include('../config.php');
include('../functions.inc.php'); 
if (!isset($_SESSION['ADMIN_LOGIN'])) {
  header('location:login.php');
}

$admin = getAdminInfo($conn, $_SESSION['ADMIN_EMAIL']);
if(isset($_GET['type']) && $_GET['type']!=''){
  $type=get_safe_value($conn,$_GET['type']);
  if($type=='status'){
    $operation=get_safe_value($conn,$_GET['operation']);
    $id=get_safe_value($conn,$_GET['id']);
    if($operation=='active'){
      $status='1';
    }else{
      $status='0';
    }
    $update_status_sql="update users set status='$status' where id='$id'";
    mysqli_query($conn,$update_status_sql);
  }
  
  if($type=='delete'){
    $id=get_safe_value($conn,$_GET['id']);
    $delete_sql="delete from users where id='$id'";
    mysqli_query($conn,$delete_sql);
  }
}/*
if(isset($_GET['type']) && $_GET['type']!=''){
  $type=get_safe_value($conn,$_GET['type']);

  if($type=='delete'){
    $id=get_safe_value($conn,$_GET['id']);
    $delete_sql="delete from users where id='$id'";
    mysqli_query($con,$delete_sql);
  }
}*/

$sql="select * from users order by id asc";
$res=mysqli_query($conn,$sql);

include('top.php');

include('sidebar.php');

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>All Users</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Users</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="content pb-0">
  <div class="orders">
     <div class="row">
      <div class="col-xl-12">
       <div class="card">
        <div class="card-body">
           <h4 class="box-title mt-3">Users </h4>
           <p class="box-link"><a href="add_user.php">Add User</a> </p>
        </div>
        <div class="card-body--">
           <div class="table-stats order-table ov-h">
            <table class="table ">
             <thead>
              <tr>
                 <th class="serial">#</th>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Mobile</th>
                 <th>Type</th>
                 <th>Action</th>
                 <th></th>
              </tr>
             </thead>
             <tbody>
              <?php 
              $i=1;
              while($row=mysqli_fetch_assoc($res)){?>
              <tr>
                 <td class="serial"><?php echo $i?></td>
                 <td><?php echo $row['id']?></td>
                 <td><?php echo $row['name']?></td>
                 <td><?php echo $row['email']?></td>
                 <td><?php echo $row['mobile']?></td>
                 <td><?php echo $row['user_type']?></td>
                 <td>
                <?php
                if($row['status']==1){
                  echo "<span class='badge bg-success'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
                }else{
                  echo "<span class='badge bg-primary'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
                }
                echo "<span class='badge bg-warning'><a href='manage_users.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
                ?>
                <span class='badge bg-danger'><a href="?type=delete&id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a></span>
                 </td>
              </tr>
              <?php 
              $i++;
            } ?>
             </tbody>
            </table>
           </div>
        </div>
       </div>
      </div>
     </div>
  </div>
</div>

</main><!-- End #main -->
<?php
include('footer.php');
?>