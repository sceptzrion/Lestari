<?php
include 'connect_admin.php';

// Query untuk total berat sampah secara keseluruhan dengan status "accepted"
$query_total_sampah = "
    SELECT SUM(dr.waste_weight) AS total_berat 
    FROM detail_request dr
    JOIN drop_off_request dor ON dr.request_id = dor.request_id
    WHERE dor.bank_id = ? AND dor.status = 'accepted'
";
$stmt = $conn->prepare($query_total_sampah);
$stmt->bind_param("i", $bank_id);
$stmt->execute();
$stmt->bind_result($total_sampah);
$stmt->fetch();
$total_sampah = $total_sampah ?? 0; // Default ke 0 jika null
$stmt->close();

// Query untuk total berat sampah per bulan berdasarkan drop_off_request_updated_at dengan status "accepted"
$query_per_month = "
    SELECT 
        MONTH(dor.drop_off_request_updated_at) AS month, 
        YEAR(dor.drop_off_request_updated_at) AS year,
        SUM(dr.waste_weight) AS total_weight
    FROM detail_request dr
    JOIN drop_off_request dor ON dr.request_id = dor.request_id
    WHERE dor.bank_id = ? AND dor.status = 'accepted'
    GROUP BY YEAR(dor.drop_off_request_updated_at), MONTH(dor.drop_off_request_updated_at)
    ORDER BY YEAR(dor.drop_off_request_updated_at), MONTH(dor.drop_off_request_updated_at)
";
$stmt = $conn->prepare($query_per_month);
$stmt->bind_param("i", $bank_id);
$stmt->execute();
$result = $stmt->get_result();

// Proses hasil query per bulan
$data_per_month = [];
while ($row = $result->fetch_assoc()) {
    $data_per_month[] = [
        'month' => (int) $row['month'], // Pastikan bulan dalam format integer
        'year' => (int) $row['year'],   // Pastikan tahun dalam format integer
        'total_weight' => (float) $row['total_weight'] // Pastikan berat sampah sebagai float
    ];
}
$stmt->close();

// Kirim data dalam format JSON sesuai format yang diminta
header('Content-Type: application/json');
echo json_encode([
    'total_sampah' => (float) $total_sampah, // Total berat keseluruhan dalam format float
    'data_per_month' => $data_per_month // Data per bulan
]);
?>