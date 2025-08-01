<?php
// Dummy user (ganti dengan database di real app)
$validEmail = "admin@example.com";
$validPassword = "123456";

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email === $validEmail && $password === $validPassword) {
    echo "<script>alert('Login berhasil!'); window.location.href = 'dashboard.php';</script>";
} else {
    echo "<script>alert('Login gagal! Email atau password salah.'); window.location.href = 'index.php';</script>";
}
?>
