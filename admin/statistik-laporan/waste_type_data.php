<?php
include 'connect_admin.php';

// Query untuk mengambil data total berat sampah per jenis dengan status 'accepted'
$query = "
    SELECT 
        w.waste_name, 
        SUM(dr.waste_weight) AS total_weight
    FROM detail_request dr
    JOIN drop-off_request dor ON dr.request_id = dor.request_id
    JOIN waste w ON dr.waste_id = w.waste_id
    WHERE dor.bank_id = ? AND dor.status = 'accepted'
    GROUP BY w.waste_name
    ORDER BY total_weight DESC
";

// Eksekusi query menggunakan prepared statement
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $bank_id);
$stmt->execute();
$result = $stmt->get_result();

// Array untuk menampung data jenis sampah dan total berat
$waste_type_data = [];
while ($row = $result->fetch_assoc()) {
    $waste_type_data[] = [
        'jenis' => $row['waste_name'],
        'jumlah' => (int) $row['total_weight'] // Total berat sampah per jenis
    ];
}

// Menutup koneksi
$stmt->close();
$conn->close();

// Kirim data dalam format JSON
header('Content-Type: application/json');
echo json_encode($waste_type_data);
?>
