<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<script type="text/javascript" src="script1.js"></script>
	<title>form</title>
</head>
<body>
<div class="wrapper login">
	<div class="container">
		<div class="col-left">
			<div class="login-text">
				<h2>Welcome!</h2>
				<p>You are already account..</p>
				<a href="login.php" class="btn">Log in</a>
			</div>			
		</div>
		
		<div class="col=right">
			<div class="login-form">
				<h2>Sing up</h2>
				<form method="GET" action="insert.php">
					<p>
						<label>Username<span></span></label>
						<input type="text" name="uname" placeholder="Username" required>
					</p>

					<p>
						<label>Email or Mobile<span></span></label>
						<input type="text"  name="uemail"placeholder="Email or Mobile" required>
					</p>

					<p>
						<label>Password<span></span></label>
						<input type="password" name="pass" id="password" placeholder="password" required>
					</p>

					<p>
						<label>Conform Password<span></span></label>
						<input type="password" name="upass" id="conform_password" placeholder="password" required>
					</p>

					<p>
						<input type="submit" value="Sing up">
					</p>

					<p>
						<a href="login.php">Log in</a>
					</p>
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>