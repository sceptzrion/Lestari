<!DOCTYPE html>
<html lang="en"class="bg-light dark:[color-scheme:light]">

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

                <!-- Google Sign Up -->
                <button class="flex items-center justify-center w-full border border-gray-00 py-2 rounded-[20px] shadow-sm hover:bg-gray-200 transition mb-4">
                    <img src="../images/user/sosmed/google.png" alt="Google Logo" class="mr-2">
                    <span class="text-sm font-medium text-gray-700">Sign Up with Google</span>
                </button>
                <div class="flex items-center mb-4 justify-center">
                    <hr class="w-1/4 border-gray-300">
                    <span class="mx-2 text-gray-500 text-sm">Or</span>
                    <hr class="w-1/4 border-gray-300">
                </div>
                
                <!-- Email Sign Up -->
                <a href="./signup_email.php" class="flex items-center justify-center w-full border border-gray-00 py-2 rounded-[20px] shadow-sm hover:bg-gray-200 transition mb-6">
                    <span class="text-sm font-medium text-gray-700">Continue with email</span>
                </a>


                <p class="mt-2 mb-6 text-center text-sm text-gray-600">
                    By creating an account you agree with our 
                    <a href="#" class="text-indigo-600 hover:underline">Terms of Service</a>, 
                    <a href="#" class="text-indigo-600 hover:underline">Privacy Policy</a>, 
                    and our default 
                    <a href="#" class="text-indigo-600 hover:underline">Notification Settings</a>.
                </p>

                 <!-- Term -->
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
