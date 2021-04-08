<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$email = $_POST['email'];
mysqli_query($koneksi, "INSERT INTO karyawan VALUES ('','$nama','$alamat','$gender','$email')");
header("location:index.php?pesan=input");
?>
