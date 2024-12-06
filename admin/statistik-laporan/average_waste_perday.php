<?php
// Koneksi ke database
include 'connect_admin.php';


// Query untuk mengambil total berat sampah dan jumlah hari unik
$query = "
    SELECT 
        COUNT(DISTINCT DATE(d.drop-off_request_created_at)) AS total_days, 
        SUM(dr.waste_weight) AS total_weight
    FROM drop-off_request d
    JOIN detail_request dr ON d.request_id = dr.request_id
    WHERE d.status = 'accepted' AND d.bank_id = ?
";

// Eksekusi query dengan prepared statement
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $bank_id);
$stmt->execute();
$result = $stmt->get_result();

// Periksa apakah query berhasil dan ada hasil
if ($result && $result->num_rows > 0) {
    // Ambil data
    $row = $result->fetch_assoc();
    $total_days = $row['total_days'] ?? 0;
    $total_weight = $row['total_weight'] ?? 0;

    // Hitung rata-rata sampah per hari
    $average_per_day = ($total_days > 0) ? $total_weight / $total_days : 0;
} else {
    // Jika tidak ada data
    $total_days = 0;
    $total_weight = 0;
    $average_per_day = 0;
}

// Menutup koneksi
$stmt->close();
$conn->close();

// Kirim data dalam format JSON
header('Content-Type: application/json');
echo json_encode([
    'average_per_day' => $average_per_day,
    'total_days' => $total_days,
    'total_weight' => $total_weight
]);
?>
