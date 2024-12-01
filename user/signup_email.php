<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sign Up - Lestari</title>
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
                <h1 class="text-2xl font-bold text-lg-start text-gray-800 mb-8">Sign Up to Lestari</h1>

                <!-- Form -->
                <form action="../BackEnd/signup_email.php" method="POST" class="space-y-4">
                <!-- Nama Lengkap -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="name" name="name" placeholder="Masukkan Nama Lengkap"
                            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                            value="<?php echo isset($_POST['user_name']) ? $_POST['user_name'] : ''; ?>">
                        </div>
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        
                         <!-- Menampilkan pesan error email -->
                         <?php if (isset($_SESSION['error_email'])): ?>
                            <div class="text-red-500 text-sm mt-2"><?php echo $_SESSION['error_email']; ?></div>
                            <?php unset($_SESSION['error_email']); // Hapus pesan error setelah ditampilkan ?>
                        <?php endif; ?>
                    </div>
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 flex justify-between">
                            Password
                        </label>
                        <input type="password" id="password" name="password" placeholder="Password"
                            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                            minlength="8" required>
                    </div>
                    <!-- Alamat -->
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <input type="text" id="address" name="address" placeholder="Masukkan Alamat Lengkap"
                            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <!-- Nomor HP -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                        <input type="text" id="phone" name="phone" placeholder="Contoh : +628976537899"
                            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        
                      <!-- Menampilkan pesan error nomor HP -->
                      <?php if (isset($_SESSION['error_phone'])): ?>
                            <div class="text-red-500 text-sm mt-2"><?php echo $_SESSION['error_phone']; ?></div>
                            <?php unset($_SESSION['error_phone']); // Hapus pesan error setelah ditampilkan ?>
                        <?php endif; ?>
                    </div>
                    <!-- Sign Up Button -->
                    <div>
                        <button type="submit"
                            class="w-full bg-black text-white py-2 rounded-lg shadow-md hover:bg-gray-800 transition">
                            Register
                        </button>
                    </div>
                </form>

                <!-- Sign Up -->
                <p class="mt-2 mb-6 text-center text-sm text-gray-600">
                Already have an account? <a href="./signin.php" class="text-indigo-600 hover:underline">Sign in</a>
                </p>
            </div>
        </div>

        <!-- Right Section -->
        <div class="hidden md:flex w-1/2 bg-gradient-to-b from-[#299E63] to-[#0F3823] items-center justify-center p-16 text-white custom-shape">
            <div class="text-lg-start">
                <h2 class="text-3xl font-bold mb-4">Be part of the solution, not the pollution</h2>
                <img src="../images/sampah.png" alt="Recycling Bins" class="mx-auto">
            </div>
        </div>
    </div>
</body>
</html>
