<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login to CareerRide</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
body {
  background-image: url('http://localhost/youtubewebsite/images/photo.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>


<body>
  <div class="header">
  	<h2>Login to CareerRide</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>