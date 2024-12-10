<?php
include 'connect_admin.php';


// Set header untuk JSON response
header('Content-Type: application/json');

try {
    // Ambil data JSON dari fetch
    $data = json_decode(file_get_contents('php://input'), true);

    // Cek apakah data ada dan redeem_id tersedia
    if (!$data || !isset($data['redeem_id'])) {
        throw new Exception("Data tidak valid atau redeem_id tidak ditemukan.");
    }

    $redeem_id = $data['redeem_id'];

    // Tentukan status yang valid
    $status = 'approved'; // Anda bisa sesuaikan dengan status yang valid, misalnya 'pending' atau 'approved'

    // Query untuk update status redeem dan memastikan bank_id sesuai
    $stmt = $conn->prepare("UPDATE redeem SET status = ? WHERE redeem_id = ? AND bank_id = ?");
    $stmt->bind_param("sii", $status, $redeem_id, $bank_id); // Menggunakan 'sii' karena status adalah string, redeem_id dan bank_id adalah integer

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Reward berhasil disetujui.']);
    } else {
        throw new Exception("Gagal menyetujui reward.");
    }
} catch (Exception $e) {
    // Kirim pesan error jika terjadi kesalahan
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>
