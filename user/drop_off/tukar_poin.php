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
  <li><a href="../../landingpage.php">Home</a></li>
  <li><a href="./user/tentang.php">Tentang kami</a></li>
    <li>
      <details>
        <summary>Layanan</summary>
        <ul class="bg-light absolute left-1/2 transform -translate-x-1/2 rounded-[10px] border-[1px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border-gray px-[14px] py-[20px] flex flex-wrap items-center gap-3 min-w-[300px] max-w-[600px]">
          <li>
            <button onclick="window.location.href='./user/drop_off/dropoff.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="../../images/truck.png" class="w-8 h-8" alt="">
              <p>Drop Off</p>
            </button>
          </li>
          <li>
            <button onclick="window.location.href='./rewards.html'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="../../images/reward.png" class="w-8 h-8" alt="">
              <p>Rewards</p>
            </button>
          </li>
          <li>
            <button onclick="window.location.href='./tutorial.html'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="../../images/Vector.png" class="w-6 h-6" alt="">
              <p>Tutorial</p>
            </button>
          </li>
          <li>
            <button onclick="window.location.href='./marketplace.html'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="../../images/marketplace.png" class="w-8 h-8" alt="">
              <p>Marketplace</p>
            </button>
          </li>
        </ul>
      </details>
    </li>
    <li><a>Blog</a></li>
    <li><a>Kontak Kami</a></li>
  </ul>
</div>

        <!-- if user not login -->
        <!-- <div class="navbar-end ml-[5px] flex flex-row gap-4 w-auto">
          <a href="./user/signin.php" class="btn min-w-[100px] h-1 shadow-md rounded-full bg-gradient-to-r from-green to-dark-green text-sm border border-to-r from-green to-dark-green font-medium text-white text-center">Sign In</a>
          <a href="./user/signup.php" class="btn btn-outline min-w-[100px] h-1 shadow-md border border-to-r from-green to-dark-green rounded-full text-sm font-medium text-[#1B5E20] text-center">Sign Up</a>
        </div> -->
        <!-- endif -->

        <!-- if user login -->
        <div class="ml-[233px] content-center">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="w-[50px] rounded-full">
              <img
                alt="Tailwind CSS Navbar component"
                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
            </div>
          </div>
        </div>
        <!-- endif -->
    </div>
  <!-- NAVBAR END -->
   
<body class="bg-gray-100">
  <!-- Page Wrapper -->
  <div class="flex flex-col items-center py-10">
    <!-- Title -->
    <div class="text-3xl text-[#1B5E20] font-bold mb-12">
         Tukar Poin Reward
    </div>


      <!-- Wrapper for Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-screen-lg"> 
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
