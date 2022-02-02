<?php
include 'koneksi.php';

$singel = $_POST['singel'];
$title = $_POST['title'];
$album = $_POST['album'];
$artist = $_POST['artist'];

mysqli_query($koneksi, "INSERT INTO album(singel, title, album, artist) VALUES('$singel', '$title', '$album', '$artist')");
header("location:index.php");

?>