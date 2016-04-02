<?php

	session_start();
	if(isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == 'username' && $password == 'password') {
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header("Location: admin.php");
		}
	} 

	if(isset($_SESSION['username'])) {
		header("Location: admin.php");
	}
	
?>

<!doctype html>
<html>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="text" style="position:absolute; top:35%; left:50%; transform:translate(-50%);   padding:2vh;font-size:3vh;" name="username" placeholder="username" />
			<input type="password" name="password" placeholder="password" style="position:absolute; top:45%; left:50%; transform:translate(-50%);   padding:2vh;font-size:3vh;" />
			<input type="submit" value="Login"  style="position:absolute; top:55%; cursor:pointer; left:50%; transform:translate(-50%);   padding:2vh;font-size:3vh;"/>
		</form>
	</body>
</html>