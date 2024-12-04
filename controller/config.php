<?php
$host = "localhost";
$user = "admin";
$password = "root";
$dbname = "";

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>