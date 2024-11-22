<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../css/styles.css" rel="stylesheet">
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
          <img src="../images/Logo.png" alt="Logo Lestari">
        </a>
      </div>
    <!-- DESKTOP MODE -->
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal px-1 text-dark text-base">
            <li><a>Home</a></li>
            <li><a href="./tentang.php">Tentang kami</a></li>
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

  <!-- About Section -->
   <!-- left section -->
  <section class="bg-white py-16">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center">
        <div class="w-full">
          <h2 class="text-3xl text-[#1B5E20] font-bold mb-4 text-center">Tentang LESTARI</h2>
          <p class="text-black mb-8 text-center">
          LESTARI adalah platform inovatif yang berkomitmen untuk menciptakan Indonesia yang lebih bersih dan berkelanjutan melalui pengelolaan sampah yang bertanggung jawab.</p>
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 pr-8">
              <h2 class="text-2xl text-[#1B5E20] font-bold mb-4">Mengapa LESTARI ?</h2>
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
                <div class="mt-4 text-black font-bold cursor-pointer hover:text-green-600">
                  Lihat Selengkapnya →
                </div>
              </div>
            </div>
            <!-- right section -->
            <div class="w-full md:w-1/2 bg-gradient-to-r from-green to-dark-green rounded-lg p-6">
            </div>
          </div>
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