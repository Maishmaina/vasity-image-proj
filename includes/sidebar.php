<?php



if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="#" >Student Verification</a>


</div><!-- navbar-header Ends -->

<ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->

<li class="dropdown" ><!-- dropdown Starts -->

<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->

<img src="admin_images/<?php echo $image; ?>" width="30" height="30">
<?php echo $name; ?> <b class="caret" ></b>


</a><!-- dropdown-toggle Ends -->

<ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

<li><!-- li Starts -->

<a href="#" >

<i class="fa fa-fw fa-user" ></i> Profile


</a>

</li><!-- li Ends -->
<?php if($status=='admin'){?>
<li><!-- li Starts -->

<a href="index.php?view_student" >

<i class="fa fa-fw fa-envelope" ></i> Student 

<span class="badge" ><?php echo $count_student; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_courses" >

<i class="fa fa-fw fa-gear" ></i>Programme

<span class="badge" ><?php echo $count_course; ?></span>
</a>

</li><!-- li Ends -->
<?php } ?>
<li class="divider"></li>

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"> </i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- dropdown-menu Ends -->




</li><!-- dropdown Ends -->


</ul><!-- nav navbar-right top-nav Ends -->

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->
<?php if ($status=='student') {?>
<li><!-- li Starts -->

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Dashboard

</a>

</li><!-- li Ends -->
<?php } ?>
<?php if ($status=='admin' or $status=='lecturer') {?>	
<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#products">

<i class="fa fa-fw fa-table"></i> Student

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="products" class="collapse">
<?php if ($status=='admin') {?>
<li>

<a href="index.php?insert_student"> Add Student </a>

</li>
<?php } ?>
<li>
<a href="index.php?view_student"> View Student </a>
</li>


</ul>

</li><!-- li Ends -->
<?php } ?>

<li><!-- li Starts -->
<?php if ($status=='admin' or $status=='student') {?> 
<a href="#" data-toggle="collapse" data-target="#unit">

<i class="fa fa-fw fa-pencil"></i> Academics

<i class="fa fa-fw fa-caret-down"></i>
</a>
<?php } ?>
<ul id="unit" class="collapse">
<?php if ($status=='admin') {?>	
<li>
<a href="index.php?add_unit"> Add Unit </a>
</li>
<li><a href="index.php?view_units">View Unit</a></li>
<?php } ?>
<?php if ($status=='student') {
	
?>
<li>	
<a href="index.php?insert_reg_unit"> Register Unit </a>
</li>
<li>	
<a href="index.php?view_selected"> Selected Unit </a>
</li>
<li>
<a href="index.php?view_reg_unit">View Registred Unit</a>
</li>

<?php } ?>
</ul>

</li><!-- li Ends -->

<?php if ($status=='admin') {?>
<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#cat">

<i class="fa fa-fw fa-arrows-v"></i> Programme

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="cat" class="collapse">

<li>
<a href="index.php?insert_course">Add Programme</a>
</li>

<li>
<a href="index.php?view_courses">View Programme</a>
</li>


</ul>
</li><!-- li Ends -->
<?php } ?>
<?php if ($status=='admin' or $status=='lecturer') {?>
<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#slides">

<i class="fa fa-fw fa-gear"></i> Verify

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="slides" class="collapse">

<li>
<a href="http://127.0.0.1/verify/uploadimage_verify.php"> Take Image </a>
</li>

<li>
<a href="index.php?verify_exam"> Verity For Exam </a>
</li>

<li>
<a href="index.php?view_verified">View Verified</a>
</li>


</ul>

</li><!-- li Ends -->
<?php } ?>
<?php if ($status=='admin') {?>
<li>
<a href="index.php?view_payments">

<i class="fa fa-fw fa-pencil"></i> View Fee

</a>

</li>
<li>
<a href="index.php?current_info">

<i class="fa fa-fw fa-list"></i> Current Information

</a>

</li>
<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#users">

<i class="fa fa-fw fa-gear"></i> Users

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="users" class="collapse">
<li>
<a href="index.php?view_users"> View Users </a>
</li>

<li>
<a href="index.php?user_add"> Add New User </a>
</li>

</ul>

</li><!-- li Ends -->
<?php } ?>
<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>