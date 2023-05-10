<?php
// Koneksi ke database MySQL
$conn = mysqli_connect('localhost', 'root', '', 'db_2201010548');

// Cek koneksi
if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}

// Buat database baru
$sql = "CREATE DATABASE IF NOT EXISTS db_2201010548";
if (mysqli_query($conn, $sql)) {
    echo "Database berhasil dibuat";
    echo "<br>";
} else {
    echo "Error saat membuat database: " . mysqli_error($conn);
    echo "<br>";
}

// Pilih database yang baru dibuat
mysqli_select_db($conn, "db_2201010548");

// Buat tabel baru
$sql = "CREATE TABLE IF NOT EXISTS tb_buku_2201010548 (
    id_buku_2201010548 CHAR(10) PRIMARY KEY,
    judul_buku_2201010548 VARCHAR(100),
    kategori_buku_2201010548 VARCHAR(50),
    penerbit_2201010548 VARCHAR(100),
    penulis_2201010548 VARCHAR(100),
    stok_2201010548 INT,
    harga_2201010548 INT
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel berhasil dibuat";
    echo "<br>";
} else {
    echo "Error saat membuat tabel: " . mysqli_error($conn);
    echo "<br>";
}

// Tutup koneksi
mysqli_close($conn);
?>
