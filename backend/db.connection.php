<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_sampah_4';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($host, $username, $password, $dbname);
    // Jika koneksi berhasil, tidak perlu tampilkan apa pun.
} catch (Exception $e) {
    die("Terjadi kesalahan saat menghubungkan ke database: " . $e->getMessage());
}
?>
