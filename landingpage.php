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
    <li><a>Home</a></li>
    <li><a href="./user/tentang.php">Tentang kami</a></li>
    <li>
      <details>
        <summary>Layanan</summary>
        <ul class="bg-light absolute left-1/2 transform -translate-x-1/2 rounded-[10px] border-[1px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border-gray px-[14px] py-[20px] flex flex-wrap items-center gap-3 min-w-[300px] max-w-[600px]">
          <li>
            <button onclick="window.location.href='./user/drop_off/dropoff.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="./images/truck.png" class="w-8 h-8" alt="">
              <p>Drop Off</p>
            </button>
          </li>
          <li>
            <button onclick="window.location.href='./rewards.html'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="./images/reward.png" class="w-8 h-8" alt="">
              <p>Rewards</p>
            </button>
          </li>
          <li>
            <button onclick="window.location.href='./tutorial.html'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="./images/Vector.png" class="w-6 h-6" alt="">
              <p>Tutorial</p>
            </button>
          </li>
          <li>
            <button onclick="window.location.href='./marketplace.html'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
              <img src="./images/marketplace.png" class="w-8 h-8" alt="">
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
        <div class="navbar-end ml-[5px] flex flex-row gap-4 w-auto">
          <a href="./user/signin.php" class="btn min-w-[100px] h-1 shadow-md rounded-full bg-gradient-to-r from-green to-dark-green text-sm border border-to-r from-green to-dark-green font-medium text-white text-center">Sign In</a>
          <a href="./user/signup.php" class="btn btn-outline min-w-[100px] h-1 shadow-md border border-to-r from-green to-dark-green rounded-full text-sm font-medium text-[#1B5E20] text-center">Sign Up</a>
        </div>



        <!-- endif -->

        <!-- if user login -->
        <!-- <div class="ml-[233px] content-center">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="w-[50px] rounded-full">
              <img
                alt="Tailwind CSS Navbar component"
                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
            </div>
          </div>
        </div> -->
        <!-- endif -->
    </div>
  <!-- NAVBAR END -->

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-green to-dark-green text-white py-16">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 text-center md:text-left">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">Tukarkan Sampah, Dapatkan Hadiahnya</h1>
          <p class="text-xl">#TukarSampahUntukKebaikan</p>
        </div>
        <div class="md:w-1/2 text-center mt-8 md:mt-0">
          <img src="./images/hero banner.png" alt="Hero Image" class="rounded-lg mx-auto max-w-full h-full object-cover" />
        </div>
      </div>
    </div>
  </section>


<!-- about section -->
<section class="bg-white py-16">
  <div class="container mx-auto px-4">
    <div class="flex flex-col md:flex-row items-center gap-6 md:items-stretch">
      <!-- Kotak Hijau -->
      <div class="md:w-1/2 text-center mb-8 md:mb-10 flex">
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

        <div class="mt-4 text-black font-bold cursor-pointer hover:text-green-700">Lihat Selengkapnya →</div>
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
            <a href="https://example.com" class="block">
                <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer hover:bg-green-200 h-full justify-between">
                    <h5 class="text-xl mb-2">🎁 Rewards</h5>
                    <p>LESTARI mengubah sampahmu menjadi poin yang bisa kamu kumpulkan dan tukarkan dengan hadiah ramah lingkungan.</p>
                </div>
            </a>
            <!-- Card Tutorial -->
            <a href="./user/tutorial/tutorial.php" class="block">
                <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer hover:bg-green-200 h-full  justify-between">
                    <h5 class="text-xl mb-2">📺 Tutorial</h5>
                    <p>LESTARI menyediakan tutorial untuk mengubah limbah menjadi barang bernilai dengan gaya hidup ramah lingkungan.</p>
                </div>
            </a>
            <!-- Card Marketplace -->
            <a href="https://example.com" class="block">
                <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer hover:bg-green-200 h-full justify-between">
                    <h5 class="text-xl mb-2">🛍️ Marketplace</h5>
                    <p>Marketplace LESTARI menyediakan produk berkualitas daur ulang. Dukungan nyata untuk gerakan ramah lingkungan.</p>
                </div>
            </a>
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

<!-- Footer -->
<!-- <footer class="bg-green-600 text-white mt-16 py-8">
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
  </footer> -->

 <!-- Footer -->
  <footer class="bg-gradient-to-r from-green to-dark-green text-white py-5">
    <div class="container mx-auto px-4 text-center">
      <div class="flex justify-center">
        <a href="./landingpage.php">
          <img src="./images/Logo.png" alt="Logo Lestari" class="h-20">
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