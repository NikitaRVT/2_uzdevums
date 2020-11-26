<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.map-container{
	overflow:hidden;
	padding-bottom:56.25%;
	position:relative;
	height:0;
}
.map-container iframe{
	left:0;
	top:0;
	height:100%;
	width:100%;
	position:absolute;
}
.thumbnail{
	height:240px;
	text-align: center;
}
body{
	width: 100%;
	height: 100%;
	background-image: url("images/bk.jpg");
}
#top, table, h2{
	color: white;
}
.review {
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
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h2>Contacts ("SK Delfins")</h2>
			  <table class="table table-bordered">
				<thead>
				  <tr>
					<th>Trainer Firstname</th>
					<th>Trainer Lastname</th>
					<th>Number</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>Germans</td>
					<td>Dudkins</td>
					<td>22456890</td>
				  </tr>
				  <tr>
					<td>Svetlana</td>
					<td>Galkina</td>
					<td>26456890</td>
				  </tr>
				  <tr>
					<td>Nikolaj</td>
					<td>Maksalenko</td>
					<td>27430364</td>
				  </tr>
				</tbody>
			  </table>
		</div>
	</div>
	 <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2178.741030915245!2d24.204944316183294!3d56.90182698087629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eed26ae5087079%3A0x89dc31905b2f6099!2zRGVsZsSrbnM!5e0!3m2!1sru!2slv!4v1576418653414!5m2!1sru!2slv" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	 </div>
	 <?php
		$review = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  $review = test_input($_POST["review"]);
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			<h2>Your review</h2><input type="text" name="review"> 
		</form>
		<?php
			echo "<h2>Review:</h2>";
			echo "<div class='review'>$review</div>";
			echo "<br>";
		?>
	</div>
</div>
</body>
</html>