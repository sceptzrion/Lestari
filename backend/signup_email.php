<?php
// Sertakan file koneksi database
require '../controller/config.php';

$error_email = '';  // Variabel untuk pesan error email
$error_phone = '';  // Variabel untuk pesan error nomor HP

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

    // Validasi password minimal 8 karakter
    if (strlen($password) < 8) {
        die("Password harus memiliki panjang minimal 8 karakter!");
    }

    // Cek apakah email sudah terdaftar
    $sql_email = "SELECT * FROM users WHERE user_email = ?";
    $stmt_email = $conn->prepare($sql_email);
    $stmt_email->bind_param("s", $email);
    $stmt_email->execute();
    $result_email = $stmt_email->get_result();

    // Cek apakah nomor HP sudah terdaftar
    $sql_phone = "SELECT * FROM users WHERE user_phone_number = ?";
    $stmt_phone = $conn->prepare($sql_phone);
    $stmt_phone->bind_param("s", $phone);
    $stmt_phone->execute();
    $result_phone = $stmt_phone->get_result();

    if ($result_email->num_rows > 0) {
        // Set pesan error untuk email
        $error_email = 'Email sudah terdaftar!';
    }

    if ($result_phone->num_rows > 0) {
        // Set pesan error untuk nomor HP
        $error_phone = 'Nomor HP sudah terdaftar!';
    }

    // Jika tidak ada error, simpan data ke database
    if (empty($error_email) && empty($error_phone)) {
        // Hash password untuk keamanan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Ambil waktu saat ini untuk created_at dan updated_at
        $current_time = date("Y-m-d H:i:s");

        // Query untuk menyimpan data ke database
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
}

$conn->close();
?>
