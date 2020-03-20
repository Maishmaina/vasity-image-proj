<?php

if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>
<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Dashboard / Register Unit

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Register Unit!

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->
<?php 
$get_current="SELECT * from current where status='ON'";
$run_current=mysqli_query($con,$get_current);
$row_current=mysqli_fetch_array($run_current);
$current_id=$row_current['current_id'];
$academic_yr=$row_current['academic_yr'];
$sem=$row_current['sem'];
$status=$row_current['status'];
 ?>
<!-- design the initial part of the studebt credential! srt -->
<div class="panel-body">
<div class="table-responsive">
<table class="table table-hove table-striped table-bordered">
<tbody>
<tr>
<td>Student Reg: <span class="text-info"><?php echo($reg); ?></span></td>
<td></td>
<td>Semester: <span class="text-info">Sem:<?php echo($sem) ?> <?php echo($academic_yr) ?></span></td>
</tr>
<tr>
<td>Name: <span class="text-info"><?php echo($name); ?></span></td>
<td></td>
<td>Email: <span class="text-info"><?php echo($email); ?></span></td>
</tr>
<tr>
<td>Program: <span class="text-info"><?php echo($course); ?></span></td>
<td></td>
<td>Stage: <span class="text-info">Y<?php echo($year); ?>S <?php echo $sem; ?></span></td>
</tr>
</tbody>
</table>	
</div>	
</div>
<!-- FOUND UNIT BASED OF THE STUDENT LOGGED!! -->
<?php 
$get_deadline="SELECT * from current where status='ON' AND unit_deadline='ON'";
$run_deadline=mysqli_query($con,$get_deadline);
$count_deadline=mysqli_num_rows($run_deadline);
if ($count_deadline > 0){
?>
<div class="alert alert-danger"><strong>ALERT! </strong> Unit registration deadline have passed!</div>
<?php } else { ?>

<?php if ($amount_balance > 0) { ?>
<div class="alert alert-danger"><strong>ALERT!</strong> Your need to clear fee to register units.Visit Finance office for more information</div>
<?php }else { ?>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-info">
<div class="panel-heading">
UNIT FOUND: <span class="text-danger">Select Unit</span>
</div>
<div class="panel-body">
<div class="row">
<?php 
$student_course=substr($student_prefix,0,4);
$unit_year=$year;
$unit_semester= $sem;
$student_id=$u_id;
$get_unit="SELECT * FROM unit where unit_prefix='$student_course' AND unit_year='$unit_year' AND unit_semester='$unit_semester'";
$run_unit=mysqli_query($con,$get_unit);
while ($row_unit=mysqli_fetch_array($run_unit)) {
	$unit_id=$row_unit['unit_id'];
	$unit_code=$row_unit['unit_code'];
	$unit_desc=$row_unit['unit_desc'];
 ?>
<div class="col-md-4">	
<div class="panel panel-success">
<div class="panel-heading">Code:  <span class="text-success"><?php echo strtoupper($unit_code); ?></span></div>
<div class="panel-body">Description: <br><span class="text-info"><?php echo ucwords($unit_desc); ?></span></div>
<div class="panel-footer">
<form method="post" id="load-form">
<input type="checkbox" name="remember[]" value="<?php echo($unit_id); ?>">

</div>	
</div><!-- end panel- -->
</div><!-- end of col-md-3 -->
<?php } ?>
</div> <!--single of unit content -->
<br>
<input class="btn btn-primary" type="submit" name="submit" value="Select">
</form>
<?php 

if (isset($_POST["submit"])) {
 if(!empty($_POST["remember"])) {
 	foreach ($_POST["remember"] as $remember) {
 		$insert_unit="INSERT INTO selected (unit_id,ustudent_id,status) VALUES('$remember','$student_id','OFF')";
 		$run_insert=mysqli_query($con,$insert_unit);
 		if ($run_insert) {
 			echo "<script>window.open('index.php?view_selected','_self')</script>";
 		}
 	}
 }else{?>
<div class="card">
<h1 class="heading"></h1>
</div>
<?php	
}
}

 ?>
</div><!-- panel-body ends -->
</div><!-- panel panel-info -->
</div><!--for select unit col-lg-12 ends-->
</div><!-- end row unit registration.... -->
<!-- design the initial part of the studebt credential! ends-->
</div><!-- panel-body Ends -->
</div><!-- panel panel-default Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<?php
}#end notpayed
}#enddeadline
 }#end nologed ?>
 <script>
 	//handle the load
document.getElementById('load-form').addEventListener('submit', success);
function success(e){
showmessage('Must select unit');
e.preventDefault();	
}
//handle message
function showmessage(error){

//createDiv
const errorDiv = document.createElement('div');
//get elements
const card = document.querySelector('.card');
const heading= document.querySelector('.heading');
//addClass
errorDiv.className='alert alert-danger';
//create text node and append to div
errorDiv.appendChild(document.createTextNode(error));

//insert Error above heading
 card.insertBefore(errorDiv, heading);

 //clear error after time
 setTimeout(clearError, 2000);
}

//clear error method:
function clearError(){
	document.querySelector('.alert').remove();
}	
 </script>