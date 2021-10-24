<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
	<?php 
	include "config.php";
	$id_user = $_GET['id_user'];
	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id_user'")or die(mysqli_error($koneksi));
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">
					<input type="text" name="username" value="<?php echo $data['username'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $data['password'] ?>"></td>					
			</tr>	
			<tr>
				<td>Role</td>
				<td><input type="text" name="role" value="<?php echo $data['role'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>