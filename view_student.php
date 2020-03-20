<?php



if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / View Student

</li>


</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Student

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th># No.</th>
<th>Student Name</th>
<th>Student Image</th>
<th>Student Reg.</th>
<th>Student Course</th>
<th>Year of Student</th>
<th>Student Gender</th>
<th>Student Phone</th>
<th>Student Balance</th>
<th>Student Delete</th>
<th>Student Edit</th>



</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_student = "SELECT * FROM admins where status='student'";

$run_student = mysqli_query($con,$get_student);

while($row_student=mysqli_fetch_array($run_student)){

$student_id = $row_student['u_id'];
$student_name = $row_student['name'];
$student_reg = $row_student['reg'];
$student_course = $row_student['course'];
$student_year=$row_student['year'];
$student_image= $row_student['image'];
$student_gender = $row_student['gender'];
$student_phone = $row_student['phone'];
$i++;

?>

<tr>

<td><?php echo $i; ?></td>
<td><?php echo $student_name; ?></td>
<td><img src="admin_images/<?php echo $student_image; ?>" width="60" height="60"></td>

<td> <?php echo $student_reg; ?></td>

<td><?php echo($student_course); ?></td>

<td> <?php echo $student_year; ?> </td>

<td><?php echo $student_gender; ?></td>
<td><?php echo $student_phone;?></td>
<td>
<?php 
$get_balance="SELECT * FROM payment where student_id='$student_id'";
$run_balance=mysqli_query($con,$get_balance);
$row_balance=mysqli_fetch_array($run_balance);
$balance=$row_balance['amount_balance'];
echo($balance);
 ?>
</td>
<td class="text-danger" >
<?php if ($status=='lecturer') { echo "______";} else{?>	
<a class="text-danger" href="index.php?delete_student=<?php echo $student_id; ?>" onclick="return confirm('Do You want To Delete This Student')">
<i class="fa fa-trash-o"> </i> Delete
</a>
<?php } ?>
</td>

<td class="text-danger">
<?php if ($status=='lecturer'){ echo "______";} else{?>	
<a class="text-warning" href="index.php?edit_student=<?php echo $student_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>
<?php } ?>
</td>

</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->




<?php } ?>