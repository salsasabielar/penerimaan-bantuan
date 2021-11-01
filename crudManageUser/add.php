<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<br/>
 
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="addAksi.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>					
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>					
			</tr>	
			<tr>
				<td>Role</td>
				<!-- <td><input type="text" name="role"></td>					 -->
				<form method='POST' action=''>
				<!-- <h2>Tambah Agama</h2> -->
				<h4><select name="role">
				<option value="admin">Admin</option>
				<option value="user">User</option>
				</select>
				<!-- <input type="submit" name="submit" value="Submit"/> -->
				</h4>
				</form>
				<?php
				if (isset($_POST['submit'])) {
				$agama = $_POST['role'];
				$sql = $db->query("INSERT INTO user (role) VALUES ('$role') ");
				header('location:../manageUser.php');
				}
				?>
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>