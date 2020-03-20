<?php
if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";
}
else {

?>
<div class="row" ><!-- 1 row Starts -->
<div class="col-lg-12" ><!-- col-lg-12 Starts -->
<ol class="breadcrumb" ><!-- breadcrumb Starts -->
<li class="active" >
<i class="fa fa-dashboard" ></i> Dashboard / View Unit
</li>
</ol><!-- breadcrumb Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw"></i> View Unit

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->
<div class="table-responsive" ><!-- table-responsive Starts -->
<table class="table table-bordered table-hover table-striped" ><!-- table-bordered table-hover table-striped Starts -->
<thead><!-- thead Starts -->
<tr>
<th>Unit Prefix:</th>
<th>Year:</th>
<th>Semester:</th>
<th>Code:</th>
<th>Description:</th>
<th>Delete:</th>
<th>Edit:</th>
</tr>
</thead><!-- thead Ends -->
<tbody><!-- tbody Starts -->
<?php 
$get_unit="SELECT * FROM unit";
$run_unit=mysqli_query($con,$get_unit);
while ($row_unit=mysqli_fetch_array($run_unit)) {
$unit_id=$row_unit['unit_id'];	
$unit_prefix=$row_unit['unit_prefix'];
$unit_year=$row_unit['unit_year'];
$unit_semester=$row_unit['unit_semester'];
$unit_code=$row_unit['unit_code'];
$unit_desc=$row_unit['unit_desc'];

 ?>	
<tr>
<td><?php echo strtoupper($unit_prefix); ?></td>
<td><?php echo $unit_year; ?></td>
<td><?php echo $unit_semester; ?></td>
<td><?php echo strtoupper($unit_code); ?></td>
<td><?php echo ucwords($unit_desc); ?></td>
<td><a class="text-danger" href="index.php?delete_unit=<?php echo($unit_id) ?>" onclick="return confirm('Area you sure you want to delete')"><i class="fa fa-trash-o" ></i> Delete</a></td>
<td><a href="index.php?edit_unit=<?php echo($unit_id) ?>" ><i class="fa fa-pencil" ></i> Edit</a></td>
</tr>
<?php } ?>
</tbody><!-- tbody Ends -->
</table><!-- table-bordered table-hover table-striped Ends -->
</div><!-- table-responsive Ends -->
</div><!-- panel-body Ends -->
</div><!-- panel panel-default Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<?php } ?>