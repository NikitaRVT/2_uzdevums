<!doctype html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>	
.thumbnail{
	text-align: center;
}
body{
	width: 100%;
	height: 100%;
	background-image: url("images/bk.jpg");
}
.error {color: #FF0001;}  
	#top, table, h1, h2{
	color: white;
}
p{
	color: #F9E8E4;
}
form {
	text-align: center;
}
</style>
</head>
<body>
<?php
	$nameErr = $emailErr = $phNumErr= "";
	$name = $email = $phNum="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {  
		if (empty($_POST["name"])) {  
			$nameErr = "Name is required";  
		} else {  
			$name = input_data($_POST["name"]);  
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
				$nameErr = "Only alphabets and white space are allowed";  
			}  
		}
			
		if (empty($_POST["email"])) {  
			$emailErr = "Email is required";  
		} else {  
			$email = input_data($_POST["email"]);  
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
				$emailErr = "Invalid email format";  
			}  
		}  
		
		if (empty($_POST["phNum"])) {  
			$phNumErr = "Phone number is required";  
		} else {  
			$phNum = input_data($_POST["phNum"]);  
			if (!preg_match("/^[0-9]*$/",$phNum)) {  
				$phNumErr = "Only digits are allowed";  
			}  
		}
	}
	function input_data($data) {  
	  $data = trim($data);  
	  $data = stripslashes($data);  
	  $data = htmlspecialchars($data);  
	  return $data;  
	}  
?>

<div class="container">
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">  
		<div class="thumbnail">
			<div class="text-center">
				<div class="caption">
					<h3>Login</h3>  
					<span class = "error">* Required field </span>  
					<br><br>  
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
						Name:
						<input type="text" name="name"> 
						<span class="error">*<br><br><?php echo $nameErr; ?> </span>  
						<br><br>  
						E-mail:  
						<input type="text" name="email"> 
						<span class="error">*<br><br> <?php echo $emailErr; ?> </span>  
						<br><br>
						Phone number:   
						<input type="text" name="phNum">  
						<span class="error">*<br><br> <?php echo $phNumErr; ?> </span>
						<br><br> 							
						<input type="submit" name="submit" value="Submit">   
						<br><br>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php  
	if(isset($_POST['submit'])) {  
		if($nameErr == "" && $emailErr == "" && $phNumErr == "") {  
			header ("Location: home.php");
		} 
	}  
?>  
</body>
</html>