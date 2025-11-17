<?php
include 'koneksi.php';

$Kode = $_GET['id'];

mysqli_query($koneksi,"delete from aplication where id='$Kode'");

header("location:index.php");
?>
