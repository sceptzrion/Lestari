<?php
session_start();  // Start session untuk memeriksa status login

// Halaman yang tidak memerlukan login (seperti landingpage.php)
if (basename($_SERVER['PHP_SELF']) != 'landingpage.php') {
    // Jika user belum login, arahkan ke halaman login atau lainnya
    if (!isset($_SESSION['loggedin'])) {
        header("Location: landingpage.php");
        exit();  // Jangan lupa exit setelah redirect
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./css/styles.css" rel="stylesheet">
  <title>Landing Page - Lestari</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <!-- Tailwind CSS -->
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
          <img src="./images/Logo.png" alt="Logo Lestari">
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

  <!-- Hero Section -->
<section class="bg-gradient-to-r from-green to-dark-green text-white py-16">
  <div class="container mx-auto px-4 flex flex-col md:flex-row items-center md:justify-between">
    <div class="md:w-1/2 text-center md:text-left mb-8 md:mb-0">
      <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
        Tukarkan Sampah, Dapatkan Hadiahnya
      </h1>
      <p class="text-lg md:text-xl">
        #TukarSampahUntukKebaikan
      </p>
    </div>
    <div class="md:w-1/2 flex justify-end">
      <img 
        src="./images/hero banner.png" 
        alt="Hero Image" 
        class="rounded-lg shadow-lg max-w-full h-auto object-cover md:ml-auto"
      />
    </div>
  </div>
</section>



<!-- about section -->
<section class="bg-white py-16">
  <div class="container mx-auto px-4">
    <div class="flex flex-col md:flex-row items-center gap-6 md:items-stretch">
    <div class="md:w-1/2 text-center mb-8 md:mb-10 flex relative">
        <!-- Gambar -->
        <img src="./images/chart.png" alt="Chart" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
        
        <!-- Kotak Hijau -->
        <div class="bg-gradient-to-r from-green to-dark-green rounded-lg shadow-md w-full h-full min-h-[300px] max-w-full"></div>
      </div>

      <!-- Konten Teks -->
      <div class="w-full md:w-3/4 lg:w-2/3">
        <h2 class="text-2xl md:text-3xl text-black font-bold mb-4 break-words">
          Kelola Sampah dengan Drop Off, Dapatkan Poin Berharga
        </h2>
        <p class="text-black mb-6" style="text-align: justify;">
          LESTARI mengajak kamu untuk melakukan Drop Off sampah di bank sampah terdekat dan mendapatkan hadiah menarik. Pilah sampahmu (plastik, kertas, logam, atau organik), bawa ke bank sampah, kumpulkan poin, dan tukarkan dengan hadiah ramah lingkungan. Dengan Drop Off, kamu ikut berkontribusi menjaga bumi, mengurangi sampah di lingkungan, serta mendukung upaya daur ulang. Ayo, manfaatkan fitur ini dan jadikan bumi lebih bersih dan hijau!
        </p>
        <div class="mb-6">
          <div class="bg-gradient-to-r from-green to-dark-green text-white p-4 rounded-lg shadow-md flex justify-between">
            <div class="text-center">
              <h5 class="font-bold text-xl">2jt Kg+</h5>
              <p>Sampah di Daur Ulang</p>
            </div>
            <div class="text-center">
              <h5 class="font-bold text-xl">15rb+</h5>
              <p>Pengguna</p>
            </div>
          </div>
        </div>

        <a href="./user/tentang.php" class="mt-4 text-black font-bold cursor-pointer hover:text-green-700">
  Lihat Selengkapnya →
</a>
      </div>
    </div>
  </div>
</section>


 <!-- Layanan Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl text-black font-bold mb-2">Layanan</h2>
        <p class="text-black mb-8">Revolusi daur ulang dari Mall Sampah untuk semua orang</p>
        <div class="text-black grid md:grid-cols-3 gap-6">
            <!-- Card Rewards -->
            <div class="block">
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <a href="./user/drop_off/poin.php" class="block">
                        <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer hover:bg-green-200 h-full justify-between">
                            <h5 class="text-xl mb-2">🎁 Rewards</h5>
                            <p>LESTARI mengubah sampahmu menjadi poin yang bisa kamu kumpulkan dan tukarkan dengan hadiah ramah lingkungan.</p>
                        </div>
                    </a>
                <?php else: ?>
                    <a href="javascript:void(0)" onclick="showModal()" class="block">
                        <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer hover:bg-green-200 h-full justify-between">
                            <h5 class="text-xl mb-2">🎁 Rewards</h5>
                            <p>LESTARI mengubah sampahmu menjadi poin yang bisa kamu kumpulkan dan tukarkan dengan hadiah ramah lingkungan.</p>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
            <!-- Card Tutorial -->
            <div class="block">
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <a href="./user/tutorial/tutorial.php" class="block">
                        <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer hover:bg-green-200 h-full justify-between">
                            <h5 class="text-xl mb-2">📺 Tutorial</h5>
                            <p>LESTARI menyediakan tutorial untuk mengubah limbah menjadi barang bernilai dengan gaya hidup ramah lingkungan.</p>
                        </div>
                    </a>
                <?php else: ?>
                    <a href="javascript:void(0)" onclick="showModal()" class="block">
                        <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer hover:bg-green-200 h-full justify-between">
                            <h5 class="text-xl mb-2">📺 Tutorial</h5>
                            <p>LESTARI menyediakan tutorial untuk mengubah limbah menjadi barang bernilai dengan gaya hidup ramah lingkungan.</p>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
            <!-- Card Marketplace -->
            <div class="block">
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <a href="./marketplace.html" class="block">
                        <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer hover:bg-green-200 h-full justify-between">
                            <h5 class="text-xl mb-2">🛍️ Marketplace</h5>
                            <p>Marketplace LESTARI menyediakan produk berkualitas daur ulang. Dukungan nyata untuk gerakan ramah lingkungan.</p>
                        </div>
                    </a>
                <?php else: ?>
                    <a href="javascript:void(0)" onclick="showModal()" class="block">
                        <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer hover:bg-green-200 h-full justify-between">
                            <h5 class="text-xl mb-2">🛍️ Marketplace</h5>
                            <p>Marketplace LESTARI menyediakan produk berkualitas daur ulang. Dukungan nyata untuk gerakan ramah lingkungan.</p>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>



  <!-- Jenis sampah Section -->
  <section class="bg-white py-16">
    <div class="text-black container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-2">Jenis Sampah</h2>
      <p class="mb-8">Lihat semua jenis sampah yang kami daur ulang.</p>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <div class="text-4xl mb-2">📄</div>
          <p>Kertas</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <div class="text-4xl mb-2">🛢️</div>
          <p>Plastik</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <div class="text-4xl mb-2">🥫</div>
          <p>Aluminium</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <div class="text-4xl mb-2">🔩</div>
          <p>Besi & Logam</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <div class="text-4xl mb-2">💻</div>
          <p>Elektronik</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <div class="text-4xl mb-2">🍾</div>
          <p>Botol Kaca</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <div class="text-4xl mb-2">🏷️</div>
          <p>Merek</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <div class="text-4xl mb-2">🍃</div>
          <p>Khusus</p>
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
  <div class="container mx-auto px-4 text-center">
    <div class="flex justify-center">
      <a href="./landingpage.php">
        <img src="./images/Logo.png" alt="Logo Lestari" class="h-20">
      </a>
    </div>
    <div class="container mx-auto grid grid-cols-3 gap-4">
      <!-- Bagian Lestari -->
      <div class="text-left">
        <h4 class="font-bold">Lestari</h4>
        <a href="./landingpage.php" class="block text-white hover:underline mb-1">Home</a>
        <a href="./user/tentang.php" class="block text-white hover:underline mb-1">Tentang Kami</a>
        <a href="" class="block text-white hover:underline mb-1">Layanan</a>
        <a href="" class="block text-white hover:underline mb-1">Blog</a>

      </div>

      <!-- Bagian Informasi -->
      <div>
        <h4 class="font-bold">Informasi</h4>
        <a href="./user/kontak_kami.php" class="block text-white hover:underline mb-1">Kontak Kami</a>
      </div>
      <!-- Bagian Hubungi Kami -->
      <div>
        <h4 class="font-bold">Hubungi Kami</h4>
        <div class="flex justify-center space-x-4 mt-2">
          <a href="#"><img src="./images/user/sosmed/instagram.png" alt="Instagram"></a>
          <a href="#"><img src="./images/user/sosmed/fb.png" alt="Facebook"></a>
          <a href="#"><img src="./images/user/sosmed/x.png" alt="Twitter"></a>
          <a href="#"><img src="./images/user/sosmed/wa.png" alt="Whatsapp"></a>
          <a href="#"><img src="./images/user/sosmed/yt.png" alt="YouTube"></a>
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