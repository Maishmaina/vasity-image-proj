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

<i class="fa fa-dashboard"></i> Dashboard / View Selected Unit

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->
<?php 
$select_registered="SELECT * from selected where ustudent_id='$u_id' AND status='OFF'";
$run_selected=mysqli_query($con,$select_registered);
$count_selected=mysqli_num_rows($run_selected);
if($count_selected == 0) { ?>
<div class="alert alert-danger">No unit selected please go back to register unit and select</div>
<?php }else{

 ?>	
<div class="col-lg-12">
<div class="panel panel-success">
<div class="panel-heading">
Units Selected by: <?php echo($name) ?>	
</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-hove table-bordered">
<thead>
<tr>
<th>#NO.</th>	
<th>Unit Code</th>	
<th>Unit Description</th>	
<th>Remove Unit</th>	
</tr>	
</thead>
<tbody>
<?php 
$i=0;
$get_selected="SELECT * FROM  selected WHERE ustudent_id='$u_id;' AND status='OFF'";
$run_selected=mysqli_query($con,$get_selected);
while($row_selected=mysqli_fetch_array($run_selected)) {
	$uselected_id=$row_selected['uselected_id'];
 $unit_id=$row_selected['unit_id'];

 $i++
 ?>	
<tr>
<?php 
$get_details="SELECT * FROM unit WHERE unit_id='$unit_id'";
$run_details=mysqli_query($con,$get_details);
  $row_details=mysqli_fetch_array($run_details);
  $unit_code=$row_details['unit_code'];
  $unit_desc=$row_details['unit_desc'];
 ?>
<td><?php echo $i; ?></td>	
<td><?php echo strtoupper($unit_code); ?></td>	
<td><?php echo ucwords($unit_desc); ?></td>	
<td>
<a class="btn btn-danger" href="index.php?delete_select=<?php echo($uselected_id) ?>" onclick="return confirm('Are you Sure You want to Remove this unit from the list?')">
<i class="fa fa-trash"></i>&nbsp;Remove	
</a>
</td>	
</tr>	
<?php } ?>
</tbody>	
</table>
<form method="post">
<input class="btn btn-success" type="submit" name="register" value="Register">
</form>
<?php 
if (isset($_POST['register'])) {
$update_registered="UPDATE selected set status='ON' where ustudent_id='$u_id'";
$run_registered=mysqli_query($con,$update_registered);

if($run_registered) {	
echo "<script>window.open('index.php?view_reg_unit','_self')</script>";
}
}
 ?>	
</div>
</div>	
</div><!-- ends panel panel-success -->
</div><!--for the selected unit col-lg-12 ends-->
<?php } ?>
</div><!-- 2 row Ends -->



<?php } ?>