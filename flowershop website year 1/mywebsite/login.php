<?php 

include 'config.php';

session_start();

error_reporting(0);		//stops errors reporting//

if (isset($_SESSION['username'])) {
    header("Location: homepage.php");		//sends you to the homepage//
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);	

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);		//checks the users information from the database to allow them to login//
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: homepage.php");		//checks that you are a registered user and then sends you to the homepage//
	} else {
		echo "<script>alert('Email Or Password Is Incorrect.')</script>";		//gives an error if you enter your email or password incorrectly//
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">		<!--font for the login-registerbox-->

	<link rel="stylesheet" type="text/css" href="style.css">	<!--connects the .css style sheet to the html-->

	<title>Flower Cart</title>
</head>
<body>

    <video autoplay loop class="background-video" muted plays-inline>	<!--mutes the background video-->

        <source src="website background1.mp4" type="video/mp4">

    </video>

	<div class="logo">
		
	<img src="logo_white_large.png">		<!--flower cart logo-->

	<div class="login-registerbox">
		<form action="" method="POST" class="loginsection-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="inputs">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="inputs">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>	
			</div>			<!--creates an email and password text box for users to enter their details into -->
			<div class="inputs">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>	<!--text anchor that takes you to the register page if you havent registered yet-->
		</form>
	</div>
	</div>
</body>
</html>