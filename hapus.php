<?php
include 'koneksi.php';

$singel = $_GET['singel'];

mysqli_query($koneksi, "DELETE FROM album WHERE singel='$singel'");
header('location:index.php');

?>