<?php



if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<h1 class="page-header">Dashboard</h1>

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-4 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge">Kshs <?php echo $amount_yr; ?> </div>

<div>Total Billed</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->
</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-4 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->
<i class="fa fa-check fa-5x"></i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge">Kshs <?php echo $amount_paid; ?> </div>

<div>Total Paid</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

</div><!-- panel panel-yellow Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-4 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-red"><!-- panel panel-red Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->


<i class="fa fa-exclamation-triangle fa-5x"></i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge">Kshs <?php echo $amount_balance; ?> </div>

<div>Balance</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

</div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


</div><!-- 2 row Ends -->

<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-8" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-info fa-fw bg-info rounded" ></i> (<?php echo $name; ?>) Profile details

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>
<th></th>
<th></th>

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->
<tr>
<td>Reg</td>
<td><?php echo($reg); ?></td>
</tr>
<tr>
<td>Year</td>
<td><?php echo($year); ?></td>
</tr>
<tr>
<td>Full Name</td>
<td><?php echo($name); ?></td>
</tr>
<tr>
<td>Year Of Birth</td>
<td><?php echo($birth); ?></td>
</tr>
<tr>
<td>Gender</td>
<td><?php echo($gender); ?></td>
</tr>
</tbody><!-- tbody Ends -->


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-8 Ends -->

<div class="col-md-4"><!-- col-md-4 Starts -->

<div class="panel"><!-- panel Starts -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="thumb-info mb-md"><!-- thumb-info mb-md Starts -->

<img src="admin_images/<?php echo $image; ?>" class="rounded img-responsive">

<div class="thumb-info-title" style="display: none;"><!-- thumb-info-title Starts -->

<span class="thumb-info-inner"> <?php echo $name; ?> </span>

<span class="thumb-info-type"> <?php echo $reg; ?> </span>

</div><!-- thumb-info-title Ends -->

</div><!-- thumb-info mb-md Ends -->

<div class="mb-md"><!-- mb-md Starts -->

<div class="widget-content-expanded"><!-- widget-content-expanded Starts -->

<i class="fa fa-user"></i> <span>Name: </span> <?php echo $name; ?>  <br>
<i class="fa fa-user"></i> <span>Reg No:</span> <?php echo $reg; ?>
 

</div><!-- widget-content-expanded Ends -->

<hr class="dotted short">
</div><!-- mb-md Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel Ends -->

</div><!-- col-md-4 Ends -->

</div><!-- 3 row Ends -->

<?php } ?>