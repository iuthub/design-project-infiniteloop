<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Regitration system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username;?>">
		</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email;?>">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="user_reg">Register</button>
			</div>
			<p>
				Have an account? <a href="login.php">Sign In</a>
			</p>
	</form>
</body>
</html>