<?php
// Koneksi ke database
include 'connect_admin.php';

// Query untuk menghitung jumlah bank sampah
$query = "
    SELECT COUNT(bank_id) AS total_banks
    FROM bank_locations;
";

// Eksekusi query
$result = $conn->query($query);

// Periksa apakah query berhasil
if ($result && $result->num_rows > 0) {
    // Ambil data
    $row = $result->fetch_assoc();
    $total_banks = $row['total_banks'] ?? 0;
} else {
    // Jika tidak ada data
    $total_banks = 0;
}

// Menutup koneksi
$conn->close();

// Kirim data dalam format JSON
header('Content-Type: application/json');
echo json_encode([
    'total_banks' => $total_banks
]);
?>
