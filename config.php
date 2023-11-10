<?php
// Konfigurasi database
$hostname = 'localhost';
$database = "cv";
$username = "root";
$password = "untirta2022";

// Membuat koneksi
$conn = mysqli_connect($hostname, $username, $password, $database);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Berhasil terkoneksi";
}
