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

  <!-- section -->
<section class="bg-gray-100 w-full min-h-screen">
  <main class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-4">
      <span class="inline-flex justify-between w-2/4 bg-gradient-to-r from-green to-dark-green text-white rounded-full px-4 py-2 text-sm">
        <span class="font-bold">Poin Reward</span>
        <span class="font-bold">$100</span>
      </span>
      <a href="../../user/tukar_poin.php">
        <button class="bg-gradient-to-r from-green to-dark-green text-white px-6 py-2 rounded-full shadow hover:bg-green-600 focus:outline-none flex items-center gap-2">
          Tukar Poin
        </button>
      </a>
    </div>
   <!-- Riwayat Drop Off -->
  <div class="bg-white rounded-lg shadow-lg p-6">
      <h1 class="text-2xl font-bold text-green-700 text-center mb-4">Riwayat Drop Off</h1>
      <div class="space-y-4">
        <!-- Reward Items -->
        <div class="flex justify-between items-center bg-gray-100 rounded-lg p-4 shadow">
          <div class="flex items-center space-x-4">
          <div class="w-12 h-12 bg-[#1B5E20] rounded-full flex items-center justify-center mb-3">
          <img src="../../images/user/recycle.png" class="w-7" alt="Recycle Icon">
        </div>
        <div>
              <h2 class="font-bold text-[#1B5E20]">Reward Drop Off</h2>
              <p class="text-sm text-gray-500">15 Nov 2024, 12:56</p>
            </div>
          </div>
          <span class="text-xl font-bold text-green-700">$100</span>
        </div>
        <div class="flex justify-between items-center bg-gray-100 rounded-lg p-4 shadow">
          <div class="flex items-center space-x-4">
          <div class="w-12 h-12 bg-[#1B5E20] rounded-full flex items-center justify-center mb-3">
          <img src="../../images/user/recycle.png" class="w-7" alt="Recycle Icon">
        </div>
        <div>
              <h2 class="font-bold text-[#1B5E20]">Reward Drop Off</h2>
              <p class="text-sm text-gray-500">15 Nov 2024, 12:56</p>
            </div>
          </div>
          <span class="text-xl font-bold text-green-700">$200</span>
        </div>
        <!-- Add more reward items as needed -->
      </div>
    </div>
  </main>
  </section>