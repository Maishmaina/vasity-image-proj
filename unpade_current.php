<?php

if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php 
if (isset($_GET['unpade_current'])) {
$update_id=$_GET['unpade_current'];
$select_update="SELECT * from current where current_id='$update_id'";
$run_update=mysqli_query($con,$select_update);
$row_update=mysqli_fetch_array($run_update);
$current_id=$row_update['current_id'];
$academic_yr=$row_update['academic_yr'];
$sem=$row_update['sem'];
$status=$row_update['status'];
$unit_deadline=$row_update['unit_deadline'];
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>update current</title>
</head>
<body>
<div class="row"><!-- row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<ol class="breadcrumb"><!-- breadcrumb Starts -->
<li class="active">
<i class="fa fa-dashboard"> </i> Dashboard / Updated Current Information
</li>
</ol><!-- breadcrumb Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- row Ends -->	
<div class="row"><!-- 2 row Starts --> 
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<div class="panel panel-default"><!-- panel panel-default Starts -->
<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> Update Current Information
</h3>
</div><!-- panel-heading Ends -->
<div class="panel-body"><!-- panel-body Starts -->
<form method="POST" class="form-horizontal">
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" >Academic Year </label>
<div class="col-md-6" >
<input type="text" name="academic_yr" class="form-control" required value="<?php echo($academic_yr) ?>">
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" >Semester </label>
<div class="col-md-6" >
<input type="text" name="sem" class="form-control" required value="<?php echo($sem) ?>">
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" >Status </label>
<div class="col-md-6" >
<input type="text" name="status" class="form-control" required value="<?php echo($status) ?>">
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" >Deadline </label>
<div class="col-md-6" >
<input type="text" name="unit_deadline" class="form-control" required value="<?php echo($unit_deadline) ?>">
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" ></label>
<div class="col-md-6" >
<input type="submit" name="update" class="form-control btn btn-success"  value="Update">
</div>
</div><!-- form-group Ends -->	
</form>

<?php 
if (isset($_POST['update'])) {
	$academic_yr=$_POST['academic_yr'];
	$sem=$_POST['sem'];
	$status=$_POST['status'];
	$unit_deadline=$_POST['unit_deadline'];
$update_current="UPDATE current set academic_yr='$academic_yr',sem='$sem',status='$status',unit_deadline='$unit_deadline' where current_id='$current_id'";	
$run_current=mysqli_query($con,$update_current);
if ($run_current) {
echo "<script> alert('Current Information Updated Successully') </script>";
echo "<script>window.open('index.php?current_info','_self')</script>";
	
}
}
 ?>
</div><!--panel-body-->
</div><!-- panel panel-default ends  --> 
</div><!-- col-lg-12 ends --> 
</div><!-- 2 row Ends --> 	
</body>
</html>
<?php } ?>