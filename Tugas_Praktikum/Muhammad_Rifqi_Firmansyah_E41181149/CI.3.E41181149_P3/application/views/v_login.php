<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<center><h1>Membuat Login Dengan CodeIgniter</h1></center>
	<center>
		<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Login"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>