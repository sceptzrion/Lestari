<?php
$host = "localhost";
$user = "admin";
$password = "admin";
$dbname = "db_sampah_4";

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>