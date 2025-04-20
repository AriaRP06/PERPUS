<?php
session_start();
include("koneksi.php"); // pastikan file koneksi.php berisi koneksi ke database

// Ambil input dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query pakai prepared statement untuk keamanan
$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Cek apakah username ditemukan
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Cek password (pastikan di database pakai password_hash saat mendaftar)
    if (password_verify($password, $user['password'])) {
        // Simpan sesi pengguna
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id'] = $user['id'];

        // Arahkan ke beranda
        header("Location: index.php");
        exit();
    } else {
        // Password salah
        echo "<script>alert('Password salah!'); window.location.href='login.php';</script>";
    }
} else {
    // Username tidak ditemukan
    echo "<script>alert('Username tidak ditemukan!'); window.location.href='login.php';</script>";
}

$stmt->close();
$conn->close();
?>
