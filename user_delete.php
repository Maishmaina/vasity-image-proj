<?php

if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['user_delete'])){

$delete_id = $_GET['user_delete'];

$delete_user = "DELETE from admins where u_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_user);

if($run_delete){

echo "<script>alert('One user has been deleted')</script>";

echo "<script>window.open('index.php?view_users','_self')</script>";

}


}


?>

<?php } ?>