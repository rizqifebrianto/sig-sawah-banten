<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_sawah'];
$nama = $_POST['nama_daerah'];
$luas = $_POST['luas_sawah'];
$deskripsi = $_POST['deskripsi'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// update data ke database
mysqli_query($koneksi, "update wisata set nama_daerah='$nama', luas_sawah='$luas', deskripsi='$deskripsi', latitude='$latitude', longitude='$longitude' where id_sawah='$id'");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");