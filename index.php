<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Selamat datang di Sistem Peminjaman Barang Perpustakaan</h2>
<p>Anda berhasil login!</p>

<a href="logout.php">Logout</a>

<br><br>
<a href="peminjaman.php">Form Peminjaman Barang</a>
<br>
<a href="daftar_peminjaman.php">Lihat Daftar Peminjaman</a>
