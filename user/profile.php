<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet">
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
            const modal = document.getElementById("location-modal");
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
          <img src="../images/Logo.png" alt="Logo Lestari">
        </a>
      </div>
<!-- DESKTOP MODE -->
<div class="navbar-center hidden lg:flex">
  <ul class="menu menu-horizontal px-1 text-dark text-base">
    <li><a>Home</a></li>
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
  <!-- Profile Section -->
  <main class="container mx-auto mt-8 px-4">
    <div class="bg-green-600 text-white rounded-lg p-6 text-center">
      <div class="flex justify-center">
        <img src="https://placehold.co/80x80" alt="User" class="h-20 w-20 rounded-full bg-white p-2">
      </div>
      <h2 class="text-2xl font-bold mt-4">Ahmad Sudrajat</h2>
      <p class="text-sm">Aktif</p>
    </div>

    <!-- Stats -->
    <div class="mt-6 grid grid-cols-3 gap-4">
      <div class="bg-white rounded-lg shadow p-4 text-center">
        <p class="text-lg font-bold text-green-600">75 Kg</p>
        <p class="text-sm text-gray-600">Total Sampah</p>
      </div>
      <div class="bg-white rounded-lg shadow p-4 text-center">
        <p class="text-lg font-bold text-green-600">250</p>
        <p class="text-sm text-gray-600">Point Reward</p>
      </div>
      <div class="bg-white rounded-lg shadow p-4 text-center">
        <p class="text-lg font-bold text-green-600">5</p>
        <p class="text-sm text-gray-600">Drop Off</p>
      </div>
    </div>

    <!-- Personal Information -->
    <div class="mt-8 bg-white rounded-lg shadow p-6">
      <h3 class="text-xl font-bold text-gray-800 mb-4">Informasi Pribadi</h3>
      <div class="space-y-4">
        <div>
          <label class="block text-gray-600 text-sm">Nama Lengkap</label>
          <input type="text" value="Ahmad Sudrajat" class="w-full border border-gray-300 rounded px-4 py-2" readonly>
        </div>
        <div>
          <label class="block text-gray-600 text-sm">Email</label>
          <input type="text" value="ahmad@gmail.com" class="w-full border border-gray-300 rounded px-4 py-2" readonly>
        </div>
        <div>
          <label class="block text-gray-600 text-sm">Nomor Telepon</label>
          <input type="text" value="0812345678" class="w-full border border-gray-300 rounded px-4 py-2" readonly>
        </div>
        <div>
          <label class="block text-gray-600 text-sm">Alamat</label>
          <input type="text" value="JL. Sudirman No. 123, Jakarta Pusat" class="w-full border border-gray-300 rounded px-4 py-2" readonly>
        </div>
        <div>
          <label class="block text-gray-600 text-sm">Bergabung Sejak</label>
          <input type="text" value="Januari 2024" class="w-full border border-gray-300 rounded px-4 py-2" readonly>
        </div>
      </div>
      <div class="flex justify-between mt-6">
        <button class="bg-gray-300 text-gray-800 px-4 py-2 rounded">Logout</button>
        <button class="bg-green-600 text-white px-4 py-2 rounded">Pengaturan</button>
      </div>
    </div>
  </main>

  <!-- Footer -->
<footer class="bg-gradient-to-r from-green to-dark-green text-white py-5">
    <div class="container mx-auto px-4 text-center">
      <div class="flex justify-center">
        <a href="./landingpage.php">
          <img src="../../images/Logo.png" alt="Logo Lestari" class="h-20">
        </a>
      </div>
      <div class="container mx-auto grid grid-cols-3 gap-4 text-center">
      <div>
        <h4 class="font-bold">Lestari</h4>
        <p>Home</p>
        <p>Tentang Kami</p>
        <p>Layanan</p>
        <p>Blog</p>
      </div>
      <div>
        <h4 class="font-bold">Informasi</h4>
        <p>Kontak Kami</p>
      </div>
      <div>
        <h4 class="font-bold">Hubungi Kami</h4>
        <div class="flex justify-center space-x-4 mt-2">
          <a href="#"><img src="https://placehold.co/20x20" alt="Instagram"></a>
          <a href="#"><img src="https://placehold.co/20x20" alt="Facebook"></a>
          <a href="#"><img src="https://placehold.co/20x20" alt="Twitter"></a>
          <a href="#"><img src="https://placehold.co/20x20" alt="YouTube"></a>
        </div>
      </div>
    </div>
    </div>
  </footer>
    
</body>
</html>
