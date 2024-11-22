<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Lestari</title>
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
                <h1 class="text-2xl font-bold text-lg-start text-gray-800 mb-8">Sign In to Lestari</h1>

                <!-- Google Sign In -->
                <button class="flex items-center justify-center w-full border border-gray-00 py-2 rounded-[20px] shadow-sm hover:bg-gray-200 transition mb-4">
                    <img src="https://via.placeholder.com/20" alt="Google Logo" class="mr-2">
                    <span class="text-sm font-medium text-gray-700">Sign In with Google</span>
                </button>
                <div class="flex items-center mb-4 justify-center">
                    <hr class="w-1/4 border-gray-300">
                    <span class="mx-2 text-gray-500 text-sm">Or sign in with email</span>
                    <hr class="w-1/4 border-gray-300">
                </div>

                <!-- Form -->
                <form action="#" method="POST" class="space-y-4">
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 flex justify-between">
                            Password
                        </label>
                        <input type="password" id="password" name="password" placeholder="Password"
                            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <a href="#" class="block mt-2 text-sm text-indigo-600 hover:underline">Forgot password?</a>
                    </div>

                    <!-- Sign In Button -->
                    <div>
                        <button type="submit"
                            class="w-full mt-4 bg-black text-white py-2 rounded-lg shadow-md hover:bg-gray-800 transition">
                            Sign In
                        </button>
                    </div>
                </form>

                <!-- Sign In -->
                <p class="mt-2 mb-6 text-center text-sm text-gray-600">
                Dont have an account? <a href="./signup.php" class="text-indigo-600 hover:underline">Sign up</a>
                </p>
            </div>
        </div>

        <!-- Right Section -->
        <div class="hidden md:flex w-1/2 bg-gradient-to-b from-green-500 to-green-700 items-center justify-center p-16 text-white custom-shape">
            <div class="text-lg-start">
                <h2 class="text-3xl font-bold mb-4">Be part of the solution, not the pollution</h2>
                <img src="https://via.placeholder.com/300x150" alt="Recycling Bins" class="mx-auto">
            </div>
        </div>
    </div>
</body>
</html>
