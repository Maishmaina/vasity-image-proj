<!DOCTYPE html>
<html>

<head>

<title>Verify Student</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >


<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

</head>
<body class="container bg-secondary">
<div class="panel">
<div class="panel-body bg-success">
<div class="pull-left">	
<h2 class="text-success">Welcome, upload image to train facial Recognition algorithm</h2>	
<form method="POST" enctype="multipart/form-data">

<div class="form-group" style="width: 300px; ">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input class="form-control input-lg" type="text" name="newName" placeholder="Full name" required>
</div>
</div>
<div class="form-group">
<div class="">Upload image 1</div>
<input class="newPhoto" type="file" name="newPhoto">
<p class="help-block">Maximum size 2Mb jpg</p>
<img src="admin_images/IMG-20200108-WA0030.jpg" class="img-thumbnail previsualizer" width="100px">
</div>
<button type="submit" name="submit" class="btn btn-primary">Save Img1</button>
</form>
</div>

<div class="pull-right">
<h2 class="text-success">Improve</h2>	
<form method="POST" enctype="multipart/form-data">
<div class="form-group" style="width: 300px; ">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input class="form-control input-lg" type="text" name="newName1" placeholder="Full name {same full name}" required>
</div>
</div>
<div class="form-group">
<div class="">Upload image 2</div>
<input class="newPhoto1" type="file" name="newPhoto1">
<p class="help-block">Maximum size 2Mb jpg</p>
<img src="admin_images/IMG-20200108-WA0032.jpg" class="img-thumbnail previsualizer1" width="100px">
</div>
<button type="submit" name="submit" class="btn btn-primary">Save Img2</button>
</form>	
</div>
</div>	
</div>

<script>
$(".newPhoto").change(function(){
	var image= this.files[0];
	
	//validateType
	if (image["type"] != "image/jpeg" && image["type"] != "image/png") {
		$(".newPhoto").val("");

		alert("Error while uploading Image")
		
	}else if(image["size"] > 2000000){
        
		alert("Image size exceed threshold of 2mb re-try")	
	}else{
		var dataImage= new FileReader;
		dataImage.readAsDataURL(image);

		$(dataImage).on("load", function(event){
			var rootImage = event.target.result;
			$(".previsualizer").attr("src",rootImage); 
		});
	} 

});
	
</script>	
</body>
</html>
<?php 
error_reporting(0);
if (isset($_POST['newName'])) {
	$root="";
	if (isset($_FILES["newPhoto"]["tmp_name"])) {
		//create image
		list($width, $height)=getimagesize($_FILES["newPhoto"]["tmp_name"]);
		$newWidth=500;
		$newHieght=500;

		//create image dir
		$directory = "facerecog/labeled_images/".$_POST["newName"];
		mkdir($directory, 0777);

		//create image
		if ($_FILES["newPhoto"]["type"] == "image/jpeg") {
			$numrando=1;
	   		$root="facerecog/labeled_images/".$_POST["newName"]."/".$numrando.".jpg";
            $origin= imagecreatefromjpeg($_FILES["newPhoto"]["tmp_name"]);
            $destionation=imagecreatetruecolor($newWidth, $newHieght);
            imagecopyresized($destionation, $origin, 0, 0, 0, 0, $newWidth, $newHieght, $width, $height);
            imagejpeg($destionation,$root);
   

			
		}
	}
}
 ?>

 <!-- CODE FOR THE NEXT IMAGE FOR TRAINING THE SYSTEM -->

 <script>
$(".newPhoto1").change(function(){
	var image= this.files[0];
	
	//validateType
	if (image["type"] != "image/jpeg" && image["type"] != "image/png") {
		$(".newPhoto1").val("");

		alert("Error while uploading Image")
		
	}else if(image["size"] > 2000000){
        
		alert("Image size exceed threshold of 2mb re-try")	
	}else{
		var dataImage= new FileReader;
		dataImage.readAsDataURL(image);

		$(dataImage).on("load", function(event){
			var rootImage = event.target.result;
			$(".previsualizer1").attr("src",rootImage); 
		});
	} 

});
	
</script>	
</body>
</html>
<?php 
if (isset($_POST['newName1'])) {
	$root="";
	if (isset($_FILES["newPhoto1"]["tmp_name"])) {
		//create image
		list($width, $height)=getimagesize($_FILES["newPhoto1"]["tmp_name"]);
		$newWidth=500;
		$newHieght=500;

		//create image dir
		$directory = "facerecog/labeled_images/".$_POST["newName1"];
		mkdir($directory, 0777);

		//create image
		if ($_FILES["newPhoto1"]["type"] == "image/jpeg") {
			$numrando=2;
	   		$root="facerecog/labeled_images/".$_POST["newName1"]."/".$numrando.".jpg";
            $origin= imagecreatefromjpeg($_FILES["newPhoto1"]["tmp_name"]);
            $destionation=imagecreatetruecolor($newWidth, $newHieght);
            imagecopyresized($destionation, $origin, 0, 0, 0, 0, $newWidth, $newHieght, $width, $height);
            imagejpeg($destionation,$root);

			
		}
	}
}
 ?>