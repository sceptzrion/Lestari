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
   <div class="navbar bg-light h-[92px] pr-[41px] justify-between">
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
            <li><a>Tentang kami</a></li>
            <li>
              <details>
                <summary>Layanan</summary>
                  <ul ul class="bg-light absolute left-1/2 transform -translate-x-1/2 rounded-[10px] border-[1px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border-gray px-[14px] py-[20px] flex-wrap flex items-center gap-[11px] min-w-[475px] h-[144px]">
                    <li><button class="btn btn-success w-[142px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex px-2.5 content-center text-light text-base font-medium gap-[10px]">
                      <img src="./images/truck.png" class="w-10" alt="">
                      <p>Drop Off</p>
                    </button></li>
                    <li><button class="btn btn-success w-[142px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex px-2.5 content-center text-light text-base font-medium gap-[5px]">
                      <img src="./images/reward.png" class="w-10" alt="">
                      <p>Rewards</p>
                    </button></li>
                    <li><button class="btn btn-success w-[142px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex px-2.5 content-center text-light text-base font-medium gap-2">
                      <img src="./images/Vector.png" class="w-8" alt="">
                      <p>Tutorial</p>
                    </button></li>
                    <li><button class="btn btn-success w-[171px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex px-2.5 content-center text-light text-base font-medium gap-[6px]">
                      <img src="./images/marketplace.png" class="w-10" alt="">
                      <p>Marketplace</p>
                    </button></li>
                  </ul>
              </details>
            </li>
            <li><a>Blog</a></li>
            <li><a>Kontak Kami</a></li>
          </ul>
        </div>
        <!-- if user not login -->
        <div class="navbar-end ml-[56px] flex flex-row gap-[30px] w-auto">
          <a class="btn px-5 h-[42px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] bg-gradient-to-r from-green to-dark-green text-[20px] border-dark border-[1px] font-medium text-light">Sign In</a>
          <a href="./user/signup.php" class="btn btn-outline px-4 h-[42px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border-dark border-2 rounded-[20px] text-[20px] font-medium text-dark">Sign up</a>
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
  <section class="bg-green-600 text-white py-16">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 text-center md:text-left">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">Tukarkan Sampah, Dapatkan Hadiahnya</h1>
          <p class="text-xl">#TukarSampahUntukKebaikan</p>
        </div>
        <div class="md:w-1/2 text-center mt-8 md:mt-0">
          <img src="./images/hero banner.png" alt="Hero Image" class="rounded-lg mx-auto max-w-full h-auto" />
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="bg-white py-16">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 text-center mb-8 md:mb-0">
          <img src="https://placehold.co/400x300" alt="Drop Off" class="mx-auto max-w-full h-auto" />
        </div>
        <div class="md:w-1/2">
          <h2 class="text-3xl text-black font-bold mb-4">Kelola Sampah dengan Drop Off, Dapatkan Poin Berharga</h2>
          <p class="text-black mb-6">
            LESTARI mengajak kamu untuk melakukan Drop Off sampah di bank sampah terdekat dan mendapatkan hadiah menarik. Pilih sampahmu (plastik, kertas, logam, atau organik), bawa ke bank sampah, kumpulkan poin, dan tukarkan dengan hadiah ramah lingkungan.
          </p>

          <div class="mb-6">
            <div class="bg-green-600 text-white p-4 rounded-lg shadow-md flex justify-between">
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

          <div class="mt-4 text-black font-bold cursor-pointer hover:text-green-600">Lihat Selengkapnya →</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl text-black font-bold mb-2">Layanan</h2>
      <p class="text-black mb-8">Revolusi daur ulang dari Mall Sampah untuk semua orang</p>
      <div class="text-black grid md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h5 class="text-xl mb-2">🎁 Rewards</h5>
          <p>LESTARI mengubah sampahmu menjadi poin yang bisa kamu kumpulkan dan tukarkan dengan hadiah ramah lingkungan.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h5 class="text-xl mb-2">📺 Tutorial</h5>
          <p>LESTARI menyediakan tutorial untuk mengubah limbah menjadi barang bernilai dengan gaya hidup ramah lingkungan.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h5 class="text-xl mb-2">🛍️ Marketplace</h5>
          <p>Marketplace LESTARI menyediakan produk berkualitas daur ulang. Dukungan nyata untuk gerakan ramah lingkungan.</p>
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

  <!-- Footer -->
  <footer class="bg-green-600 text-white py-8">
    <div class="container mx-auto px-4 text-center">
      <p class="mb-4">&copy; 2024 LESTARI. All Rights Reserved.</p>
      <div class="space-x-4">
        <a href="#" class="text-white hover:underline">Instagram</a>
        <a href="#" class="text-white hover:underline">Facebook</a>
        <a href="#" class="text-white hover:underline">Twitter</a>
        <a href="#" class="text-white hover:underline">YouTube</a>
      </div>
    </div>
  </footer>
</body>
</html>