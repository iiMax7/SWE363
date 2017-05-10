<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Home Page</title>
</head>
<body>

<form action="login.php" method="POST">
	<input type="text" name="username" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type="Submit">LOG IN</button><br>
</form>

<?php 
	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
	}else {
		echo "Hi";
	}
?>

<br><br><br>
<form action="signup.php" method="POST">
	<input type="text" name="username" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<input type="text" name="email" placeholder="Email"><br>
	<button type="Submit">SIGN UP</button><br>
</form>

<form action="logout.php" method="POST">
	<button type="Submit">LOG OUt</button><br>
</form>

</body>
</html>