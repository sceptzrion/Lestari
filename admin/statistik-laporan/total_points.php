<?php
include 'connect_admin.php';
// Query untuk menghitung total poin
$query = "SELECT SUM(user_points) AS total_points
FROM (
    SELECT u.user_id, MAX(u.user_total_points) AS user_points
    FROM users u
    JOIN drop_off_request d ON u.user_id = d.user_id
    WHERE d.bank_id = '$bank_id'
    GROUP BY u.user_id
) AS unique_user_points;
";
$result = $conn->query($query);

// Periksa hasil query
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_points = $row['total_points'] ?? 0; // Default ke 0 jika data kosong
} else {
    $total_points = 0;
}
// Menutup koneksi
$conn->close();

// Menampilkan data (untuk dikirim ke frontend)
header('Content-Type: application/json');
echo json_encode(['total_points' => $total_points]);
?>
