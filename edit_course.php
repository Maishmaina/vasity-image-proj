<?php

if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>
<?php 
if(isset($_GET['edit_course'])){
$edit_id = $_GET['edit_course'];
$get_course="SELECT * FROM course where course_id='$edit_id'";
$run_course=mysqli_query($con,$get_course);
$row_course=mysqli_fetch_array($run_course);
$course_id=$row_course['course_id'];	
$school=$row_course['school'];	
$department=$row_course['department'];	
$course=$row_course['course'];
}	
 ?>
<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Dashboard / Edit Programme

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i>Edit Programme

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">School</label>

<div class="col-md-6">

<input type="text" name="school" class="form-control" value="<?php echo($school) ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Departmet</label>

<div class="col-md-6">

<input type="text" name="department" class="form-control" value="<?php echo($department) ?>"/>
</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Course</label>

<div class="col-md-6">

<input type="text" name="course" class="form-control" value="<?php echo($course) ?>" />
</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="update" value="Update Programme" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$school= $_POST['school'];
$department= $_POST['department'];
$course= $_POST['course'];

$update_course = "UPDATE course SET school='$school',department='$department',course='$course' where course_id='$course_id'";

$run_course = mysqli_query($con,$update_course);

if($run_course){

echo "<script> alert('Programme Updated Successfully')</script>";

echo "<script> window.open('index.php?view_courses','_self') </script>";

}

}



?>

<?php } ?>