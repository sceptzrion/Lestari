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
          <img src="../../images/Logo.png" alt="Logo Lestari">
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
        
  <main class="container mx-auto mt-8 px-4 pb-12">
  <div id="selected-location" class="text-2xl text-[#1B5E20] font-bold mb-3 flex items-center">
    <img src="../../images/user/Loc.png" alt="Location Icon" class="w-[31px] h-[44px] mr-2"> 
    Jakarta Pusat
  </div>
  <div class="bg-gradient-to-r from-green to-dark-green text-white rounded-lg p-6 text-center h-32 flex items-center">
    <div class="text-white text-center relative"> 
      <h2 class="text-3xl font-bold flex items-center">
        <img src="../../images/user/recycle.png" alt="Recycle Icon" class="w-12 h-12 mr-2">
        Drop Off Location
      </h2>
    </div>
  </div>
  <p class="text-sm text-[#1B5E20] mt-4">
    <span class="inline-block bg-gradient-to-r from-green to-dark-green text-white rounded-full px-3 py-1 text-sm">3 bank sampah tersedia</span>
  </p>

<!-- Locations -->
<div class="mt-4 space-y-4">
  <a href="../../user/drop_off/select_kota.php" class="block border rounded-lg p-4 hover:bg-gray-100">
    <h3 class="text-lg font-bold">Kemayoran</h3>
    <p class="text-sm text-gray-700">Lestari Kemayoran - Jl. Bank Sampah No.1</p>
  </a>

  <a href="https://example.com/cempaka-putih" class="block border rounded-lg p-4 hover:bg-gray-100">
    <h3 class="text-lg font-bold">Cempaka Putih</h3>
    <p class="text-sm text-gray-700">Lestari Cempaka Putih - Jl. Bank Sampah No.2</p>
  </a>

  <a href="https://example.com/gatot-subroto" class="block border rounded-lg p-4 mb-4 hover:bg-gray-100">
    <h3 class="text-lg font-bold">Gatot Subroto</h3>
    <p class="text-sm text-gray-700">Lestari Gatot Subroto - Jl. Bank Sampah No.3</p>
  </a>
</div>


</main>
