<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.thumbnail{
	height:240px;
}
body{
	width: 100%;
	height: 100%;
	background-image: url("images/bk.jpg");
}
#top,#content_2{
	color: white;
}
</style>
</head>
<body>
<div class="container">
    <div class="row" id="top">
		<div id="header" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1 class="text-center">Swimming</h1>
		</div>
	</div>
	<div class="row" id="content">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">  
            <div class="thumbnail">
                <div class= "text-center">
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
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="thumbnail">
				<div class= "text-center">
					<div class="caption">
						<h3>Gallery</h3>
						<p>Photo and video gallery</p>
					</div>
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
				<div class= "text-center">
					<div class="caption">
						<h3>Info</h3>
						<p><a href="contacts.php" class="btn btn-primary" role="button">Contacts</a></p>
					</div>
				</div>
            </div>
        </div>
    </div>
	<div class="row" id="content_2">
	  <h2>Freestyle</h2>
	  <p>Freestyle is a category of swimming competition, 
	  defined by the rules of the International Swimming Federation (FINA), 
	  in which competitors are subject to few limited restrictions on their swimming stroke. 
	  Freestyle races are the most common of all swimming competitions, 
	  with distances beginning with 50 meters and reaching 1500 meters. </p>
	  
	  <h2>Butterfly</h2>
	  <p>The butterfly is a swimming stroke swum on the chest, with both arms moving symmetrically, 
	  accompanied by the butterfly kick. While other styles like the breaststroke, front crawl,
	  or backstroke can be swum adequately by beginners, 
	  the butterfly is a more difficult stroke that requires good technique as well as strong muscles. </p>
	  
	  <h2>Backstroke</h2>
	  <p>Backstroke or back crawl is one of the four swimming styles used in competitive events regulated by FINA, 
	  and the only one of these styles swum on the back. 
	  This swimming style has the advantage of easy breathing, 
	  but the disadvantage of swimmers not being able to see where they are going. 
	  It also has a different start from the other three competition swimming styles. </p>
	  
	  <h2>Breaststoke</h2>
	  <p>Breaststroke is a swimming style in which the swimmer is on their chest and the torso does not rotate. 
	  It is the most popular recreational style due to the swimmer's head being out of the water a large portion of the time, 
	  and that it can be swum comfortably at slow speeds. In most swimming classes,
	  beginners learn either the breaststroke or the freestyle (front crawl) first. </p>
	  

	</div>
</div>
</body>
</html>