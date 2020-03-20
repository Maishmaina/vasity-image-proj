<?php


if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Verified

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts  -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> View Verified

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->
<?php 
$select_verified="SELECT * FROM verified_helper";
$run_verified=mysqli_query($con,$select_verified);
while($row_verified=mysqli_fetch_array($run_verified)){;
	$v_id=$row_verified['id'];
	$student_reg=$row_verified['student_reg'];

$s_verified="SELECT * FROM verified where student_reg='$student_reg'";
$r_verified=mysqli_query($con,$s_verified);
$w_verified=mysqli_fetch_array($r_verified);
$student_reg=$w_verified['student_reg'];
$student_img=$w_verified['student_img'];
 ?>
<div class="col-lg-3 col-md-3" ><!-- col-lg-3 col-md-3 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts --->

<div class="panel-heading" ><!-- panel-heading Starts -->
<h3 class="panel-title" align="center" >
<?php echo($student_reg) ?>
</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body" style="height: 200px!important"><!-- panel-body Starts -->

<img style="height:100px;" src="admin_images/<?php echo($student_img); ?>" class="img-responsive">
Done:
<?php 
$unit_verified="SELECT * FROM verified where student_reg='$student_reg'";
$urun_verified=mysqli_query($con,$unit_verified);
while($urow_verified=mysqli_fetch_array($urun_verified)){
	$unit_done=$urow_verified['student_unit'];
 ?>	
[<?php echo($unit_done); ?>],
<?php } ?>
</div><!-- panel-body Ends -->

<div class="panel-footer" ><!-- panel-footer Starts -->

<center><!-- center Starts -->

<a onclick="return confirm('Do you want to Delete?')" href="index.php?delete_verified=<?php echo($v_id) ?>" class="pull-left text-danger" >

<i class="fa fa-trash-o" ></i> Delete

</a>
<div class="clearfix" >
</div>



</center><!-- center Ends -->


</div><!-- panel-footer Ends -->


</div><!-- panel panel-primary Ends --->


</div><!-- col-lg-3 col-md-3 Ends -->
<?php } ?>
<!-- entirely looped -->

</div><!-- panel-body Ends -->


</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends  -->

<?php } ?>