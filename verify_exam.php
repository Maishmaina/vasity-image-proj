<?php



if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / Verify Student.

</li>

</ol><!-- breadcrumb Ends -->



</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw"></i> Verity Student

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->
<a href="http://127.0.0.1:5500" target="_blank" class="btn btn-info">Bio FACE</a>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label">UNIT: Code</label>
<div class="col-md-6">
<input type="input" name="student_unit" class="form-control" placeholder="bit 423" required>
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label">Student Reg.:</label>
<div class="col-md-6">
<input type="text" name="student_reg" class="form-control" required>
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label">Password Verify:</label>
<div class="col-md-6">
<input type="password" name="student_pass" class="form-control" required>
</div>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<!--<label class="col-md-3 control-label">FingerPrint Image:</label>
<div class="col-md-6">
<div class="row"><div class="col-md-6">	
<img style="height:150px;" src="admin_images/bgfinger.jpg" class="img-responsive">
</div><div class="col-md-6">
<img style="height:150px;" src="admin_images/bgfinger.jpg" class="img-responsive">
</div></div>
</div>-->
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->
<label class="col-md-3 control-label"></label>
<div class="col-md-6">
<input type="submit" name="submit" value="verify Now" class=" btn btn-primary form-control" >
</div>
</div><!-- form-group Ends -->
</form><!-- form-horizontal Ends -->
</div><!-- panel-body Ends -->
</div><!-- panel panel-default Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<?php 
if (isset($_POST['submit'])) {
$student_reg=$_POST['student_reg'];
$student_pass=$_POST['student_pass'];
$student_unit=$_POST['student_unit'];

// $select_student="SELECT * FROM admins WHERE reg='$student_reg'";
// $run_student=mysqli_query($con,$select_student);
// $row_student=mysqli_fetch_array($run_student);
// $student_uid=$row_student['u_id'];

$select_unit="SELECT * FROM unit where unit_code='$student_unit'";
$run_unit=mysqli_query($con,$select_unit);
$row_unit=mysqli_fetch_array($run_unit);
$unit_id=$row_unit['unit_id'];

// $select_unit_registered="SELECT * FROM selected where unit_id='$unit_id' AND ustudent_id='$student_uid'";
// $run_unit_registered=mysqli_query($con,$select_unit_registered);

$get_verified="SELECT * FROM admins WHERE reg='$student_reg' AND pass='$student_pass'";
$run_verified=mysqli_query($con,$get_verified);
$row_verified=mysqli_fetch_array($run_verified);
$student_id=$row_verified['u_id'];
$student_img=$row_verified["image"];
$count_verified=mysqli_num_rows($run_verified);
if($count_verified == 1){

$get_selected="SELECT * from selected where ustudent_id='$student_id' AND status='ON' AND unit_id='$unit_id'";
$run_selected=mysqli_query($con,$get_selected);
$count_selected=mysqli_num_rows($run_selected);
if ($count_selected > 0) {	
 $get_once="SELECT * FROM verified where student_reg='$student_reg' AND student_unit='$student_unit'";
 $get_once=mysqli_query($con,$get_once);
 $count_once=mysqli_num_rows($get_once);
 if ($count_once > 0) {
 echo "<script>alert('$student_reg, You have already been verified for $student_unit')</script>";
echo "<script>window.open('index.php?view_verified','_self')</script>";
 }else{
$see_verified="INSERT INTO verified(student_reg,student_img,student_unit) VALUES('$student_reg','$student_img','$student_unit')";
$run_see=mysqli_query($con,$see_verified);	
echo "<script>alert('$student_reg, You are allowed to sit for $student_unit Exam')</script>";
echo "<script>window.open('index.php?view_verified','_self')</script>";
if($run_see){
	$select_helper="SELECT * FROM verified_helper where student_reg='$student_reg'";
	$run_helper=mysqli_query($con,$select_helper);
	$count_helper=mysqli_num_rows($run_helper);
	if($count_helper > 0){
       $update_count="UPDATE verified_helper set unit_count=unit_count + 1 where student_reg='$student_reg'";
       $run_update=mysqli_query($con,$update_count);
	}else{
		$insert_helper="INSERT INTO verified_helper(student_reg,unit_count) VALUES('$student_reg','1')";
		$run_insert_helper=mysqli_query($con,$insert_helper);
	}
}
}
}else{
echo "<script>alert('$student_reg, You are not allowed to sit for $student_unit Exam.You did not register for this unit.')</script>";
echo "<script>window.open('index.php?verify_exam','_self')</script>";	
}
}
else {
echo "<script>alert('Registration and password does not match')</script>";
echo "<script>window.open('index.php?verify_exam','_self')</script>";
}
}
 ?>

<?php } ?>