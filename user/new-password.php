<?php
session_start();
require '../controller/config.php'; // pastikan ini adalah file untuk koneksi ke database

// Pastikan user sudah login dan session email tersedia
if (!isset($_SESSION['user_email'])) {
    header('Location: signin.php');
    exit();
}

$user_email = $_SESSION['user_email']; // Ambil email pengguna yang sedang login

// Proses form jika data dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newPassword = $_POST['new-password'] ?? '';
    $confirmPassword = $_POST['confirm'] ?? '';

    // Validasi password
    if (empty($newPassword) || empty($confirmPassword)) {
        echo "Both fields are required.";
        exit();
    }

    if ($newPassword !== $confirmPassword) {
        echo "Passwords do not match.";
        exit();
    }

    // Enkripsi password baru menggunakan bcrypt
    $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

    // Update password di database
    $sql = "UPDATE users SET user_password = ? WHERE user_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $hashedPassword, $user_email);

    if ($stmt->execute()) {
        // Password berhasil diperbarui
        echo "<script>
                alert('Your password has been changed successfully!');
                window.location.href = 'signin.php'; // Redirect ke login page
              </script>";
    } else {
        echo "Error updating password: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en"class="bg-light dark:[color-scheme:light]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password - Lestari</title>
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
                <h1 class="text-2xl font-bold text-lg-start text-gray-800 mb-8">Create New Password</h1>
                
                <!-- Form -->
                <form action="new-password.php" method="POST" class="space-y-4">
    <!-- New Password -->
    <div>
        <input type="password" id="new-password" name="new-password" placeholder="Create New Password"
            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
    </div>
    <!-- Confirm Password -->
    <div>
        <input type="password" id="confirm" name="confirm" placeholder="Confirm your password"
            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
    </div>
    <!-- Change Button -->
    <button type="submit" class="w-full mt-4 bg-black text-white py-2 rounded-lg shadow-md hover:bg-gray-800 transition">
        Change
    </button>
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

    <!-- JavaScript for Handling Change -->
    <script>
        document.getElementById('changeButton').addEventListener('click', function () {
            // Get input values
            const newPassword = document.getElementById('new-password').value;
            const confirmPassword = document.getElementById('confirm').value;

            // Validate inputs
            if (!newPassword || !confirmPassword) {
                alert('Both fields are required.');
                return;
            }

            if (newPassword !== confirmPassword) {
                alert('Passwords do not match.');
                return;
            }

            // Show success popup
            const popup = document.createElement('div');
            popup.style.position = 'fixed';
            popup.style.top = '0';
            popup.style.left = '0';
            popup.style.width = '100vw';
            popup.style.height = '100vh';
            popup.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
            popup.style.display = 'flex';
            popup.style.justifyContent = 'center';
            popup.style.alignItems = 'center';
            popup.style.zIndex = '1000';

            popup.innerHTML = `
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <h2 class="text-2xl font-bold mb-4 text-green-600">Success!</h2>
                    <p class="text-gray-700 mb-4">Your password has been changed successfully.</p>
                    <a href="./signin.php"
                       class="bg-black text-white px-4 py-2 rounded-lg shadow-md hover:bg-gray-800 transition">
                       Login Now
                    </a>
                </div>
            `;

            document.body.appendChild(popup);

            // Remove popup when clicking outside
            popup.addEventListener('click', function (event) {
                if (event.target === popup) {
                    document.body.removeChild(popup);
                }
            });
        });
    </script>
</body>
</html>
