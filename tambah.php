<!DOCTYPE html>
<html>
<head>
	<title>ADD ALBUM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body1">
	<div border="1" class="kotak2">
		<h2 class="tulisanadd"><center>Add My Album</center></h2>
		<form method="post" action="tambahkan.php">
			<label class="namaalbum">Singel</label><br>
				<input type="number" name="singel" class="kotakform" required><br>

				<label class="namaalbum">Title</label><br>
				<input type="text" name="title" class="kotakform" required><br>

				<label class="namaalbum">Album</label><br>
				<input type="text" name="album" class="kotakform" required><br>
				
				<label class="namaalbum">Artist</label><br>
				<input type="text" name="artist" class="kotakform" required><br>

				<button type="submit" value="SIMPAN" class="submit_1">ADD</button>

		</form>
</body>
</html>