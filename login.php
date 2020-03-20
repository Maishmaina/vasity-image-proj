<?php

session_start();

include("includes/db.php");

?>
<!DOCTYPE HTML>
<html>

<head>

<title>Login Dashboard</title>

<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" href="css/login.css" >

</head>

<body>

<div class="container" ><!-- container Starts -->

<form class="form-login" method="post" ><!-- form-login Starts -->

<h2 class="form-login-heading">Login</h2>

<input type="text" class="form-control" name="email" placeholder="Email Address" required >

<input type="password" class="form-control" name="pass" placeholder="Password" required >

<button class="btn btn-lg btn-primary btn-block" type="submit" name="u_login" >

Log in

</button>


</form><!-- form-login Ends -->

</div><!-- container Ends -->



</body>

</html>

<?php

if(isset($_POST['u_login'])){

$email = mysqli_real_escape_string($con,$_POST['email']);

$pass = mysqli_real_escape_string($con,$_POST['pass']);

$get_admin = "SELECT * from admins where email='$email' AND pass='$pass'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);
$status=$row_admin['status'];

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['email']=$email;


if ($status=='student') {
echo "<script>window.open('index.php?dashboard','_self')</script>";
}else{
echo "<script>window.open('index.php?view_student','_self')</script>";	
}
}
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}

}

?>