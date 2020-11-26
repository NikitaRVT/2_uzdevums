<!DOCTYPE html>
<html>
<head>
<title>Photo</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" href="css/lightbox.min.css">
<script src="js/lightbox.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.thumbnail{
	height:240px;
	text-align: center;
}
body{
	width: 100%;
	height: 100%;
	background-image: url("images/bk.jpg");
}
h1{
	color: white;
}
</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div id="header" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1 class="text-center">Swimming</h1>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">  
			<div class="thumbnail">
				<div class="caption">
					<h3>Swimming strokes</h3>
					<p>Freestyle</p>
					<p>Butterfly</p>
					<p>Backstroke</p>
					<p>Breaststoke</p>
					<p><a href="home.php" class="btn btn-primary" role="button">Home</a></p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="thumbnail">
				<div class="caption">
					<h3>Gallery</h3>
					<p>Photo and video gallery</p>
					<div class="dropdown">
						<a class="btn btn-primary dropdown-toggle btm-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Gallery
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="foto.php">Foto</a></li>
						<li><a href="video.php">Video</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="thumbnail">
				<div class="caption">
					<h3>Info</h3>
					<p><a href="contacts.php" class="btn btn-primary" role="button">Contacts</a></p>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<a class="example-image-link" href="images/1.png" data-lightbox="example-set" data-title="Butterfly"><img class="example-image" src="images/1.png" alt="" height="100%" width="100%"/></a>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<a class="example-image-link" href="images/2.jpg" data-lightbox="example-set" data-title="Freestyle"><img class="example-image" src="images/2.jpg" alt="" height="100%" width="100%"/></a>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<a class="example-image-link" href="images/3.jpg" data-lightbox="example-set" data-title="Backstroke"><img class="example-image" src="images/3.jpg" alt="" height="100%" width="100%"/></a>
		</div>	
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
			<a class="example-image-link" href="images/4.jpg" data-lightbox="example-set" data-title="Breaststoke"><img class="example-image" src="images/4.jpg" alt="" height="100%" width="100%"/></a>
		</div>
	</div>
</div>
<script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>