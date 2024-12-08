<?php
session_start();

// Koneksi ke database
require '../controller/config.php'; // Pastikan ini adalah file koneksi ke database

// Ambil OTP yang disimpan dalam sesi dan email pengguna
$OTP = isset($_SESSION['OTP']) ? $_SESSION['OTP'] : null;
$user_email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : null;

// Jika OTP atau email tidak ada, redirect kembali ke halaman reset password
if (!$OTP || !$user_email) {
    header('Location: ./reset-password.php');
    exit();
}

// Proses verifikasi kode OTP
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_code = $_POST['code'] ?? '';

    // Validasi OTP
    if ($user_code === $OTP) {
        // Jika kode OTP cocok, simpan OTP dan email ke tabel otp
        $sql = "INSERT INTO otp (user_email, code_otp) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $user_email, $OTP);  // Menyimpan user_email dan otp_code

        if ($stmt->execute()) {
            // Jika berhasil menyimpan OTP ke database, redirect ke new-password.php
            header('Location: new-password.php');
            exit();
        } else {
            // Jika terjadi error saat menyimpan
            echo "Error saving OTP to database: " . $stmt->error;
        }
    } else {
        // Jika OTP tidak cocok, tampilkan pesan error
        $error_message = "Kode OTP tidak valid. Silakan coba lagi.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Verification - Lestari</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .custom-shape {
            border-radius: 214px 0 0 214px; 
        }
    </style>
</head>
<body class="font-poppins">
    <div class="flex min-h-screen">
        <!-- Left Section -->
        <div class="w-full md:w-1/2 bg-white flex items-center justify-center px-8 md:px-16">
            <div class="w-full max-w-md">
                <!-- Logo -->
                <div class="text-center mb-6">
                    <img src="../images/Logo.png" alt="Lestari Logo" class="mx-auto">
                </div>

                <!-- Title -->
                <h1 class="text-2xl font-bold text-lg-start text-gray-800 mb-8">Code Verification <?= $OTP ?></h1>

                <!-- Error Message -->
                <?php if (isset($error_message) && $error_message): ?>
                    <div class="bg-red-500 text-white p-2 mb-4 rounded-md">
                        <?= $error_message ?>
                    </div>
                <?php endif; ?>

                <!-- Form -->
                <form action="code-verifikasi.php" method="POST" class="space-y-4">
                    <!-- code -->
                    <div>
                        <input type="text" id="code" name="code" placeholder="Enter Code"
                            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                    </div>
                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                                class="w-full mt-4 bg-black text-white py-2 rounded-lg shadow-md hover:bg-gray-800 transition">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Section -->
        <div class="hidden md:flex w-1/2 bg-gradient-to-b from-[#299E63] to-[#0F3823] items-center justify-center p-16 text-white custom-shape">
            <div class="text-lg-start">
                <h2 class="text-3xl font-bold mb-4">Be part of the solution, not the pollution</h2>
                <img src="../images/login.png" alt="Recycling Bins" class="mx-auto">
            </div>
        </div>
    </div>
</body>
</html>
