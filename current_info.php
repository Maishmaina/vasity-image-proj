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

<i class="fa fa-dashboard"></i> Dashboard / Current Informations

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">View Current Infomation</h3>	
</div><!--end of panel-heading -->	
<div class="panel-body">
<div class="table-responsive">
<table class="table table-hover table-bordered table-striped">
<thead>
<tr>
<td>ACADEMIC YEAR</td>	
<td>SEMESTER</td>	
<td>STATUS</td>	
<td>REGISTER DEADLINE</td>
<td>UPDATE</td>	
</tr>
</thead>
<tbody>
<?php 
$get_current="SELECT* from current";
$run_current=mysqli_query($con,$get_current);
while($row_current=mysqli_fetch_array($run_current)){
$current_id=$row_current['current_id'];	
$academic_yr=$row_current['academic_yr'];
$sem=$row_current['sem'];
$status=$row_current['status'];
$unit_deadline=$row_current['unit_deadline'];

 ?>	
<tr>
<td><?php echo($academic_yr); ?></td>	
<td><?php echo($sem); ?></td>	
<td><?php echo($status); ?></td>
<td><?php echo $unit_deadline; ?></td>	
<td><a href="index.php?unpade_current=<?php echo($current_id); ?>" class="text-info"><i class="fa fa-pencil"> </i></a></td>
</tr>
<?php } ?>		
</tbody>	
</table>	
</div><!--table-responseive ends -->	
</div><!--end of panel body -->
</div><!--end of panel panel-default -->	
</div><!-- ends of col-lg-12-->	
</div><!-- end of row 2-->
<?php } ?>