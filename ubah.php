<?php
include 'koneksi.php';

$id = $_POST['id'];
$KM = $_POST['nama_lengkap'];
$NM = $_POST['umur'];
$Jurusan = $_POST['jurusan'];
$Alamat = $_POST['alamat'];
$NIK = $_POST['nik'];

mysqli_query($koneksi,"update aplication set nama_lengkap='$KM', umur='$NM', jurusan='$Jurusan', alamat='$Alamat',nik='$NIK' where id='$id'");

header("location:index.php");
?>
