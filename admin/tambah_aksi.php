<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama_daerah'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// menginput data ke database
$query = "INSERT INTO wisata (nama_daerah, alamat, deskripsi, latitude, longitude) VALUES ('$nama', '$alamat', '$deskripsi', '$latitude', '$longitude')";

// jalankan query dan cek apakah berhasil
if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// tutup koneksi
mysqli_close($koneksi);

// mengalihkan halaman kembali ke tampil_data.php
header("location:tampil_data.php");
?>
