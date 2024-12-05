<?php
// Koneksi ke database
include 'connect_admin.php';

// Query untuk menghitung jumlah total partisipan
$query = "
    SELECT COUNT(DISTINCT u.user_id) AS total_participants
    FROM users u
    JOIN drop-off_request d ON u.user_id = d.user_id
    WHERE d.bank_id = '$bank_id'
";

// Eksekusi query
$result = $conn->query($query);

// Ambil hasil
$row = $result->fetch_assoc();
$total_participants = $row['total_participants'];

// Menutup koneksi
$conn->close();

// Kirim data dalam format JSON
header('Content-Type: application/json');
echo json_encode(['total_participants' => $total_participants]);
?>
