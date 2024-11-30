<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet">
    <title>Lestari - Tutorial</title>
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
  <li><a href="../../landingpage.php">Home</a></li>
  <li><a href="../../user/tentang.php">Tentang kami</a></li>
    <li>
      <details>
        <summary>Layanan</summary>
        <ul class="bg-light absolute left-1/2 transform -translate-x-1/2 rounded-[10px] border-[1px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border-gray px-[14px] py-[20px] flex flex-wrap items-center gap-3 min-w-[300px] max-w-[600px]">
          <li>
            <button onclick="window.location.href='../../user/drop_off/dropoff.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="../../images/truck.png" class="w-8 h-8" alt="">
              <p>Drop Off</p>
            </button>
          </li>
          <li>
            <button onclick="window.location.href='../../user/drop_off/poin.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
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
    <li><a href="../../user/kontak_kami.php">Kontak Kami</a></li>
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

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-green to-dark-green text-white p-8 rounded-b-lg shadow-md">
    <div class="container mx-auto flex items-center space-x-6">
      <div class="flex-none">
        <div class="bg-white p-4 rounded-full">
          <img src="../../images/user/video.png" alt="Video Icon" class="w-16 h-16">
        </div>
      </div>
      <div>
        <h2 class="text-2xl font-bold">Tutorial</h2>
        <p class="text-lg">Pelajari cara mudah mengubah limbah jadi barang bernilai dan dukung gaya hidup ramah lingkungan</p>
      </div>
    </div>
  </section>

  <!-- Video Tutorials Section -->
  <section class="container mx-auto mt-6 px-4">
    <div class="bg-white shadow-lg rounded-lg">
      <!-- Dropdown Header -->
      <div class="flex items-center justify-between p-4 bg-gray-100 border-b cursor-pointer" onclick="toggleDropdown()">
        <h3 class="text-lg font-bold text-green-900 flex items-center space-x-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="w-5 h-5">
            <path d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
          </svg>
          <span>Video Tutorial</span>
        </h3>
        <svg id="dropdown-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-600 transition-transform transform rotate-0">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6"/>
        </svg>
      </div>

      <!-- Dropdown Content -->
      <div id="dropdown-content" class="overflow-hidden transition-max-height duration-300 max-h-0">
        <div class="divide-y">
          <!-- Tutorial Item -->
          <div class="flex justify-between items-center p-4 hover:bg-gray-50">
            <h4 class="text-lg font-semibold text-gray-800">Plastik</h4>
            <a href="#" class="text-white bg-gradient-to-r from-green to-dark-green px-4 py-2 rounded-lg flex items-center space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                <path d="M10.804 8.493l-3.86 2.223c-.456.262-1.05-.057-1.05-.592V5.876c0-.535.594-.854 1.05-.592l3.86 2.222c.457.263.457.921 0 1.184z"/>
              </svg>
              <span>Watch</span>
            </a>
          </div>
          <!-- Add more items -->
          <div class="flex justify-between items-center p-4 hover:bg-gray-50">
            <h4 class="text-lg font-semibold text-gray-800">Kertas</h4>
            <a href="#" class="text-white bg-gradient-to-r from-green to-dark-green px-4 py-2 rounded-lg flex items-center space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                <path d="M10.804 8.493l-3.86 2.223c-.456.262-1.05-.057-1.05-.592V5.876c0-.535.594-.854 1.05-.592l3.86 2.222c.457.263.457.921 0 1.184z"/>
              </svg>
              <span>Watch</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function toggleDropdown() {
      const content = document.getElementById('dropdown-content');
      const icon = document.getElementById('dropdown-icon');

      if (content.style.maxHeight) {
        content.style.maxHeight = null;
        icon.classList.remove('rotate-180');
      } else {
        content.style.maxHeight = content.scrollHeight + 'px';
        icon.classList.add('rotate-180');
      }
    }
  </script>
  
</body>
</html>
