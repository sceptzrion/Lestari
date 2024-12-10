<?php
// Proses logika backend
session_start();

$error_message = ''; // Inisialisasi error message

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil email dari form
    $email = $_POST['email'];  // Sesuaikan dengan name attribute di form

    // Koneksi ke database
    try {
        $db = new PDO('mysql:host=localhost;dbname=db_sampah_4', 'root', ''); // Ganti dengan kredensial yang benar
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Query untuk memeriksa apakah email terdaftar
        $stmt = $db->prepare("SELECT * FROM users WHERE user_email = :user_email");
        $stmt->execute(['user_email' => $email]);
        
        // Jika email tidak ditemukan
        if ($stmt->rowCount() === 0) {
            $error_message = "Email tidak terdaftar. Silakan coba lagi."; // Set error message
        } else {
            // Generate OTP
            $OTP = generateNumericOTP(6); // Panggil fungsi untuk generate OTP

            // Simpan OTP di session agar bisa digunakan di halaman berikutnya
            $_SESSION['OTP'] = $OTP;
            $_SESSION['user_email'] = $email; // Simpan email pengguna untuk referensi

            // Redirect ke halaman verifikasi setelah OTP dibuat
            header('Location: ./code-verifikasi.php');
            exit();
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

// Fungsi untuk generate OTP
function generateNumericOTP($n) {
    $generator = "1357902468";
    $result = "";
    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand() % strlen($generator)), 1);
    }
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en" class="bg-light dark:[color-scheme:light]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Lestari</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
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
                <h1 class="text-2xl font-bold text-lg-start text-gray-800 mb-8">Reset Password</h1>
                
                <!-- Error Message -->
                <?php if (!empty($error_message)): ?>
                    <div class="bg-red-500 text-white p-2 mb-4 rounded-md">
                        <?= $error_message ?>
                    </div>
                <?php endif; ?>

                <!-- Form -->
                <form action="reset-password.php" method="POST" class="space-y-4">
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <!-- Sign In Button -->
                    <div>
                        <button type="submit"
                                class="w-full mt-4 bg-black text-white py-2 rounded-lg shadow-md hover:bg-gray-800 transition">
                            Reset Password
                        </button>
                    </div>
                    <a href="./signin.php" 
                        class="w-full mt-4 bg-gray-600 text-white py-2 rounded-lg shadow-md hover:bg-gray-800 transition text-center block">
                        Back to Sign in
                    </a>
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
