<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>form</title>
</head>
<body>
<div class="wrapper login">
	<div class="container">
		<div class="col-left">
			<div class="login-text">
				<h2>Welcome!</h2>
				<p>Create your account..</p>
				<a href="signup.php" class="btn">Sign Up</a>
			</div>			
		</div>
		
		<div class="col=right">
			<div class="login-form">
				<h2>Log in</h2>
				<form action="">
					<p>
						<label>Username/Email address<span></span></label>
						<input type="text" placeholder="Username or Email" required>
					</p>

					<p>
						<label>Password<span></span></label>
						<input type="password" placeholder="password" required>
					</p>

					<p>
						<input type="submit" value="Log in">
					</p>

					<p>
						<a href="#">Forget password?</a>
					</p>
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>