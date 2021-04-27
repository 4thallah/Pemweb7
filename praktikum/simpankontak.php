<?php 
include 'koneksi.php';
// Menyimpan data kedalam variabel
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];
// Query SQL untuk insert data
$query="INSERT INTO kontak SET Nama='$nama', jkel='$jenis_kelamin', Email='$email'
        ,Alamat='$alamat', Kota='$kota', Pesan='$pesan'";
mysqli_query($koneksi, $query);
// Mengalihkan menuju halaman index.php
header("location:index.php");
?>