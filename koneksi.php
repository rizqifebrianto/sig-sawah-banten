<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "sig_map4";

// Membuat koneksi
$koneksi = new mysqli($host, $user, $pass, $name);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>