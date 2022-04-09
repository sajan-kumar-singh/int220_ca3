<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="CSS/registercss.css">
</head>
<body>
	<form method="post" action="registerserver.php" enctype="multipart/form-data" >
    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Game<span>zone</span></div>
		</div>
		<br>
		<div class="login">
				<input placeholder="username" type="text"  name="name" id="name"><br><br>
				<input type="email" placeholder="email" name="email" id="email"><br>
				<input type="password" placeholder="password" name="password" id="password"><br>
				<button type="submit" class="button" name="submit" >Register</button> <a href="index.php" style="color:white;text-decoration: none;">Login</a>
		</div>
		</form>
</body>
</html>
