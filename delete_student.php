<?php
if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['delete_student'])){

$delete_id = $_GET['delete_student'];

$delete_pay="DELETE from payment where student_id='$delete_id'";
$run_pay=mysqli_query($con,$delete_pay);
if ($run_pay) {

$delete_std = "DELETE from admins where u_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_std);

if($run_delete){

echo "<script>alert('One Student has been deleted successfully')</script>";

echo "<script>window.open('index.php?view_student','_self')</script>";

}
}else{
echo "<script>alert('Student was not deleted!')</script>";

echo "<script>window.open('index.php?view_student','_self')</script>";	
}
 
}

?>

<?php } ?>