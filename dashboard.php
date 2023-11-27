<?php
include 'koneksi.php';
include 'formatTanggalWaktu.php'; // Sesuaikan dengan nama file fungsi konversi tanggal dan waktu

// Ambil waktu server
$query = "SELECT NOW() as current_time";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

// Tampilkan waktu server pada navbar
echo "Waktu Server: " . formatTanggalWaktu($row['current_time']);
?>
