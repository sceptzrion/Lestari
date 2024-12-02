<?php
session_start();  // Start session untuk memeriksa status login

// Halaman yang tidak memerlukan login (seperti landingpage.php)
if (basename($_SERVER['PHP_SELF']) != 'landingpage.php') {
    // Jika user belum login, arahkan ke halaman login atau lainnya
    if (!isset($_SESSION['loggedin'])) {
        header("Location: ../../landingpage.php");
        exit();  // Jangan lupa exit setelah redirect
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet">
    <title>Lestari - Drop Off</title>
      <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
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
    <script>
        function toggleModal() {
            const modal = document.getElementById("rewardModal");
            modal.classList.toggle("hidden");
        }
    </script>
</head>
<body class="font-poppins">
     <!-- NAVBAR -->
   <div class="navbar bg-light h-20 pr-10 justify-between sticky top-0 z-50">
   <!-- MOBILE SCREEN MODE -->
      <div class="navbar-start pl-[41px]">
        <div class="dropdown ">
          <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
          </div>
          <ul
            tabindex="0"
            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
            <li><a>Item 1</a></li>
            <li>
              <a>Parent</a>
              <ul class="p-2">
                <li><a>Submenu 1</a></li>
                <li><a>Submenu 2</a></li>
              </ul>
            </li>
            <li><a>Item 3</a></li>
          </ul>
        </div>
        <!-- BRAND LOGO -->
        <a href="." class="">
          <img src="../../images/Logo.png" alt="Logo Lestari">
        </a>
      </div>
<!-- DESKTOP MODE -->
<div class="navbar-center hidden lg:flex">
  <ul class="menu menu-horizontal px-1 text-dark text-base">
    <li><a href="./landingpage.php">Home</a></li>
    <li><a href="./user/tentang.php">Tentang kami</a></li>
    <li>
      <details>
        <summary>Layanan</summary>
        <ul class="bg-light absolute left-1/2 transform -translate-x-1/2 rounded-[10px] border-[1px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border-gray px-[14px] py-[20px] flex flex-wrap items-center gap-3 min-w-[300px] max-w-[600px]">
          <!-- Drop Off -->
          <li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
              <button onclick="window.location.href='./user/drop_off/dropoff.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="./images/truck.png" class="w-8 h-8" alt="">
                <p>Drop Off</p>
              </button>
            <?php else: ?>
              <button onclick="showModal()" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="./images/truck.png" class="w-8 h-8" alt="">
                <p>Drop Off</p>
              </button>
            <?php endif; ?>
          </li>
          <!-- Rewards -->
          <li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
              <button onclick="window.location.href='./user/drop_off/poin.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="./images/reward.png" class="w-8 h-8" alt="">
                <p>Rewards</p>
              </button>
            <?php else: ?>
              <button onclick="showModal()" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="./images/reward.png" class="w-8 h-8" alt="">
                <p>Rewards</p>
              </button>
            <?php endif; ?>
          </li>
          <!-- Tutorial -->
          <li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
              <button onclick="window.location.href='./user/tutorial/tutorial.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="./images/Vector.png" class="w-6 h-6" alt="">
                <p>Tutorial</p>
              </button>
            <?php else: ?>
              <button onclick="showModal()" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="./images/Vector.png" class="w-6 h-6" alt="">
                <p>Tutorial</p>
              </button>
            <?php endif; ?>
          </li>
          <!-- Marketplace -->
          <li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
              <button onclick="window.location.href='./marketplace.html'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="./images/marketplace.png" class="w-8 h-8" alt="">
                <p>Marketplace</p>
              </button>
            <?php else: ?>
              <button onclick="showModal()" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="./images/marketplace.png" class="w-8 h-8" alt="">
                <p>Marketplace</p>
              </button>
            <?php endif; ?>
          </li>
        </ul>
      </details>
    </li>
    <li><a href="#">Blog</a></li>
    <li><a href="./user/kontak_kami.php">Kontak Kami</a></li>
  </ul>
</div>


<!-- Profile -->
<div class="navbar-end ml-[5px] flex items-center gap-4">
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        <!-- Dropdown User -->
        <div class="relative">
            <button class="font-medium text-sm text-[#1B5E20] focus:outline-none" onclick="toggleDropdown()">
                Halo, <?= htmlspecialchars($_SESSION['user_name']); ?> 
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-md z-10">
                <a href="./user/profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                <a href="./backend/logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    <?php else: ?>
        <!-- Tombol Sign In dan Sign Up jika belum login -->
        <a href="./user/signin.php" class="btn min-w-[100px] h-1 shadow-md rounded-full bg-gradient-to-r from-green to-dark-green text-sm border border-to-r from-green to-dark-green font-medium text-white text-center">Sign In</a>
        <a href="./user/signup.php" class="btn btn-outline min-w-[100px] h-1 shadow-md border border-to-r from-green to-dark-green rounded-full text-sm font-medium text-[#1B5E20] text-center">Sign Up</a>
    <?php endif; ?>
</div>


<script>
    // Toggle dropdown visibility
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdownMenu');
        dropdown.classList.toggle('hidden');
    }

    // Close dropdown if clicked outside
    window.addEventListener('click', function(event) {
        const dropdown = document.getElementById('dropdownMenu');
        const button = event.target.closest('button');
        // Jika yang diklik bukan tombol atau dropdown, sembunyikan dropdown
        if (!button || button.getAttribute('onclick') !== 'toggleDropdown()') {
            dropdown.classList.add('hidden');
        }
    });
</script>
    </div>
  <!-- NAVBAR END -->

    <!-- Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="bg-white rounded-xl shadow-lg p-6 relative">
            <!-- Icon and Heading -->
            <div class="text-center">
                <img src="../../images/Logo admin.png" alt="Icon" class="mx-auto mb-4">
            </div>
            <!-- Date and Email -->
            <div class="flex justify-between items-center text-sm text-green-600 font-semibold">
                  <span>12 Nov 2024 · 15:32</span>
                  <span>ahmad@gmail.com</span>
            </div>
                <hr class="border-dashed border-green-600 my-4">

            <h2 class="text-lg font-semibold text-green-700 flex items-center justify-start">
                    <span class="text-green-500 material-icons mr-2"></span>
                    Penukaran Sampah
            </h2>
        
            <!-- Drop Off Details -->
            <div class="mt-6 space-y-4">
                <div>
                    <h3 class="text-green-700 font-semibold text-sm">DROP OFF - LESTARI</h3>
                    <div class="bg-gray-50 rounded-lg shadow p-4 flex justify-between items-center">
                        <span>Total Poin</span>
                        <span class="text-green-600 font-bold">$ 100</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-green-700 font-semibold text-sm">DETAIL DROP OFF</h3>
                    <div class="bg-gray-50 rounded-lg shadow p-4">
                        <span>Kertas 10kg</span>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="mt-8 text-center">
                <button onclick="toggleModal()" class="bg-gradient-to-r from-green to-dark-green text-white font-semibold rounded-full px-6 py-2 hover:bg-green-700">
                    Klaim Poin
                </button>
            </div>
        </div>
    </main>
     <!-- Modal -->
    <div id="rewardModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden">
     <div class="bg-white rounded-lg p-6 w-80 text-center relative">
      <div class="absolute top-2 right-2 cursor-pointer" onclick="toggleModal()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-gray-700" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </div>
      <div class="mb-4">
        <img src="../../images/user/selamat.png" alt="Reward Icon" class="mx-auto">
      </div>
      <p class="text-green-700 font-semibold mb-4">Kamu mendapatkan poin</p>
      <div class="bg-green-50 border border-green-500 rounded-lg p-4 flex justify-center items-center mb-4">
        <span class="text-green-600 font-bold text-2xl">+ 100</span>
      </div>
      <button onclick="window.location.href='../../user/drop_off/poin.php'" class="bg-gradient-to-r from-green to-dark-green text-white py-2 px-4 rounded-full shadow-lg hover:bg-green-600">
          Lihat Poin
      </button>

    </div>
  </div>
  <!-- Footer -->
  <footer class="bg-gradient-to-r from-green to-dark-green text-white py-7">
  <div class="container mx-auto px-4 text-center">
    <div class="flex justify-center">
      <a href="../../landingpage.php">
        <img src="../../images/Logo.png" alt="Logo Lestari" class="h-20">
      </a>
    </div>
    <div class="container mx-auto grid grid-cols-3 gap-4">
      <!-- Bagian Lestari -->
      <div class="text-left">
        <h4 class="font-bold">Lestari</h4>
        <a href="../../landingpage.php" class="block text-white hover:underline mb-1">Home</a>
        <a href="../../user/tentang.php" class="block text-white hover:underline mb-1">Tentang Kami</a>
        <a href="../../landingpage.php" class="block text-white hover:underline mb-1">Layanan</a>
        <a href="../../user/blog.php" class="block text-white hover:underline mb-1">Blog</a>
      </div>
      <!-- Bagian Informasi -->
      <div>
        <h4 class="font-bold">Informasi</h4>
        <a href="../kontak_kami.php" class="block text-white hover:underline mb-1">Kontak Kami</a>
      </div>
      <!-- Bagian Hubungi Kami -->
      <div>
        <h4 class="font-bold">Hubungi Kami</h4>
        <div class="flex justify-center space-x-4 mt-2">
          <a href="#"><img src="../../images/user/sosmed/instagram.png" alt="Instagram"></a>
          <a href="#"><img src="../../images/user/sosmed/fb.png" alt="Facebook"></a>
          <a href="#"><img src="../../images/user/sosmed/x.png" alt="Twitter"></a>
          <a href="#"><img src="../../images/user/sosmed/wa.png" alt="Whatsapp"></a>
          <a href="#"><img src="../../images/user/sosmed/yt.png" alt="YouTube"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
    
</body>
</html>
