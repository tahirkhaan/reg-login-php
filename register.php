<?php
session_start()

// connect to database


?>





<!DOCTYPE html>
<html>
<head>
	<title>
		Registration Form
	</title>
</head>
<body>
<div class="header">
	<h1 style="text-align: center;">Registration Heres</h1>
</div>

<form method="post" action="register.php" style="padding-top: 80px;">
	<table style="margin-left: 300px;">
		<tr>
			<td>UserName:</td>
			<td><input type="text" name="username" class="textinput"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" name="username" class="textinput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textinput"></td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			<td><input type="password" name="password2" class="textinput"></td>
		</tr>
		<tr>
			<td><input type="submit" name="register_btn" value="Register"></td>
		</tr>
	</table>
</form>

</body>
</html>