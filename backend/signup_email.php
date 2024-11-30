<?php
// Sertakan file koneksi database
require 'db.connection.php';

// Periksa apakah data dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Validasi data sederhana (pastikan semua field diisi)
    if (empty($name) || empty($email) || empty($password) || empty($address) || empty($phone)) {
        die("Semua field harus diisi!");
    }

    // Hash password untuk keamanan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Ambil waktu saat ini untuk created_at dan updated_at
    $current_time = date("Y-m-d H:i:s");

    // Query untuk menyimpan data ke database, termasuk created_at dan updated_at
    $sql = "INSERT INTO users (user_name, user_email, user_password, user_address, user_phone_number, created_at, updated_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    try {
        // Siapkan statement
        $stmt = $conn->prepare($sql);
        // Bind parameter
        $stmt->bind_param("sssssss", $name, $email, $hashed_password, $address, $phone, $current_time, $current_time);
        // Eksekusi query
        $stmt->execute();

        // Redirect setelah sukses
        header("Location: ../user/signin.php?success=1");
        exit;
    } catch (Exception $e) {
        die("Terjadi kesalahan: " . $e->getMessage());
    }
}

$conn->close();
?>
