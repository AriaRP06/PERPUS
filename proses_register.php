<?php
include("koneksi.php");

// Ambil data dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];

// Validasi password
if ($password !== $confirm) {
    echo "<script>alert('Konfirmasi password tidak cocok!'); window.location.href='register.php';</script>";
    exit();
}

// Cek apakah username sudah dipakai
$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Username sudah terdaftar!'); window.location.href='register.php';</script>";
} else {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $insert = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $insert->bind_param("sss", $username, $email, $hashedPassword);

    if ($insert->execute()) {
        echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat mendaftar.'); window.location.href='register.php';</script>";
    }

    $insert->close();
}

$stmt->close();
$conn->close();
?>
