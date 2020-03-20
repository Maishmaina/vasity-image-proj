<?php



if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
 
<?php
 
if(isset($_GET['delete_verified'])){
$delete_id = $_GET['delete_verified'];

$select_verified="SELECT * from verified_helper where id='$delete_id'";
$run_verified=mysqli_query($con,$select_verified);
$row_verified=mysqli_fetch_array($run_verified);
$student_reg=$row_verified['student_reg'];

$delete_fromverified="DELETE from verified where student_reg='$student_reg'";
$run_fromverified=mysqli_query($con,$delete_fromverified);

if($run_fromverified){

$delete_slide = "DELETE from verified_helper where id='$delete_id'";
$run_delete = mysqli_query($con,$delete_slide);

if($run_delete){

echo "<script>alert('One verified Student has been removed')</script>";
echo "<script>window.open('index.php?view_verified','_self')</script>";

}
}else{
echo "<script>alert('Sorry seem like something went wrong did not removed')</script>";
echo "<script>window.open('index.php?view_verified','_self')</script>";
}

} 
 
 
 

?>



<?php } ?>