<?php
if(!isset($_SESSION['email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
<?php 
if (isset($_GET['delete_unit'])) {
$delete_id=$_GET['delete_unit'];
$delete_unit="DELETE from unit where unit_id='$delete_id'";
$run_delete=mysqli_query($con,$delete_unit);
if ($run_delete) {
echo "<script>alert('One unit has been removed')</script>";
echo "<script>window.open('index.php?view_units','_self')</script>";	
}
}
 ?>
<?php } ?> 