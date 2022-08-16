<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");		//returns you to the login page//
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$repassword = md5($_POST['repassword']);		

	if ($password == $repassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);		//this creates the users information in the database//
			if ($result) {
				echo "<script>alert('You Are Now Registered.')</script>";		//checks if user has registered//
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['repassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";		//gives message if an error occours// 
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";		//checks if email is in use//
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";		//checks if password matches//
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Flower Cart</title>
</head>
<body>

<video autoplay loop class="background-video" muted plays-inline>	<!--mutes the background video-->

        <source src="website background1.mp4" type="video/mp4">

    </video>
	<div class="logo">
	<img src="logo_white_large.png">	<!--flower cart logo-->

	<div class="login-registerbox">
		<form action="" method="POST" class="loginsection-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="inputs">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="inputs">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="inputs">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
            <div class="inputs">
				<input type="repassword" placeholder="Please Re-Enter Your Password" name="repassword" value="<?php echo $_POST['repassword']; ?>" required>
			</div>
			<div class="inputs">
				<button name="submit" class="btn">Register</button>		<!--creates a register button-->
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">login Here</a>.</p>		<!--text anchor that takes you to the login page if you have already registered-->
		</form>
	</div>
	</div>
	
</body>
</html>