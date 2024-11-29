<?php
session_start();
include('../controller/config.php');

// Mendapatkan data dari form
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];

// Cek apakah email ada di database
$stmt = $conn->prepare("SELECT admin_id, bank_id, admin_password FROM admin WHERE admin_email = ?");
$stmt->bind_param("s", $admin_email);
$stmt->execute();
$stmt->store_result();

// Periksa apakah email ditemukan
if ($stmt->num_rows > 0) {
    // Mengambil data dari database
    $stmt->bind_result($admin_id, $bank_id, $admin_password_hash);
    $stmt->fetch();

    // Verifikasi password
    if (password_verify($admin_password, $admin_password_hash)) {
        // Set session jika login berhasil
        $_SESSION['admin_id'] = $admin_id;
        $_SESSION['bank_id'] = $bank_id;

        // Redirect ke dashboard
        header('Location: dashboard.php');
        exit();
    } else {
        // Jika password salah
        echo "<script>
            alert('Email atau Password salah!');
            window.location.href='login.php';
        </script>";
    }
} else {
    // Jika email tidak ditemukan
    echo "<script>
        alert('Email atau Password salah!');
        window.location.href='login.php';
    </script>";
}

// Menutup statement dan koneksi
$stmt->close();
$conn->close();
?>
