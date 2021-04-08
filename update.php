<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$email = $_POST['email'];

mysqli_query($koneksi,"UPDATE karyawan SET nama='$nama', alamat='$alamat', gender='$gender',email='$email' WHERE id='$id' ");

header("location:index.php?pesan=update");
?>
