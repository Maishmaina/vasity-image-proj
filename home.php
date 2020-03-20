<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>STUDENT AUTHENTICATION</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
</head>
<body style="background-color: #C3C9C9;">
<div class="container" style=" padding-top: 70px!important;">
<div class="row">
<div class="col-md-4">
<div class="panel">
<div class="panel-body">
<form class="form-login" method="post" ><!-- form-login Starts -->
<h2 class="form-login-heading">Login as an Admin</h2>
<input type="text" class="form-control" name="email" placeholder="Email Address" required >
<input type="password" class="form-control" name="pass" placeholder="Password" required style=" padding-top: 70px!important;" >
<button class="btn btn-lg btn-primary btn-block" type="submit" name="u_login" style=" padding-top: 70px!important;">
Log in
</button>
</form><!-- form-login Ends -->	
</div>	
</div>	
</div>
<div class="col-md-4">
<div class="panel">
<div class="panel-body">
<form class="form-login" method="post" ><!-- form-login Starts -->
<h2 class="form-login-heading">Login as an Invigilator</h2>
<input type="text" class="form-control" name="email" placeholder="Email Address" required  >
<input type="password" class="form-control" name="pass" placeholder="Password" required style=" padding-top: 70px!important;">
<button class="btn btn-lg btn-primary btn-block" type="submit" name="u_login" style=" margin-top: 20px!important;">
Log in
</button>
</form><!-- form-login Ends -->		
</div>	
</div>	
</div>	
<div class="col-md-4">
<div class="panel">
<div class="panel-body">
<form class="form-login" method="post" ><!-- form-login Starts -->
<h2 class="form-login-heading">Login as a Student</h2>
<input type="text" class="form-control" name="email" placeholder="Email Address" required >
<input type="password" class="form-control" name="pass" placeholder="Password" required style=" margin-top: 20px!important;">
<button class="btn btn-lg btn-primary btn-block" type="submit" name="u_login" style=" margin-top: 20px!important;">
Log in
</button>
</form><!-- form-login Ends -->	
</div>	
</div>	
</div>		
</div>	
</div>	


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>	
</body>
</html>