<?php

if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_student'])){

$edit_id = $_GET['edit_student'];

$get_student = "SELECT * FROM admins where u_id='$edit_id'";

$run_edit = mysqli_query($con,$get_student);

$row_edit = mysqli_fetch_array($run_edit);

$s_id = $row_edit['u_id'];
$s_name = $row_edit['name'];
$s_reg = $row_edit['reg'];
$s_course= $row_edit['course'];
$s_year = $row_edit['year'];
$s_image = $row_edit['image'];
$s_gender = $row_edit['gender'];
$s_birth= $row_edit['birth'];
$s_email = $row_edit['email'];
$s_phone = $row_edit['phone'];
$s_pass= $row_edit['pass'];
$s_fingerprint = $row_edit['fingerprint'];

}
?>
<!DOCTYPE html>

<html>

<head>

<title>Student</title>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Student

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

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Student Name </label>

<div class="col-md-6" >

<input type="text" name="student_name" class="form-control" required value="<?php echo $s_name; ?>">

</div>

</div><!-- form-group Ends -->
<div class="form-group">

<label class="col-md-3 control-label" >Student Reg. </label>

<div class="col-md-6" >

<input type="text" name="student_reg" class="form-control" required value="<?php echo $s_reg; ?>">

</div>
</div><!--form-group ends-->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Student Course </label>

<div class="col-md-6" >

<select name="student_course" class="form-control" >

<option value="<?php echo $s_course; ?>" > <?php echo $s_course; ?> </option>
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

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Student Year </label>

<div class="col-md-6" >
<select name="student_year" class="form-control" >
<option value="<?php echo $s_year; ?>" ><?php echo $s_year; ?> </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Student Image</label>

<div class="col-md-6" >

<input type="file" name="student_img" class="form-control">
<br><img src="admin_images/<?php echo $s_image; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Student Gender </label>

<div class="col-md-6" >
<select class="form-control" name="student_gender" required>
	<option value="<?php echo($s_gender); ?>"><?php echo($s_gender);?></option>
	<option value="male">Male</option>
	<option value="female">Female</option>
	<option value="female">Others</option>
</select>
</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Date Of Birth</label>

<div class="col-md-6" >
<input type="text" name="student_birth" class="form-control" value="<?php echo($s_birth); ?>" required >
</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Student Email </label>

<div class="col-md-6" >

<input type="text" name="student_email" class="form-control" required value="<?php echo $s_email; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Phone No.</label>

<div class="col-md-6" >

<input type="text" name="student_phone" class="form-control" required value="<?php echo $s_phone; ?>" >

</div>

</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Student Password </label>

<div class="col-md-6" >

<input type="text" name="student_pass" class="form-control" required value="<?php echo $s_pass; ?>" >

</div>

</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Student FingerPrint</label>

<div class="col-md-6" >
<input type="hidden" name="student_fingerprint" value="<?php echo($s_fingerprint) ?>">
<div class="row"><div class="col-md-6">	
<img style="height:150px;" src="admin_images/bgfinger.jpg" class="img-responsive">
</div><div class="col-md-6">
<img style="height:150px;" src="admin_images/bgfinger.jpg" class="img-responsive">
</div></div>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update Student" class="btn btn-primary form-control" >

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

if(isset($_POST['update'])){

$student_name = $_POST['student_name'];
$student_reg = $_POST['student_reg'];
$student_course = $_POST['student_course'];
$student_year = $_POST['student_year'];
$student_gender = $_POST['student_gender'];
$student_birth=$_POST['student_birth'];
$student_email =$_POST['student_email'];
$student_phone=$_POST['student_phone'];
$student_pass=$_POST['student_pass'];
$student_fingerprint=$_POST['student_fingerprint'];

$student_img = $_FILES['student_img']['name'];
$temp_name = $_FILES['student_img']['tmp_name'];
move_uploaded_file($temp_name,"admin_images/$student_img");
if (empty($student_img)) {
	$student_img=$s_image;
}

$update_student="UPDATE admins SET name='$student_name',reg='$student_reg',course='$student_course',year='$student_year',image='$student_img',gender='$student_gender',birth='$student_birth',email='$student_email',phone='$student_phone',pass='$student_pass',fingerprint='$student_fingerprint', status='student' where u_id='$s_id'";
$run_product = mysqli_query($con,$update_student);
if($run_product){
echo "<script> alert('You have updated the Student's info Successfully') </script>";
echo "<script>window.open('index.php?view_student','_self')</script>";

}

}

?>

<?php } ?>
