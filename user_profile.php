<?php



if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['user_profile'])){

$edit_id = $_GET['user_profile'];

$get_admin = "SELECT * from admins where u_id='$edit_id'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['u_id'];

$admin_name = $row_admin['name'];

$admin_email = $row_admin['email'];

$admin_pass = $row_admin['pass'];

$admin_image = $row_admin['image'];

$status= $row_admin['status'];

$phone = $row_admin['phone'];


}



?>


<div class="row" ><!-- 1  row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / Edit Profile

</li>



</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Edit Profile

</h3>


</div><!-- panel-heading Ends -->


<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Name: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_name" class="form-control" required value="<?php echo $admin_name; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Email: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_email" class="form-control" required value="<?php echo $admin_email; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Password: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_pass" class="form-control" required value="<?php echo $admin_pass; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Job: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="status" class="form-control" required value="<?php echo $status; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Contact: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="phone" class="form-control" required value="<?php echo $phone; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Image: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" name="admin_image" class="form-control" required>
<br>
<img src="admin_images/<?Php echo $admin_image; ?>" width="70" height="70" >

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="update" value="Update User" class="btn btn-primary form-control">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$admin_name = $_POST['admin_name'];

$admin_email = $_POST['admin_email'];

$admin_pass = $_POST['admin_pass'];

$status = $_POST['status'];

$phone = $_POST['phone'];

$admin_image = $_FILES['admin_image']['name'];

$temp_admin_image = $_FILES['admin_image']['tmp_name'];

move_uploaded_file($temp_admin_image,"admin_images/$admin_image");

$update_admin = "UPDATE admins set name='$admin_name',email='$admin_email',pass='$admin_pass',image='$admin_image',status='$status',phone='$phone' where u_id='$admin_id'";


$run_admin = mysqli_query($con,$update_admin);

if($run_admin){

echo "<script>alert('User Has Been Updated successfully')</script>";

echo "<script>window.open('index.php?view_users','_self')</script>";


}

}


?>



<?php }  ?>