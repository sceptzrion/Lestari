<!DOCTYPE html>
<html lang="en">

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
                <form id="changeForm" class="space-y-4">
                    <!-- New Password -->
                    <div>
                        <input type="password" id="newpw" name="newpw" placeholder="Create New Password"
                            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <!-- Confirm Password -->
                    <div>
                        <input type="password" id="confirm" name="confirm" placeholder="Confirm your password"
                            class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <!-- Change Button -->
                    <button type="button" id="changeButton"
                            class="w-full mt-4 bg-black text-white py-2 rounded-lg shadow-md hover:bg-gray-800 transition">
                        Change
                    </button>
                </form>
            </div>
        </div>

        <!-- Right Section -->
        <div class="hidden md:flex w-1/2 bg-gradient-to-b from-[#299E63] to-[#0F3823] items-center justify-center p-16 text-white custom-shape">
            <div class="text-lg-start">
                <h2 class="text-3xl font-bold mb-4">Be part of the solution, not the pollution</h2>
                <img src="https://via.placeholder.com/300x150" alt="Recycling Bins" class="mx-auto">
            </div>
        </div>
    </div>

    <!-- JavaScript for Handling Change -->
    <script>
        document.getElementById('changeButton').addEventListener('click', function () {
            // Get input values
            const newPassword = document.getElementById('newpw').value;
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
