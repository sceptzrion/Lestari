<?php
include('../../controller/config.php');


// Cek apakah admin sudah login
session_start();
if (!isset($_SESSION['admin_id'])) {
    die("Anda tidak diizinkan mengakses data ini.");
}

// Ambil admin_id dan bank_id dari session
$admin_id = $_SESSION['admin_id'];

// Query untuk mengambil bank_id admin yang sedang login
$adminQuery = "SELECT bank_id FROM admin WHERE admin_id = ?";
$stmt = $conn->prepare($adminQuery);
$stmt->bind_param("i", $admin_id);
$stmt->execute();
$result = $stmt->get_result();
$adminData = $result->fetch_assoc();
$bank_id = $adminData['bank_id'] ?? null;

if (!$bank_id) {
    die("Admin tidak terkait dengan bank sampah.");
}
?>
