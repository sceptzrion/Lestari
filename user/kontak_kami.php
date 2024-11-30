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
  <li><a href="../landingpage.php">Home</a></li>
  <li><a href="../../user/tentang.php">Tentang kami</a></li>
    <li>
      <details>
        <summary>Layanan</summary>
        <ul class="bg-light absolute left-1/2 transform -translate-x-1/2 rounded-[10px] border-[1px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border-gray px-[14px] py-[20px] flex flex-wrap items-center gap-3 min-w-[300px] max-w-[600px]">
          <li>
            <button onclick="window.location.href='../../user/drop_off/dropoff.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
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
    <li><a href="#">Blog</a></li>
    <li><a href=".././user/kontak_kami.php">Kontak Kami</a></li>
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
  <main class="container mx-auto px-4 py-8">
    <h2 class="text-3xl text-[#1B5E20] font-bold mb-3">Kontak Kami</h2>
   <p class="text-gray-700 mb-6">Punya pertanyaan atau ingin berkolaborasi? Jangan ragu untuk menghubungi kami</p>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <!-- Contact Information -->
      <div class="bg-green-100 p-6 rounded-lg shadow-lg">
        <h3 class="text-lg font-bold text-[#1B5E20] mb-4">Alamat Kantor</h3>
        <p class="text-gray-700 mb-4">Jl. Lingkungan Hijau No. 123<br>Jakarta Selatan, 12345</p>

        <h3 class="text-lg font-bold text-[#1B5E20] mb-4">Email</h3>
        <p class="text-gray-700 mb-4">
          <a href="mailto:info@lestari.id" class="hover:text-green-600">info@lestari.id</a><br>
          <a href="mailto:support@lestari.id" class="hover:text-green-600">support@lestari.id</a>
        </p>

        <h3 class="text-lg font-bold text-[#1B5E20] mb-4">Telepon</h3>
        <p class="text-gray-700 mb-4">(021) 1234-5678<br>0800-1234-5678 (Bebas Pulsa)</p>

        <h3 class="text-lg font-bold text-[#1B5E20] mb-4">Jam Operasional</h3>
        <p class="text-gray-700 mb-4">
          Senin - Jumat: 09:00 - 17:00<br>
          Sabtu: 09:00 - 15:00
        </p>
      </div>

      <!-- Contact Form -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <form action="#" method="POST" class="space-y-6">
          <div>
            <label for="name" class="block text-gray-700 font-semibold">Nama Lengkap</label>
            <input type="text" id="name" name="name" class="w-full mt-2 border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" placeholder="Masukkan nama lengkap Anda">
          </div>
          <div>
            <label for="email" class="block text-gray-700 font-semibold">Email</label>
            <input type="email" id="email" name="email" class="w-full mt-2 border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" placeholder="Masukkan alamat email Anda">
          </div>
          <div>
            <label for="subject" class="block text-gray-700 font-semibold">Subjek</label>
            <select id="subject" name="subject" class="w-full mt-2 border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
              <option>Pilih Subjek</option>
              <option>Kolaborasi</option>
              <option>Pertanyaan</option>
            </select>
          </div>
          <div>
            <label for="message" class="block text-gray-700 font-semibold">Pesan</label>
            <textarea id="message" name="message" rows="5" class="w-full mt-2 border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" placeholder="Tulis pesan Anda di sini..."></textarea>
          </div>
          <button type="submit" class="w-full py-3 bg-gradient-to-r from-green to-dark-green text-white font-semibold rounded-lg shadow hover:bg-green-600">Kirim Pesan</button>
        </form>
      </div>
    </div>
  </main>

<!-- footer -->
<footer class="bg-gradient-to-r from-green to-dark-green text-white py-7">
  <div class="container mx-auto px-4 text-center">
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
        <a href="" class="block text-white hover:underline mb-1">Layanan</a>
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
    
</body>
</html>
