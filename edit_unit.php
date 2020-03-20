<?php

if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php 
if(isset($_GET['edit_unit'])){

$edit_id = $_GET['edit_unit'];

$get_unit="SELECT * FROM unit where unit_id='$edit_id'";
$run_unit=mysqli_query($con,$get_unit);
$row_unit=mysqli_fetch_array($run_unit);
$unit_id=$row_unit['unit_id'];	
$unit_prefix=$row_unit['unit_prefix'];
$unit_year=$row_unit['unit_year'];
$unit_semester=$row_unit['unit_semester'];
$unit_code=$row_unit['unit_code'];
$unit_desc=$row_unit['unit_desc'];
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit unit</title>
</head>
<body>
<div class="row"><!-- row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<ol class="breadcrumb"><!-- breadcrumb Starts -->
<li class="active">
<i class="fa fa-dashboard"> </i> Dashboard / Edit Unit
</li>
</ol><!-- breadcrumb Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<div class="panel panel-default"><!-- panel panel-default Starts -->
<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> Edit Student
</h3>
</div><!-- panel-heading Ends -->
<div class="panel-body"><!-- panel-body Starts -->
<form class="form-horizontal" method="post"><!-- form-horizontal Starts -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" >Unit Prefix</label>
<div class="col-md-6" >
<input type="text" name="prefix" class="form-control" required value="<?php echo $unit_prefix; ?>">
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" >Unit Year</label>
<div class="col-md-6" >
<input type="text" name="year" class="form-control" required value="<?php echo $unit_year; ?>">
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" >Unit Semester</label>
<div class="col-md-6" >
<input type="text" name="semester" class="form-control" required value="<?php echo $unit_semester; ?>">
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" >Unit Code</label>
<div class="col-md-6" >
<input type="text" name="code" class="form-control" required value="<?php echo $unit_code; ?>">
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" >Unit Description</label>
<div class="col-md-6" >
<input type="text" name="description" class="form-control" required value="<?php echo $unit_desc; ?>">
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" ></label>
<div class="col-md-6" >
<input type="submit" name="submit" class="form-control btn btn-success" required value="Update">
</div>
</div><!-- form-group Ends -->	
</form>
<?php 
if (isset($_POST['submit'])) {
	$unit_prefix=$_POST['prefix'];
	$unit_year=$_POST['year'];
	$unit_code=$_POST['code'];
	$unit_desc=$_POST['description'];
	$unit_semester=$_POST['semester'];

$update_unit="UPDATE unit set unit_prefix='$unit_prefix',unit_year='$unit_year', unit_semester='$unit_semester',unit_code='$unit_code',unit_desc='$unit_desc' where unit_id='$unit_id'";
$run_update=mysqli_query($con,$update_unit);
if($run_update){
echo "<script>window.open('index.php?view_units','_self')</script>";

}

}
 ?>
</div><!--panel-body ends -->
</div><!--panel panel-default ends -->
</div><!-- col-lg-12 ends-->
</div><!-- 2 row ends-->
</body>
</html>

<?php } ?>