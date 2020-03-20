<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}
else {
?>
<?php
$admin_session = $_SESSION['email'];

$get_admin = "SELECT * from admins  where email='$admin_session'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);
$u_id = $row_admin['u_id'];
$name = $row_admin['name'];
$email = $row_admin['email'];
$image = $row_admin['image'];
$status = $row_admin['status'];
$reg=$row_admin['reg'];
$course=$row_admin['course'];
$year=$row_admin['year'];
$gender=$row_admin['gender'];
$birth=$row_admin['birth'];
$phone=$row_admin['phone'];

$student_prefix=$reg;


 
$get_student = "SELECT * from admins where status='student'";
$run_student = mysqli_query($con,$get_student);
$count_student = mysqli_num_rows($run_student);

$get_course = "SELECT * from course";
$run_course = mysqli_query($con,$get_course);
$count_course = mysqli_num_rows($run_course);

#///////////////////////////////////////////////////
#student session:::
?>
<?php 
#code to payment info
$select_pay="SELECT * FROM payment where student_id='$u_id'";
$run_payment=mysqli_query($con,$select_pay);
$row_paymennt=mysqli_fetch_array($run_payment);
$amount_yr=$row_paymennt['amount_year'];
$amount_paid=$row_paymennt['amount_paid'];
$amount_balance=$row_paymennt['amount_balance'];



 ?>


<!DOCTYPE html>
<html>

<head>

<title>Verify Student</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >


<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

</head>

<body>

<div id="wrapper"><!-- wrapper Starts -->

<?php include("includes/sidebar.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<?php

if(isset($_GET['dashboard'])){

include("dashboard.php");

}

if(isset($_GET['insert_student'])){

include("insert_student.php");

}

if(isset($_GET['view_student'])){

include("view_student.php");

}

if(isset($_GET['delete_student'])){

include("delete_student.php");

}

if(isset($_GET['edit_student'])){

include("edit_student.php");

}

if(isset($_GET['insert_reg_unit'])){

include("insert_reg_unit.php");

}

if(isset($_GET['view_reg_unit'])){

include("view_reg_unit.php");

}
if(isset($_GET['insert_course'])){

include("insert_course.php");

}

if(isset($_GET['view_courses'])){

include("view_courses.php");

}

if(isset($_GET['verify_exam'])){

include("verify_exam.php");

}


if(isset($_GET['view_verified'])){

include("view_verified.php");

}

if(isset($_GET['delete_verified'])){

include("delete_verified.php");

}
if(isset($_GET['view_payments'])){

include("view_payments.php");

}
if(isset($_GET['view_users'])){

include("view_users.php");

}


if(isset($_GET['user_delete'])){

include("user_delete.php");

}
if(isset($_GET['user_profile'])){

include("user_profile.php");

}

if (isset($_GET['add_unit'])) {
	include("add_unit.php");
}
if (isset($_GET['view_units'])) {
  include("view_units.php");
} 
if (isset($_GET['delete_verified'])) {
  include("delete_verified.php");
}
if (isset($_GET['current_info'])) {
	include('current_info.php');
}
if (isset($_GET['unpade_current'])) {
	include ('unpade_current.php');
}
if (isset($_GET['delete_regunit'])) {
	include('delete_regunit.php');
}
if (isset($_GET['delete_select'])) {
	include('delete_select.php');
}
if (isset($_GET['delete_unit'])) {
	include('delete_unit.php');
}
if (isset($_GET['edit_unit'])) {
	include('edit_unit.php');
}
if (isset($_GET['delete_course'])) {
	include('delete_course.php');
}
if (isset($_GET['edit_course'])) {
	include('edit_course.php');
}
if (isset($_GET['view_selected'])) {
	include('view_selected.php');
}
if (isset($_GET['user_add'])) {
	include('user_add.php');
}
?>

</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->
</body>


</html>

<?php } ?>