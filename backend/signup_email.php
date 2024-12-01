<?php
session_start();
require '../controller/config.php'; // File koneksi ke database

$error_email = $error_phone = ""; // Variabel untuk menyimpan pesan error

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Validasi email yang sudah terdaftar
    $sql_email = "SELECT * FROM users WHERE user_email = ?";
    $stmt_email = $conn->prepare($sql_email);
    $stmt_email->bind_param("s", $email);
    $stmt_email->execute();
    $result_email = $stmt_email->get_result();

    if ($result_email->num_rows > 0) {
        $error_email = "Email telah digunakan. Coba yang lain.";
    }

    // Validasi nomor HP yang sudah terdaftar
    $sql_phone = "SELECT * FROM users WHERE user_phone_number = ?";
    $stmt_phone = $conn->prepare($sql_phone);
    $stmt_phone->bind_param("s", $phone);
    $stmt_phone->execute();
    $result_phone = $stmt_phone->get_result();

    if ($result_phone->num_rows > 0) {
        $error_phone = "Nomor HP telah terdaftar. Coba yang lain.";
    }

    // Jika ada error, simpan di session dan redirect kembali ke form
    if (!empty($error_email) || !empty($error_phone)) {
        $_SESSION['error_email'] = $error_email;
        $_SESSION['error_phone'] = $error_phone;
        header("Location: ../user/signup_email.php"); // Kembali ke halaman signup
        exit;
    }

    // Proses penyimpanan data user baru jika tidak ada error
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user_name, user_email, user_password, user_address, user_phone_number) 
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $hashed_password, $address, $phone);
    $stmt->execute();

    // Redirect ke halaman login atau halaman sukses
    header("Location: ../user/signin.php");
    exit;
}

$conn->close();
?>
