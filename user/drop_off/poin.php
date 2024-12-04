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

$host = 'localhost'; // Change to your database host
$username = 'root';  // Change to your database username
$password = '';      // Change to your database password
$database = 'db_sampah_4'; // Change to your database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id']; // Ensure 'user_id' is stored in session

// Query to get total points for the user
$query = "SELECT SUM(dr.waste_weight * w.waste_point) AS total_points
          FROM drop_off_request d
          LEFT JOIN detail_request dr ON d.request_id = dr.request_id
          LEFT JOIN waste w ON dr.waste_id = w.waste_id
          WHERE d.user_id = ? AND d.status = 'accepted'";

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$total_points = $row['total_points'] ?? 0;  // Set to 0 if no points are found

// Fetch the user's drop-off history
$query = "SELECT d.request_id, d.drop_off_request_created_at, SUM(dr.waste_weight * w.waste_point) AS points 
          FROM drop_off_request d
          LEFT JOIN detail_request dr ON d.request_id = dr.request_id
          LEFT JOIN waste w ON dr.waste_id = w.waste_id
          WHERE d.user_id = ? 
          GROUP BY d.request_id 
          ORDER BY d.drop_off_request_created_at DESC";

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$requests_result = $stmt->get_result();
?>

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
   <div class="navbar-start pl-1/2">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden" id="hamburger-btn">
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
            id="dropdown-menu"
            class="menu menu-sm dropdown-content bg-white rounded-box z-[1] mt-3 w-52 p-2 shadow hidden">
            <li><a href="../../landingpage.php">Home</a></li>
            <li><a href="../../user/tentang.php">Tentang kami</a></li>
            <li>
              <a>Layanan</a>
              <ul class="p-2">
                <!-- Drop Off -->
                <li>
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <button onclick="window.location.href='../../user/drop_off/dropoff.php'" >
                        <p>Drop Off</p>
                    </button>
                    <?php else: ?>
                    <button onclick="showModal()" >
                        <p>Drop Off</p>
                    </button>
                    <?php endif; ?>
                </li>
                 <!-- Rewards -->
                <li>
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <button onclick="window.location.href='../../user/drop_off/poin.php'" >
                        <p>Rewards</p>
                    </button>
                    <?php else: ?>
                    <button onclick="showModal()" >
                        <p>Rewards</p>
                    </button>
                    <?php endif; ?>
                </li>
                
                <!-- Marketplace -->
                <li>
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <button onclick="window.location.href='../../user/marketplace/marketplace.php'">
                        <p>Marketplace</p>
                    </button>
                    <?php else: ?>
                    <button onclick="showModal()" >
                        <p>Marketplace</p>
                    </button>
                    <?php endif; ?>
                </li>
                    </ul>
                </li>
            <li><a href="../../user/blog.php">Blog</a></li>
            <li><a href="../../user/kontak_kami.php">Kontak Kami</a></li>
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
          <!-- Drop Off -->
          <li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
              <button onclick="window.location.href='../../user/drop_off/dropoff.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="../../images/truck.png" class="w-8 h-8" alt="">
                <p>Drop Off</p>
              </button>
            <?php else: ?>
              <button onclick="showModal()" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="../../images/truck.png" class="w-8 h-8" alt="">
                <p>Drop Off</p>
              </button>
            <?php endif; ?>
          </li>
          <!-- Rewards -->
          <li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
              <button onclick="window.location.href='../../user/drop_off/poin.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="../../images/reward.png" class="w-8 h-8" alt="">
                <p>Rewards</p>
              </button>
            <?php else: ?>
              <button onclick="showModal()" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="../../images/reward.png" class="w-8 h-8" alt="">
                <p>Rewards</p>
              </button>
            <?php endif; ?>
          </li>
          
          <!-- Marketplace -->
          <li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
              <button onclick="window.location.href='../../user/marketplace/marketplace.php'" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="../../images/marketplace.png" class="w-8 h-8" alt="">
                <p>Marketplace</p>
              </button>
            <?php else: ?>
              <button onclick="showModal()" class="btn btn-success flex-grow shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex items-center justify-center px-4 py-2 gap-2 min-w-[120px] max-w-[200px]">
                <img src="../../images/marketplace.png" class="w-8 h-8" alt="">
                <p>Marketplace</p>
              </button>
            <?php endif; ?>
          </li>
        </ul>
      </details>
    </li>
    <li><a href="../../user/blog.php">Blog</a></li>
    <li><a href="../../user/kontak_kami.php">Kontak Kami</a></li>
  </ul>
</div>


<!-- Profile -->
<div class="navbar-end ml-[5px] flex items-center gap-x-0 md:gap-4">
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
                <a href="../../user/profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                <a href="../../backend/logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    <?php else: ?>
      <!-- Tombol Sign In dan Sign Up jika belum login -->
        <a href="../../user/signin.php" class="btn md:min-w-[100px] md:h-12 md:shadow-md md:rounded-full md:bg-gradient-to-r from-green to-dark-green md:text-sm md:border md:border-to-r md:from-green md:to-dark-green md:font-medium md:text-white md:text-center text-base bg-transparent text-sm text-[#1B5E20] border-0 shadow-none">
          Sign In
        </a>
        <a href="../../user/signup.php" class="btn btn-outline md:min-w-[100px] md:h-12 md:shadow-md md:border border-to-r from-green to-dark-green md:rounded-full md:text-sm md:font-medium md:text-[#1B5E20] md:text-center text-base bg-transparent text-sm text-[#1B5E20] border-0 shadow-none whitespace-nowrap">
          Sign Up
        </a>
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
    <!-- navbar -->
    <script>
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const dropdownMenu = document.getElementById('dropdown-menu');

        hamburgerBtn.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
  <!-- NAVBAR END -->


 <!-- section -->
<!-- section -->
<section class="bg-gray-100 w-full min-h-screen">
  <main class="container mx-auto md:px-16 px-6 py-6">
    <div class="flex justify-between items-center mb-4">
      <span class="inline-flex justify-between w-2/4 bg-gradient-to-r from-green to-dark-green text-white rounded-full px-4 py-2 text-sm">
        <span class="font-bold">Poin Reward</span>
        <span class="font-bold"><?= number_format($total_points); ?> Poin</span>
      </span>
      <a href="../drop_off/tukar_poin.php">
        <button class="bg-gradient-to-r from-green to-dark-green text-white px-6 py-2 rounded-full shadow hover:bg-green-600 focus:outline-none flex items-center gap-2">
          Tukar Poin
        </button>
      </a>
    </div>

    <!-- Riwayat Drop Off -->
    <div class="bg-white rounded-lg shadow-lg p-6">
      <h1 class="text-2xl font-bold text-green-700 text-center mb-4">Riwayat Drop Off</h1>
      <div class="space-y-4">
        <?php while ($request = $requests_result->fetch_assoc()) : ?>
          <div class="flex justify-between items-center bg-gray-100 rounded-lg p-4 shadow">
            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-[#1B5E20] rounded-full flex items-center justify-center mb-3">
                <img src="../../images/user/recycle.png" class="w-7" alt="Recycle Icon">
              </div>
              <div>
                <h2 class="font-bold text-[#1B5E20]">Reward Drop Off</h2>
                <p class="text-sm text-gray-500"><?= date('d M Y, H:i', strtotime($request['drop_off_request_created_at'])); ?></p>
              </div>
            </div>
            <span class="text-xl font-bold text-green-700"><?= number_format($request['points']); ?> Poin</span>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </main>
</section>
