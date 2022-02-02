<!DOCTYPE html>
<html>
<head>
	<title>My Album</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div border="1" class="kotak">
		<h1><center>My Album</center></h1>
		<center><table border="2" cellspacing="0" cellpadding="2" width="95%" radius="5px">
			<tr class="kelasalbum">
				<td width="20px">No.</td>
				<td width="60px">Singel</td>
				<td width="100px">Title</td>
				<td width="100px">Album</td>
				<td width="100px">Artis</td>
				<td width="100px">Action</td>
			</tr>
			<?php
			include 'koneksi.php';

			$no = 1;
			$lagu = mysqli_query($koneksi, "SELECT * FROM album");

			while($a = mysqli_fetch_array($lagu)){
			?>

			<tr class="kelasalbum_1">
				<td><?php echo $no++; ?></td>
				<td><?php echo $a['singel']; ?></td>
				<td><?php echo $a['title']; ?></td>
				<td><?php echo $a['album']; ?></td>
				<td><?php echo $a['artist']; ?></td>
				<td>
					<a href="edit.php?singel=<?php echo $a['singel']; ?>" class="edit">EDIT</a>
					<a href="hapus.php?singel=<?php echo $a['singel']; ?>"onclick="return confirm('Lanjut Menghapus?')" class="hapus">DELETE</a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<a href="tambah.php" class="submit">ADD ALBUM</a>
	</body>
</html>