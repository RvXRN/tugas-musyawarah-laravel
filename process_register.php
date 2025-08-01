<?php
// Ambil data dari form
$nama = $_POST['nama'] ?? '';
$tempat_lahir = $_POST['tempat_lahir'] ?? '';
$nama_ortu = $_POST['nama_ortu'] ?? '';
$email = $_POST['email'] ?? '';
$no_hp = $_POST['no_hp'] ?? '';
$password = $_POST['password'] ?? '';
$re_password = $_POST['re_password'] ?? '';
$nik = $_POST['nik'] ?? '';

// Validasi password
if ($password !== $re_password) {
    echo "<script>alert('Password tidak cocok!'); window.history.back();</script>";
    exit();
}

// (Sementara) Tampilkan hasil input
echo "<h2>Data Registrasi Berhasil:</h2>";
echo "<ul>
<li>Nama: $nama</li>
<li>Tempat Lahir: $tempat_lahir</li>
<li>Nama Orang Tua: $nama_ortu</li>
<li>Email: $email</li>
<li>No HP: $no_hp</li>
<li>NIK: $nik</li>
</ul>";

// ❗Nantinya data bisa disimpan ke database
?>
