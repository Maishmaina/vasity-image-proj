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

<i class="fa fa-dashboard"></i> Dashboard / View Registered Unit

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"> </i> View Registered

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr class="bg-primary">
<th>Unit Code</th>
<th>Unit description</th>
<th>Remove Unit</th>
</tr>
</thead><!-- thead Ends -->
<tbody><!-- tbody Starts -->
<?php
$student_id=$u_id;
$get_registered="SELECT * FROM selected WHERE ustudent_id='$student_id' AND status='ON'";
$run_registered=mysqli_query($con,$get_registered);
while ($row_registered=mysqli_fetch_array($run_registered)) {
	$uselected_id=$row_registered['uselected_id'];
	$unit_id=$row_registered['unit_id'];
?>

<?php 
$get_details="SELECT * FROM unit WHERE unit_id='$unit_id'";
$run_details=mysqli_query($con,$get_details);
  $row_details=mysqli_fetch_array($run_details);
  $unit_code=$row_details['unit_code'];
  $unit_desc=$row_details['unit_desc'];
 ?>
<tr>
<td><?php echo strtoupper($unit_code); ?></td>	
<td><?php echo ucwords($unit_desc); ?></td>	
<td>
<a class="btn btn-danger" href="index.php?delete_regunit=<?php echo($uselected_id) ?>" onclick="return confirm('Are you Sure You want to Remove this unit from the list?')">
<i class="fa fa-trash"></i>&nbsp;Remove
</a>
</td>
</tr>
<?php } ?>
</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->



<?php } ?>