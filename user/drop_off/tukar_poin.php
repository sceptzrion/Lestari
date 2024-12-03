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
  function togglePopup() {
    const popup = document.getElementById("popupReward");
    popup.classList.toggle("hidden");
  }
</script>


</head>
<body class="font-poppins">
<!-- NAVBAR -->
<div class="navbar bg-light h-20 pr-10 justify-between sticky top-0 z-50">
   <!-- MOBILE SCREEN MODE -->
   <div class="navbar-start pl-1/2">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden" id="hamburger-btn">
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
            id="dropdown-menu"
            class="menu menu-sm dropdown-content bg-white rounded-box z-[1] mt-3 w-52 p-2 shadow hidden">
            <li><a href="../../landingpage.php">Home</a></li>
            <li><a href="../../user/tentang.php">Tentang kami</a></li>
            <li>
              <a>Layanan</a>
              <ul class="p-2">
                <!-- Drop Off -->
                <li>
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <button onclick="window.location.href='../../user/drop_off/dropoff.php'" >
                        <p>Drop Off</p>
                    </button>
                    <?php else: ?>
                    <button onclick="showModal()" >
                        <p>Drop Off</p>
                    </button>
                    <?php endif; ?>
                </li>
                 <!-- Rewards -->
                <li>
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <button onclick="window.location.href='../../user/drop_off/poin.php'" >
                        <p>Rewards</p>
                    </button>
                    <?php else: ?>
                    <button onclick="showModal()" >
                        <p>Rewards</p>
                    </button>
                    <?php endif; ?>
                </li>
               
                <!-- Marketplace -->
                <li>
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <button onclick="window.location.href='../../user/marketplace/marketplace.php'">
                        <p>Marketplace</p>
                    </button>
                    <?php else: ?>
                    <button onclick="showModal()" >
                        <p>Marketplace</p>
                    </button>
                    <?php endif; ?>
                </li>
                    </ul>
                </li>
            <li><a href="../../user/blog.php">Blog</a></li>
            <li><a href="../../user/kontak_kami.php">Kontak Kami</a></li>
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
    <li><a href="../../landingpage.php">Home</a></li>
    <li><a href="../../user/tentang.php">Tentang kami</a></li>
    <li>
      <details>
        <summary>Layanan</summary>
        <ul class="bg-light absolute left-1/2 transform -translate-x-1/2 rounded-[10px] border-[1px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border-gray px-[14px] py-[20px] flex flex-wrap items-center gap-3 min-w-[300px] max-w-[600px]">
          <!-- Drop Off -->
          <li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
              <button onclick="window.location.href='../../user/drop_off/dropoff.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="../../images/truck.png" class="w-8 h-8" alt="">
                <p>Drop Off</p>
              </button>
            <?php else: ?>
              <button onclick="showModal()" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="../../images/truck.png" class="w-8 h-8" alt="">
                <p>Drop Off</p>
              </button>
            <?php endif; ?>
          </li>
          <!-- Rewards -->
          <li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
              <button onclick="window.location.href='../../user/drop_off/poin.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="../../images/reward.png" class="w-8 h-8" alt="">
                <p>Rewards</p>
              </button>
            <?php else: ?>
              <button onclick="showModal()" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="../../images/reward.png" class="w-8 h-8" alt="">
                <p>Rewards</p>
              </button>
            <?php endif; ?>
          </li>
          
          <!-- Marketplace -->
          <li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
              <button onclick="window.location.href='../../user/marketplace/marketplace.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="../../images/marketplace.png" class="w-8 h-8" alt="">
                <p>Marketplace</p>
              </button>
            <?php else: ?>
              <button onclick="showModal()" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="../../images/marketplace.png" class="w-8 h-8" alt="">
                <p>Marketplace</p>
              </button>
            <?php endif; ?>
          </li>
        </ul>
      </details>
    </li>
    <li><a href="../../user/blog.php">Blog</a></li>
    <li><a href="../../user/kontak_kami.php">Kontak Kami</a></li>
  </ul>
</div>


<!-- Profile -->
<div class="navbar-end ml-[5px] flex items-center gap-x-0 md:gap-4">
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
                <a href="../../user/profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                <a href="../../backend/logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    <?php else: ?>
      <!-- Tombol Sign In dan Sign Up jika belum login -->
        <a href="../../user/signin.php" class="btn md:min-w-[100px] md:h-12 md:shadow-md md:rounded-full md:bg-gradient-to-r from-green to-dark-green md:text-sm md:border md:border-to-r md:from-green md:to-dark-green md:font-medium md:text-white md:text-center text-base bg-transparent text-sm text-[#1B5E20] border-0 shadow-none">
          Sign In
        </a>
        <a href="../../user/signup.php" class="btn btn-outline md:min-w-[100px] md:h-12 md:shadow-md md:border border-to-r from-green to-dark-green md:rounded-full md:text-sm md:font-medium md:text-[#1B5E20] md:text-center text-base bg-transparent text-sm text-[#1B5E20] border-0 shadow-none whitespace-nowrap">
          Sign Up
        </a>
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
    <!-- navbar -->
    <script>
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const dropdownMenu = document.getElementById('dropdown-menu');

        hamburgerBtn.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
  <!-- NAVBAR END -->

  <body class="bg-gray-100">
  <!-- Page Wrapper -->
  <div class="bg-light flex flex-col items-center py-10">
    <!-- Title -->
    <div class="text-3xl text-[#1B5E20] font-bold mb-12">
         Tukar Poin Reward
    </div>
      <!-- Wrapper for Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-screen-lg"> <!-- Mengubah grid untuk 2 kolom pada mobile -->
      
        <!-- Custom Reward Card 1 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden w-80 mb-10">
          <div class="relative">
            <div class="absolute top-0 left-0 bg-gradient-to-r from-green to-dark-green text-white p-4 rounded-br-lg flex items-start w-1/2">
              <div class="text-sm font-bold">
                <p>Poin</p>
                <p class="text-xs font-normal leading-snug">Tukarkan poin dengan<br>kantong plastik sampah roll</p>
              </div>
            </div>
            <img src="https://placehold.co/300x200" alt="Kantong plastik sampah" class="w-full h-40 object-cover">
          </div>
          <div class="p-4">
            <h3 class="text-gray-800 font-semibold text-lg text-center">
              Tukarkan poin dengan kantong plastik sampah roll
            </h3>
            <div class="flex items-center justify-between mt-4">
              <p class="text-green-900 font-bold">1000 Poin</p>
              <button onclick="togglePopup()" class="bg-gradient-to-r from-green to-dark-green text-white px-4 py-2 rounded-full hover:bg-green-700">
                Tukar
              </button>
            </div>
          </div>
        </div>

        <!-- Custom Reward Card 2 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden w-80 mb-10">
          <div class="relative">
            <div class="absolute top-0 left-0 bg-gradient-to-r from-green to-dark-green text-white p-4 rounded-br-lg flex items-start w-1/2">
              <div class="text-sm font-bold">
                <p>Poin</p>
                <p class="text-xs font-normal leading-snug">Tukarkan poin dengan<br>Voucher belanja</p>
              </div>
            </div>
            <img src="https://placehold.co/300x200" alt="Voucher belanja" class="w-full h-40 object-cover">
          </div>
          <div class="p-4">
            <h3 class="text-gray-800 font-semibold text-lg text-center">
              Tukarkan poin dengan voucher belanja
            </h3>
            <div class="flex items-center justify-between mt-4">
              <p class="text-green-900 font-bold">5000 Poin</p>
              <button class="bg-gradient-to-r from-green to-dark-green text-white px-4 py-2 rounded-full hover:bg-green-700">
                Tukar
              </button>
            </div>
          </div>
        </div>

        <!-- Custom Reward Card 3 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden w-80 mb-10">
          <div class="relative">
            <div class="absolute top-0 left-0 bg-gradient-to-r from-green to-dark-green text-white p-4 rounded-br-lg flex items-start w-1/2">
              <div class="text-sm font-bold">
                <p>Poin</p>
                <p class="text-xs font-normal leading-snug">Tukarkan poin dengan<br>Diskon produk eco</p>
              </div>
            </div>
            <img src="https://placehold.co/300x200" alt="Diskon produk eco" class="w-full h-40 object-cover">
          </div>
          <div class="p-4">
            <h3 class="text-gray-800 font-semibold text-lg text-center">
              Tukarkan poin dengan diskon produk eco
            </h3>
            <div class="flex items-center justify-between mt-4">
              <p class="text-green-900 font-bold">2000 Poin</p>
              <button class="bg-gradient-to-r from-green to-dark-green text-white px-4 py-2 rounded-full hover:bg-green-700">
                Tukar
              </button>
            </div>
          </div>
        </div>

        <!-- Custom Reward Card 4 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden w-80 mb-10">
          <div class="relative">
            <div class="absolute top-0 left-0 bg-gradient-to-r from-green to-dark-green text-white p-4 rounded-br-lg flex items-start w-1/2">
              <div class="text-sm font-bold">
                <p>Poin</p>
                <p class="text-xs font-normal leading-snug">Tukarkan poin dengan<br>Tas belanja ramah lingkungan</p>
              </div>
            </div>
            <img src="https://placehold.co/300x200" alt="Tas belanja" class="w-full h-40 object-cover">
          </div>
          <div class="p-4">
            <h3 class="text-gray-800 font-semibold text-lg text-center">
              Tukarkan poin dengan tas belanja ramah lingkungan
            </h3>
            <div class="flex items-center justify-between mt-4">
              <p class="text-green-900 font-bold">1500 Poin</p>
              <button class="bg-gradient-to-r from-green to-dark-green text-white px-4 py-2 rounded-full hover:bg-green-700">
                Tukar
              </button>
            </div>
          </div>
        </div>

        <!-- Custom Reward Card 5 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden w-80 mb-10">
          <div class="relative">
            <div class="absolute top-0 left-0 bg-gradient-to-r from-green to-dark-green text-white p-4 rounded-br-lg flex items-start w-1/2">
              <div class="text-sm font-bold">
                <p>Poin</p>
                <p class="text-xs font-normal leading-snug">Tukarkan poin dengan<br>Botol minum stainless</p>
              </div>
            </div>
            <img src="https://placehold.co/300x200" alt="Botol minum" class="w-full h-40 object-cover">
          </div>
          <div class="p-4">
            <h3 class="text-gray-800 font-semibold text-lg text-center">
              Tukarkan poin dengan botol minum stainless
            </h3>
            <div class="flex items-center justify-between mt-4">
              <p class="text-green-900 font-bold">3000 Poin</p>
              <button class="bg-gradient-to-r from-green to-dark-green text-white px-4 py-2 rounded-full hover:bg-green-700">
                Tukar
              </button>
            </div>
          </div>
        </div>

        <!-- Custom Reward Card 6 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden w-80 mb-10">
          <div class="relative">
            <div class="absolute top-0 left-0 bg-gradient-to-r from-green to-dark-green text-white p-4 rounded-br-lg flex items-start w-1/2">
              <div class="text-sm font-bold">
                <p>Poin</p>
                <p class="text-xs font-normal leading-snug">Tukarkan poin dengan<br>Lampu tenaga surya</p>
              </div>
            </div>
            <img src="https://placehold.co/300x200" alt="Lampu tenaga surya" class="w-full h-40 object-cover">
          </div>
          <div class="p-4">
            <h3 class="text-gray-800 font-semibold text-lg text-center">
              Tukarkan poin dengan lampu tenaga surya
            </h3>
            <div class="flex items-center justify-between mt-4">
              <p class="text-green-900 font-bold">8000 Poin</p>
              <button class="bg-gradient-to-r from-green to-dark-green text-white px-4 py-2 rounded-full hover:bg-green-700">
                Tukar
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>


<!-- pop up -->
<div id="popupReward" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-[700px]">
    <div class="flex items-center justify-center mb-4">
      <img src="https://placehold.co/300x150" alt="Reward Image" class="rounded-lg shadow-md" />
    </div>
    <h2 class="text-center text-2xl font-bold text-green-900 mb-4">Kantong Plastik Sampah Roll</h2>
    <p class="text-gray-700 text-center mb-6">
      Apakah Anda yakin ingin menukarkan point Anda dengan Kantong Plastik Sampah Roll? 
      Point akan langsung terpotong setelah konfirmasi.
    </p>
    <div class="flex justify-center gap-4">
      <button onclick="togglePopup()" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-400">
        Batalkan
      </button>
      <button class="bg-gradient-to-r from-green to-dark-green text-white px-4 py-2 rounded-md hover:bg-green-700">
        Ya, Tukar Sekarang
      </button>
    </div>
  </div>
</div>
<!-- Popup untuk Pesan Sukses -->
<div id="popupSuccess" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-[400px] text-center">
    <div class="flex justify-center mb-4">
      <!-- Tanda Checklist -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
      </svg>
    </div>
    <h2 class="text-xl font-bold text-green-900 mb-2">Berhasil!</h2>
    <p class="text-gray-700 mb-4">Point Anda berhasil ditukarkan.</p>
    <button onclick="closeSuccessPopup()" class="bg-gradient-to-r from-green to-dark-green text-white px-4 py-2 rounded-md hover:bg-green-700">
      Tutup
    </button>
  </div>
</div>

<script>
  // Fungsi untuk menampilkan popup sukses
  function showSuccessPopup() {
    const successPopup = document.getElementById("popupSuccess");
    successPopup.classList.remove("hidden");

    // Sembunyikan popup sukses secara otomatis setelah 3 detik
    setTimeout(() => {
      successPopup.classList.add("hidden");
    }, 3000);
  }

  // Fungsi untuk menutup popup sukses secara manual
  function closeSuccessPopup() {
    const successPopup = document.getElementById("popupSuccess");
    successPopup.classList.add("hidden");
  }

  // Modifikasi tombol "Ya, Tukar Sekarang" untuk menampilkan popup sukses
  document.querySelector('#popupReward button.bg-gradient-to-r').addEventListener('click', function () {
    // Sembunyikan popup konfirmasi
    togglePopup();
    // Tampilkan popup sukses
    showSuccessPopup();
  });
</script>

  
</body>
</html>
