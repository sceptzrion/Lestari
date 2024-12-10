<?php
session_start();
include('../controller/config.php'); // Include konfigurasi database

// Mendapatkan data dari form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_email = trim($_POST['admin_email']);
    $admin_password = trim($_POST['admin_password']);

    // Debugging: Tampilkan data dari form
    // echo "Email dari form: $admin_email<br>";
    // echo "Password dari form: $admin_password<br>";

    // Cek apakah email ada di database
    $stmt = $conn->prepare("SELECT admin_id, bank_id, admin_password FROM admin WHERE admin_email = ?");
    if ($stmt) {
        $stmt->bind_param("s", $admin_email);
        $stmt->execute();
        $stmt->store_result();

        // Periksa apakah email ditemukan
        if ($stmt->num_rows > 0) {
            // Ambil data dari database
            $stmt->bind_result($admin_id, $bank_id, $admin_password_hash);
            $stmt->fetch();

            // Debugging: Periksa hash password dari database
            // echo "Password hash dari database: $admin_password_hash<br>";

            // Verifikasi password
            if (password_verify($admin_password, $admin_password_hash)) {
                // Login berhasil, set session
                $_SESSION['admin_id'] = $admin_id;
                $_SESSION['bank_id'] = $bank_id;

                // Redirect ke dashboard
                header('Location: dashboard.php');
                exit();
            } else {
                // Password salah
                $_SESSION['email_attempt'] = $admin_email;
                $_SESSION['login_message'] = "Wrong credentials";
                header('Location: login.php');
            }
        } else {
            // Email tidak ditemukan
            $_SESSION['email_attempt'] = $admin_email;
            $_SESSION['login_message'] = "Wrong credentials";
            header('Location: login.php');
        }

        $stmt->close();
    } else {
        die("Error pada prepare statement: " . $conn->error);
    }
}

$conn->close();
?>