<?php
$host = 'localhost'; // atau sesuai pengaturan servermu
$username = 'root'; // username untuk koneksi database
$password = ''; // password untuk koneksi database
$dbname = 'perpustakaan'; // nama database yang kamu pakai

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
