<!DOCTYPE html>
<html>
<head>
	<title>Edit Album</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body2">
	<div border="1" class="kotak3">
		<h2 class="tulisanadd"><center>Edit My Album</center></h2>
		<?php
		include 'koneksi.php';
		$singel = $_GET['singel'];
		$lagu = mysqli_query($koneksi, "SELECT * FROM album WHERE singel='$singel'");
		while($a = mysqli_fetch_array($lagu)){
		?>
		<form method="post" action="update.php">
			<input type="hidden" name="singel" class="kotakform" required value="<?php echo $a['singel']; ?>"><br>

			<label class="namaalbum">Title</label><br>
			<input type="text" name="title" class="kotakform" required value="<?php echo $a['title']; ?>"><br>

			<label class="namaalbum">Album</label><br>
			<input type="text" name="album" class="kotakform" required value="<?php echo $a['album']; ?>"><br>
				
			<label class="namaalbum">Artist</label><br>
			<input type="text" name="artist" class="kotakform" required value="<?php echo $a['artist']; ?>"><br>

			<button type="submit" value="UPDATE" class="submit_2">Update</button>
		</form>
	<?php } ?>
</body>
</html>