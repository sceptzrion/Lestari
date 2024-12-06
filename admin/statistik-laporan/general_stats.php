<?php
// Koneksi ke database
include 'connect_admin.php';

// Query untuk total berat sampah sepanjang tahun
$queryTotalWeight = "
    SELECT SUM(dr.waste_weight) AS total_weight
    FROM drop_off_request dor
    JOIN detail_request dr ON dor.request_id = dr.request_id
    WHERE YEAR(dor.drop_off_request_created_at) = YEAR(CURDATE()) AND dor.status = 'accepted' AND bank_id='$bank_id';
";
$resultTotalWeight = $conn->query($queryTotalWeight);
$totalWeight = $resultTotalWeight->fetch_assoc()['total_weight'] ?? 0;

// Query untuk mendapatkan berat sampah tertinggi
$queryMaxWeight = "
    SELECT 
        SUM(dr.waste_weight) AS max_weight
    FROM drop_off_request dor
    JOIN detail_request dr ON dor.request_id = dr.request_id
    WHERE YEAR(dor.drop_off_request_created_at) = YEAR(CURDATE()) AND bank_id='$bank_id' AND dor.status = 'accepted'
    GROUP BY MONTH(dor.drop_off_request_created_at)
    ORDER BY max_weight DESC
    LIMIT 1;
";
$resultMaxWeight = $conn->query($queryMaxWeight);
$maxWeight = $resultMaxWeight->fetch_assoc()['max_weight'] ?? 0;

// Query untuk semua bulan dengan kontribusi tertinggi
$queryTopMonths = "
    SELECT 
        MONTHNAME(dor.drop_off_request_created_at) AS month_name,
        SUM(dr.waste_weight) AS total_weight
    FROM drop_off_request dor
    JOIN detail_request dr ON dor.request_id = dr.request_id
    WHERE YEAR(dor.drop_off_request_created_at) = YEAR(CURDATE()) AND bank_id='$bank_id' AND dor.status = 'accepted'
    GROUP BY MONTH(dor.drop_off_request_created_at)
    HAVING total_weight = $maxWeight
    ORDER BY MONTH(dor.drop_off_request_created_at);
";
$resultTopMonths = $conn->query($queryTopMonths);
$topMonths = [];
while ($row = $resultTopMonths->fetch_assoc()) {
    $topMonths[] = [
        'month_name' => $row['month_name'],
        'total_weight' => $row['total_weight']
    ];
}

// Query untuk jenis sampah paling dominan
$queryTopWasteType = "
    SELECT 
        w.waste_name,
        SUM(dr.waste_weight) AS total_weight
    FROM detail_request dr
    JOIN waste w ON dr.waste_id = w.waste_id
    JOIN drop_off_request dor ON dr.request_id = dor.request_id
    WHERE YEAR(dor.drop_off_request_created_at) = YEAR(CURDATE()) AND bank_id='$bank_id' AND dor.status = 'accepted'
    GROUP BY dr.waste_id
    ORDER BY total_weight DESC
    LIMIT 1;
";
$resultTopWasteType = $conn->query($queryTopWasteType);
$topWasteRow = $resultTopWasteType->fetch_assoc();
$topWasteType = $topWasteRow['waste_name'] ?? '-';
$topWasteWeight = $topWasteRow['total_weight'] ?? 0;

// Menutup koneksi
$conn->close();

// Kirim data dalam format JSON untuk frontend
header('Content-Type: application/json');
echo json_encode([
    'total_weight' => $totalWeight,
    'top_months' => $topMonths,
    'top_waste_type' => $topWasteType,
    'top_waste_weight' => $topWasteWeight,
]);
?>
