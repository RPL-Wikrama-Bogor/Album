<?php
include 'koneksi.php';

$singel = $_POST['singel'];
$title = $_POST['title'];
$album = $_POST['album'];
$artist = $_POST['artist'];

mysqli_query($koneksi, "UPDATE album SET title='$title', album='$album', artist='$artist' WHERE singel='$singel'");
header("location:index.php");

?>