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

<i class="fa fa-dashboard" ></i> Dashboard / View Courses

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw"></i> View Courses

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>School:</th>
<th>Department:</th>
<th>Course:</th>
<th>Delete Course:</th>
<th>Edit Course:</th>



</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->
<?php 
$get_course="SELECT * FROM course";
$run_course=mysqli_query($con,$get_course);
while ($row_course=mysqli_fetch_array($run_course)) {
 $course_id=$row_course['course_id'];	
 $school=$row_course['school'];	
 $department=$row_course['department'];	
 $course=$row_course['course'];	
 ?>
<tr>
<td><?php echo($school); ?></td>
<td><?php echo($department); ?></td>
<td><?php echo($course); ?></td>
<td><a class="text-danger" href="index.php?delete_course=<?php echo($course_id) ?>" ><i class="fa fa-trash-o" ></i> Delete</a></td>
<td><a class="text-info" href="index.php?edit_course=<?php echo($course_id) ?>" ><i class="fa fa-pencil" ></i> Edit</a></td>
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