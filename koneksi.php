<?php
$servername = "localhost";
$username = "username";
$password = "password";
$database = "nama_database";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";

// Tutup koneksi (opsional)
// mysqli_close($conn);
?>