<?php
session_start();

if (!in_array(basename($_SERVER['PHP_SELF']), ['landingpage.php', 'tentang.php', 'blog.php'])) {
  if (!isset($_SESSION['loggedin'])) {
      header("Location: landingpage.php");
      exit();
  }
}

?>

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
  <li><a href="../landingpage.php">Home</a></li>
  <li><a href="./tentang.php">Tentang kami</a></li>
    <li>
      <details>
        <summary>Layanan</summary>
        <ul class="bg-light absolute left-1/2 transform -translate-x-1/2 rounded-[10px] border-[1px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border-gray px-[14px] py-[20px] flex flex-wrap items-center gap-3 min-w-[300px] max-w-[600px]">
          <li>
            <button onclick="window.location.href='.././user/drop_off/dropoff.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="../images/truck.png" class="w-8 h-8" alt="">
              <p>Drop Off</p>
            </button>
          </li>
          <li>
            <button onclick="window.location.href='.././user/drop_off/poin.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="../images/reward.png" class="w-8 h-8" alt="">
              <p>Rewards</p>
            </button>
          </li>
          <li>
            <button onclick="window.location.href='.././user/tutorial/tutorial.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="../images/Vector.png" class="w-6 h-6" alt="">
              <p>Tutorial</p>
            </button>
          </li>
          <li>
            <button onclick="window.location.href='./marketplace.html'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="../images/marketplace.png" class="w-8 h-8" alt="">
              <p>Marketplace</p>
            </button>
          </li>
        </ul>
      </details>
    </li>
    <li><a href=".././user/blog.php">Blog</a></li>
    <li><a href=".././user/kontak_kami.php">Kontak Kami</a></li>
  </ul>
</div>

<div class="navbar-end ml-[5px] flex items-center gap-4">
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        <!-- Jika login -->
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
        <!-- Jika belum login -->
        <a href="./user/signin.php" class="btn min-w-[100px] h-1 shadow-md rounded-full bg-gradient-to-r from-green to-dark-green text-sm border border-to-r from-green to-dark-green font-medium text-white text-center">Sign In</a>
        <a href="./user/signup.php" class="btn btn-outline min-w-[100px] h-1 shadow-md border border-to-r from-green to-dark-green rounded-full text-sm font-medium text-[#1B5E20] text-center">Sign Up</a>
    <?php endif; ?>
</div>

    </div>
    <script>
  function toggleDropdown() {
    const dropdownMenu = document.getElementById('dropdownMenu');
    dropdownMenu.classList.toggle('hidden');
}

</script>
  <!-- NAVBAR END -->
  <!-- About Section -->
   <!-- left section -->
  <section class="bg-white py-10">
    <div class="container mx-auto px-24">
      <div class="flex flex-col md:flex-row items-center">
        <div class="w-full">
          <h2 class="text-3xl text-[#1B5E20] font-bold mb-4 text-center">Tentang LESTARI</h2>
          <p class="text-black mb-8 text-center">
          LESTARI adalah platform inovatif yang berkomitmen untuk menciptakan Indonesia yang lebih bersih dan berkelanjutan melalui pengelolaan sampah yang bertanggung jawab.</p>
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 pr-1/2 md:transform md:-translate-x-9">
              <h2 class="text-2xl text-[#1B5E20] font-bold mb-3">Mengapa LESTARI ?</h2>
              <div>
                <p class="text-black mb-4 text-justify">
                LESTARI hadir sebagai solusi inovatif untuk mengatasi permasalahan sampah di Indonesia. Kami menggabungkan teknologi modern dengan kesadaran lingkungan untuk menciptakan ekosistem daur ulang yang efektif dan berkelanjutan.
                </p>
                <p class="text-black mb-4 text-justify">
                Kami akan membangun jaringan bank sampah yang luas dan mengembangkan sistem reward yang memotivasi masyarakat untuk berpartisipasi dalam program daur ulang. Melalui platform kami, setiap orang dapat dengan mudah berkontribusi pada pelestarian lingkungan.
                </p>
                <p class="text-black mb-6 text-justify">
                Bersama LESTARI, mari kita wujudkan Indonesia yang lebih bersih dan berkelanjutan untuk generasi mendatang.
                </p>
              </div>
            </div>
           <!-- Right Section -->
          <div class="w-full md:w-1/2 relative flex justify-end items-center">
            <!-- Kotak Hijau -->
            <div class="bg-gradient-to-r from-green to-dark-green rounded-lg shadow-md p-8 relative">
              <!-- Gambar -->
              <img src="../images/user/people.png" alt="People Image" class="relative z-10 max-w-full">
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- Card Section -->
<section class="py-16 bg-gray-100">
  <div class="container mx-auto px-12">
    <div class="text-black grid md:grid-cols-3 gap-6">
      <!-- Visi Kami -->
      <div class="bg-white p-6 rounded-lg drop-shadow-xl">
        <div class="w-12 h-12 bg-[#E8F5E9] rounded-full flex items-center justify-center mb-3">
          <img src="../images/user/Checkmark.png" class="w-7" alt="">
        </div>
        <h5 class="text-l text-[#1B5E20] font-bold mb-2">Visi Kami</h5>
        <p>Menjadi pionir dalam revolusi pengelolaan sampah di Indonesia dengan menghadirkan solusi yang inovatif dan berkelanjutan.</p>
      </div>
      <!-- Misi -->
      <div class="bg-white p-6 rounded-lg drop-shadow-xl">
        <div class="w-12 h-12 bg-[#E8F5E9] rounded-full flex items-center justify-center mb-3">
          <img src="../images/user/Goal.png" class="w-7" alt="">
        </div>
        <h5 class="text-l text-[#1B5E20] font-bold mb-2">Misi Kami</h5>
          <p>Memberdayakan masyarakat untuk berpartisipasi aktif dalam daur ulang dan memberikan nilai tambah pada sampah yang dapat didaur ulang.</p>      
          </div>
      <!-- Tim -->
      <div class="bg-white p-6 rounded-lg drop-shadow-xl">
        <div class="w-12 h-12 bg-[#E8F5E9] rounded-full flex items-center justify-center mb-3">
          <img src="../images/user/Management.png" class="w-7" alt="">
        </div>
        <h5 class="text-l text-[#1B5E20] font-bold mb-2">Tim Kami</h5>
        <p>Menjadi pionir dalam revolusi pengelolaan sampah di Indonesia dengan menghadirkan solusi yang inovatif dan berkelanjutan.</p>
      </div>
    </div>
  </div>
</section>

<!-- card green -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-12">
    <div class="mb-6">
    <div class="bg-[#E8F5E9] text-white p-10 rounded-lg shadow-md flex justify-between">
      <div class=" text-center">
        <h5 class="text-[#1B5E20] font-bold text-2xl">2jt Kg+</h5>
          <p class="text-black">Sampah di Daur Ulang</p>
            </div>
              <div class="text-center">
                <h5 class="text-[#1B5E20] font-bold text-2xl">15rb+</h5>
                  <p class="text-black">Pengguna</p>
              </div>
              <div class="text-center">
                <h5 class="text-[#1B5E20] font-bold text-2xl">500+</h5>
                  <p class="text-black">Mitra Bank Sampah</p>
              </div>
            </div>
          </div>
        </section>
  
<!-- modal  -->
<div id="loginModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg text-center max-w-sm">
        <h2 class="text-lg font-bold text-gray-800 mb-4">Yuk Login dulu</h2>
        <p class="text-gray-600 mb-6">Silakan login terlebih dahulu untuk mengakses layanan ini.</p>
        <div class="flex justify-center gap-4">
            <button onclick="closeModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Batal</button>
            <a href="./user/signin.php" class="px-4 py-2 bg-gradient-to-r from-green to-dark-green text-white rounded-lg hover:bg-green-700">Login</a>
        </div>
    </div>
</div>

  <!-- Footer -->
<footer class="bg-gradient-to-r from-green to-dark-green text-white py-7">
  <div class="container mx-auto px-12 text-center">
    <div class="flex justify-center">
      <a href="../landingpage.php">
        <img src="../images/Logo.png" alt="Logo Lestari" class="h-20">
      </a>
    </div>
    <div class="container mx-auto grid grid-cols-3 gap-4">
      <!-- Bagian Lestari -->
      <div class="text-left">
        <h4 class="font-bold">Lestari</h4>
        <a href="../landingpage.php" class="block text-white hover:underline mb-1">Home</a>
        <a href="../user/tentang.php" class="block text-white hover:underline mb-1">Tentang Kami</a>
        <a href="../landingpage.php" class="block text-white hover:underline mb-1">Layanan</a>
        <a href="../user/blog.php" class="block text-white hover:underline mb-1">Blog</a>
      </div>
      <!-- Bagian Informasi -->
      <div>
        <h4 class="font-bold">Informasi</h4>
        <a href="../user/kontak_kami.php" class="block text-white hover:underline mb-1">Kontak Kami</a>
      </div>
      <!-- Bagian Hubungi Kami -->
      <div>
        <h4 class="font-bold">Hubungi Kami</h4>
        <div class="flex justify-center space-x-4 mt-2">
          <a href="#"><img src="../images/user/sosmed/instagram.png" alt="Instagram"></a>
          <a href="#"><img src="../images/user/sosmed/fb.png" alt="Facebook"></a>
          <a href="#"><img src="../images/user/sosmed/x.png" alt="Twitter"></a>
          <a href="#"><img src="../images/user/sosmed/wa.png" alt="Whatsapp"></a>
          <a href="#"><img src="../images/user/sosmed/yt.png" alt="YouTube"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<script>
    // Notifikasi jika belum login
    function alertLogin() {
        alert("Silakan login untuk mengakses layanan ini.");
    }
    //modal
    function showModal() {
    document.getElementById('loginModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('loginModal').classList.add('hidden');
    }

</script>
</body>
</html>