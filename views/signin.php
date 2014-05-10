<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<meta name="viewport" content="initial-scale=1">
		<style type="text/css">
			.btn {
				width: 350px;
				margin: 10px 0px;
			}
		</style>
	</head>
	<body>
		<a href="../index.php"><h1>CarPool</h1></a>
		<div class="box">
			<h2>Sign In</h2>
			<form method="post" action="../controller/signin_con.php">
				<input class="form" type="text" name="email"  placeholder="Email"><br>
				<input class="form" type="password" name="password" placeholder="Password"><br>
				<input type="checkbox" name="rmbrpass">Remember password
				<div class="submitbox">
				<input class="btn" type="submit" value="Sign In">
				&nbsp or <a href="signup.php">Sign Up</a><br>
				<a href="passreset.php">Forget your password?</a>
				</div>
			</form>
		</div>
	</body>
</html>
