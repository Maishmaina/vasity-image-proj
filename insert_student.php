<?php

if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<!DOCTYPE html>

<html>

<head>

<title> Add Student </title>
</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Add Student

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Add Student

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Student Name </label>

<div class="col-md-6" >

<input type="text" name="student_name" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Student Reg.</label>

<div class="col-md-6" >

<input type="text" name="student_reg" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Student Course</label>

<div class="col-md-6" >


<select name="student_course" class="form-control" >

<option> Select a Course</option>
<?php 
$get_course="SELECT * FROM course";
$run_course=mysqli_query($con,$get_course);
while ($row_course=mysqli_fetch_array($run_course)) {
$course=$row_course['course'];
echo "<option value='$course'>$course</option>";
}

 ?>
</select>

</div>

</div><!-- form-group Ends -->
<div class="form-group">
<label class="col-md-3 control-label">Student Year</label>
<div class="col-md-6">
<select name="student_yr" class="form-control">
<option>Select Student Year</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>	
</div>	
</div><!--form-group-->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Student Image </label>

<div class="col-md-6" >

<input type="file" name="student_img" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Student Gender </label>

<div class="col-md-6" >

<select class="form-control" name="student_gender" required>
	<option>Gender</option>
	<option value="male">Male</option>
	<option value="female">Female</option>
	<option value="others">Others</option>
</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Date Of Birth </label>

<div class="col-md-6" >

<input type="text" name="student_birth" class="form-control" placeholder="example:: 31/12/1979" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Email address </label>

<div class="col-md-6" >

<input type="email" name="student_email" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Phone No.</label>

<div class="col-md-6" >

<input type="text" name="student_phone" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Student Password</label>

<div class="col-md-6" >

<input type="password" name="student_pass" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >
<input type="hidden" name="student_fingerprint">
</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Insert Student" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['submit'])){

$student_name = $_POST['student_name'];
$student_reg = $_POST['student_reg'];
$student_course = $_POST['student_course'];
$student_gender = $_POST['student_gender'];
$student_yr = $_POST['student_yr'];
$student_birth = $_POST['student_birth'];
$student_email= $_POST['student_email'];
$student_phone= $_POST['student_phone'];
$student_pass= $_POST['student_pass'];
$student_fingerprint=$_POST['student_fingerprint'];
$student_status='student';

$student_img = $_FILES['student_img']['name'];
$temp_name1 = $_FILES['student_img']['tmp_name'];
move_uploaded_file($temp_name1,"admin_images/$student_img");

$select_reg="SELECT * FROM admins WHERE reg='$student_reg'";
$run_reg=mysqli_query($con,$select_reg);
$count_reg=mysqli_num_rows($run_reg);
if($count_reg){
echo "<script>alert('Registration number you entered already exist')</script>";
echo "<script>window.open('index.php?insert_student','_self')</script>";
}else{
$insert_student ="INSERT INTO admins(name,email,reg,course,year,image,gender,birth,phone,pass,fingerprint,status) VALUES('$student_name','$student_email','$student_reg','$student_course','$student_yr','$student_img','$student_gender','$student_birth','$student_phone','$student_pass','$student_fingerprint','$student_status')";

$run_student = mysqli_query($con,$insert_student);
if ($run_student) {
$inserted_std=mysqli_insert_id($con);

date_default_timezone_set("africa/nairobi");
$date_paid=date("F d, Y");

$insert_payment="INSERT INTO payment(student_id, amount_year,amount_paid,amount_balance,date_paid) VALUES('$inserted_std','35200','35200','0','$date_paid')";
$run_payment=mysqli_query($con,$insert_payment);

if($run_payment){

echo "<script>alert('You have added a new student successfully')</script>";

echo "<script>window.open('index.php?view_student','_self')</script>";

}
}else{echo "<script>alert('Something Went Wrong!!!')</script>";}
}
}

?>

<?php } ?>
