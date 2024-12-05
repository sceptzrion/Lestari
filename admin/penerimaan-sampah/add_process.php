<?php
// Termasuk koneksi ke database
require_once('../../controller/config.php');

// Periksa apakah request_id ada dalam URL
if (isset($_GET['id'])) {
    $request_id = $_GET['id'];

    // Query untuk mengambil data drop-off request berdasarkan request_id
    $query = "
        SELECT dr.request_id, dr.drop_off_request_created_at, u.user_name, dr.status, dr.bank_id
        FROM drop_off_request dr
        JOIN users u ON dr.user_id = u.user_id
        WHERE dr.request_id = '$request_id'
    ";
    $result = mysqli_query($conn, $query);
    $request = mysqli_fetch_assoc($result);

    // Jika tidak ada data untuk request_id tersebut, alihkan ke halaman lain
    if (!$request) {
        header("Location: index.php?error=request_not_found");
        exit;
    }

    // Jika status sudah diterima, cegah pembaruan
    if ($request['status'] === 'accepted') {
        header("Location: index.php?error=already_accepted");
        exit;
    }

    // Proses pembaruan jika form disubmit
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ambil data status dan jenis sampah yang dipilih
        $status = $_POST['status'];  // Status akan diterima (accepted) atau ditolak (rejected)
        $waste_ids = isset($_POST['waste_type']) ? $_POST['waste_type'] : [];  // Jenis sampah yang dipilih
        $waste_weights = isset($_POST['waste_weight']) ? $_POST['waste_weight'] : [];  // Berat sampah

        // Update status permintaan drop-off
        if ($status === 'accepted' || $status === 'rejected') {
            $update_status_query = "UPDATE drop_off_request SET status = '$status' WHERE request_id = '$request_id'";
            mysqli_query($conn, $update_status_query);
        }

        // Update atau insert data detail_request berdasarkan jenis sampah dan berat yang dipilih
        foreach ($waste_ids as $index => $waste_id) {
            $weight = $waste_weights[$index];
            if ($weight > 0) {
                // Ambil poin per kilogram untuk jenis sampah ini
                $points_query = "SELECT waste_point FROM waste WHERE waste_id = '$waste_id'";
                $points_result = mysqli_query($conn, $points_query);
                $points_row = mysqli_fetch_assoc($points_result);
                $points_per_kg = $points_row['waste_point'];

                // Hitung total poin berdasarkan berat
                $points_earned = $weight * $points_per_kg;

                // Cek apakah data jenis sampah sudah ada di detail_request
                $exists_query = "SELECT * FROM detail_request WHERE request_id = '$request_id' AND waste_id = '$waste_id'";
                $exists_result = mysqli_query($conn, $exists_query);

                if (mysqli_num_rows($exists_result) > 0) {
                    // Jika data sudah ada, lakukan pembaruan
                    $update_detail_query = "UPDATE detail_request 
                                            SET waste_weight = '$weight', points_earned = '$points_earned', detail_request_updated_at = CURRENT_TIMESTAMP 
                                            WHERE request_id = '$request_id' AND waste_id = '$waste_id'";
                    mysqli_query($conn, $update_detail_query);
                } else {
                    // Jika data belum ada, insert data baru
                    $insert_detail_query = "INSERT INTO detail_request (request_id, waste_id, waste_weight, points_earned, detail_request_updated_at) 
                                            VALUES ('$request_id', '$waste_id', '$weight', '$points_earned', CURRENT_TIMESTAMP)";
                    mysqli_query($conn, $insert_detail_query);
                }
            }
        }

        // Setelah pemrosesan selesai, arahkan pengguna ke halaman yang sesuai
        header("Location: index.php?success=request_updated");
        exit;
    }
} else {
    // Jika tidak ada 'id' dalam URL, alihkan ke halaman utama atau error
    header("Location: index.php?error=invalid_request");
    exit;
}
?>
