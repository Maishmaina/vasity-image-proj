<?php
if(!isset($_SESSION['email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
<?php 
if (isset($_GET['delete_course'])) {
$delete_id=$_GET['delete_course'];
$delete_unit="DELETE from course where course_id='$delete_id'";
$run_delete=mysqli_query($con,$delete_unit);
if ($run_delete) {
echo "<script>alert('One programme has been removed')</script>";
echo "<script>window.open('index.php?view_courses','_self')</script>";	
}
}
 ?>
<?php } ?> 