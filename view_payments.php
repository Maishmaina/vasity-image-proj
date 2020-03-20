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

<i class="fa fa-dashboard"></i> Dashboard / Students Fee

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"> </i> View Student Fee

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-hover table-bordered table-striped"><!-- table table-hover table-bordered table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#No:</th>
<th>Student Reg:</th>
<th>Total Billed:</th>
<th>Total Paid:</th>
<th>Balance:</th>
<th>Payment Date:</th>
</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->
<tr>
<?php 
$i=0;
$get_payment="SELECT * FROM payment";
$run_payment=mysqli_query($con,$get_payment);
while($row_payment=mysqli_fetch_array($run_payment)){
$student_id=$row_payment['student_id'];	
$amount_year=$row_payment['amount_year'];
$amount_paid=$row_payment['amount_paid'];
$amount_balance=$row_payment['amount_balance'];
$date_paid=$row_payment['date_paid'];
$i++;
 ?>	
<td>#<?php echo($i); ?></td>	
<td>
<?php 
$get_student="SELECT * from admins where u_id='$student_id'";
$run_student=mysqli_query($con,$get_student);
$row_student=mysqli_fetch_array($run_student);
$student_reg=$row_student['reg'];
echo($student_reg);
 ?>	
</td>	
<td><?php echo($amount_year); ?></td>	
<td><?php echo($amount_paid); ?></td>	
<td><?php echo($amount_balance); ?></td>	
<td><?php echo($date_paid); ?></td>	
</tr>
<?php } ?>
</tbody><!-- tbody Ends -->

</table><!-- table table-hover table-bordered table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php } ?>