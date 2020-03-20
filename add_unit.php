<?php 
if(!isset($_SESSION['email'])) {
echo "<script>window.open('login.php','_self')</script>";
}else{
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Add Course</title>
</head>
<body>

<div class="row"><!-- row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<ol class="breadcrumb"><!-- breadcrumb Starts -->
<li class="active">
<i class="fa fa-dashboard"> </i> Dashboard / Add Unit
</li>
</ol><!-- breadcrumb Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- row Ends -->	

<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> Add Unit	
</h3>	
</div><!--panel-heading ends-->
<div class="panel-body">
<form method="post" class="form-horizontal">
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" > Unit Code </label>
<div class="col-md-6" >
<input type="text" name="unit_code" class="form-control" required >
<br><p class="muted">Example: BIT 440</p>
</div>
</div>
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" > Unit Description</label>
<div class="col-md-6" >
<input type="text" name="unit_desc" class="form-control" required >
</div>
</div>
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" >Unit Prefix </label>
<div class="col-md-6" >
<input type="text" name="unit_prefix" class="form-control" required >
<br><p class="muted">Example: P100</p>
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" >Unit Year</label>
<div class="col-md-6" >
<select name="unit_year" class="form-control">
<option>Select Year</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label" >Unit Semester</label>
<div class="col-md-6" >
<select name="unit_semester" class="form-control">
<option>Select Semester</option>
<option value="1">1</option>
<option value="2">2</option>
</select>
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label"></label>
<div class="col-md-6" >
<input class="form-control btn btn-success" type="submit" name="submit" value="Add Unit">
</div>
</div><!-- form-group Ends -->
</form>	
</div><!--panel-body ends-->
</div><!--end of the panel panel-default-->
</div><!--end main col-lg-12-->	
</div>
</body>
</html>
<?php 
if (isset($_POST['submit'])) {
$unit_code=$_POST['unit_code'];
$unit_desc=$_POST['unit_desc'];
$unit_prefix=$_POST['unit_prefix'];
$unit_year=$_POST['unit_year'];
$unit_semester=$_POST['unit_semester'];

$insert_unit="INSERT INTO unit(unit_prefix,unit_year,unit_semester,unit_code,unit_desc)VALUES('$unit_prefix','$unit_year','$unit_semester','$unit_code','$unit_desc')";
$run_unit=mysqli_query($con,$insert_unit);
if ($run_unit) {
echo "<script>alert('New unit has been added')</script>";
echo "<script>window.open('index.php?view_units','_self')</script>";
}

}
?>
<?php } ?>