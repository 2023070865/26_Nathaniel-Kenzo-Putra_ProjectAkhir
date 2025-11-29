<?php
include "koneksi.php";
$KM = $_POST['nama_lengkap'];
$NM = $_POST['umur'];
$Jurusan = $_POST['jurusan'];
$Alamat = $_POST['alamat'];
$NIK = $_POST['nik'];

mysqli_query($koneksi, "INSERT INTO aplication (nama_lengkap, umur, jurusan, alamat, nik) values('$KM','$NM','$Jurusan','$Alamat','$NIK')");

header("location:index.php");


?>
