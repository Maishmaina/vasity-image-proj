<?php
if(!isset($_SESSION['email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
<?php 
if (isset($_GET['delete_select'])) {
$delete_id=$_GET['delete_select'];
$delete_unit="DELETE from selected where uselected_id='$delete_id'";
$run_delete=mysqli_query($con,$delete_unit);
if ($run_delete) {
echo "<script>alert('One unit has been removed from the selected')</script>";
echo "<script>window.open('index.php?view_selected','_self')</script>";	
}
}
 ?>
<?php } ?> 