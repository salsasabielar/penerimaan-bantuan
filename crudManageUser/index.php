<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="add.php">+ Tambah Data Baru</a>
 
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
            <th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Role</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "config.php";
		$query_mysqli = mysqli_query($koneksi,"SELECT * FROM user")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysqli)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><?php echo $data['role']; ?></td>
			<td>
				<a class="edit" href="edit.php?id_user=<?php echo $data['id_user']; ?>">Edit</a> |
				<a class="hapus" href="delete.php?id_user=<?php echo $data['id_user']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>