<?php
if(!isset($_SESSION['email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
<?php 
if (isset($_GET['delete_regunit'])) {
$delete_id=$_GET['delete_regunit'];
$delete_unit="DELETE from selected where uselected_id='$delete_id'";
$run_delete=mysqli_query($con,$delete_unit);
if ($run_delete) {
echo "<script>alert('One unit Has been removed from registered')</script>";
echo "<script>window.open('index.php?view_reg_unit','_self')</script>";	
}
}
 ?>
<?php } ?> 