<?php
session_start();
// Sertakan konfigurasi database
require_once('../../controller/config.php');

// Cek apakah admin sudah login
if (!isset($_SESSION['admin_id'])) {
    $_SESSION['login_message'] = "Not authorized";
    header('Location: ../login.php');
    exit();
}

if (isset($_GET['id'])) {
    $request_id = $_GET['id'];

$query = "
    SELECT dr.request_id, dr.drop-off_request_created_at, u.user_name, dr.status, dr.bank_id
    FROM drop-off_request dr
    JOIN users u ON dr.user_id = u.user_id
    WHERE dr.request_id = '$request_id'
";
$result = mysqli_query($conn, $query);
$request = mysqli_fetch_assoc($result);

if (!$request) {
    echo "Request tidak ditemukan.";
    exit;
}
} else {
// Jika 'id' tidak ditemukan dalam URL
echo "Error: request_id tidak ditemukan.";
exit;
}

// Ambil detail jenis sampah
$detail_query = "
    SELECT dr.waste_id, w.waste_name, dr.waste_weight
    FROM detail_request dr
    JOIN waste w ON dr.waste_id = w.waste_id
    WHERE dr.request_id = '$request_id'
";
$detail_result = mysqli_query($conn, $detail_query);
$detail_requests = mysqli_fetch_all($detail_result, MYSQLI_ASSOC);

// Ambil daftar jenis sampah
$waste_query = "SELECT * FROM waste";
$waste_result = mysqli_query($conn, $waste_query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet">
    <title>Penerimaan Sampah | Admin Lestari</title>
</head>
<body>
    <div class="flex flex-row min-h-[1024px] w-full">
        <!-- SIDEBAR -->
        <div class="bg-gradient-to-t from-green-admin to-dark-green-admin w-[345px] h-auto text-light">
            <div class="flex flex-col pt-10 items-center">
                <h1 class="text-[32px] font-extrabold">Admin Lestari</h1>
                <hr class="w-[345px] h-[1px] bg-light mt-[33px]">
            </div>
            <div class="join join-vertical flex flex-col gap-[19px] mt-[33px] ml-[50px]">
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../dashboard.php'">
                    <img src="../../images/admin/Home.png" alt="">
                    <p>Dashboard</p>
                </button>
                <button class="btn btn-success bg-green-btn text-light font-bold justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../penerimaan-sampah/'">
                    <img src="../../images/admin/Truck.png" alt="">
                    <p class="text-lg">Penerimaan Sampah</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../informasi-tutorial/'">
                    <img src="../../images/admin/Recycling.png" alt="">
                    <p>Informasi Tutorial</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../statistik-laporan/'">
                    <img src="../../images/admin/Graph.png" alt="">
                    <p>Statistik & Laporan</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../kelola-reward/'">
                    <img src="../../images/admin/prize.png" class="w-[30px]" alt="">
                    <p>Kelola Reward</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../manajemen-user/'">
                    <img src="../../images/admin/Management.png" alt="">
                    <p>Manajemen User</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../marketplace/'">
                    <img src="../../images/admin/WhatsApp.png" alt="">
                    <p>Marketplace</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../kelola-blog/'">
                    <img src="../../images/admin/Blog.png" alt="">
                    <p>Kelola Blog</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../pengaturan/'">
                    <img src="../../images/admin/Settings.png" alt="">
                    <p>Pengaturan</p>
                </button>
            </div>
        </div> 
        <!-- SIDEBAR END -->

        <script>
        // Fungsi untuk menambahkan input jenis sampah
        function addMoreWaste() {
            var wasteContainer = document.getElementById('waste-container');
            var wasteCount = wasteContainer.getElementsByClassName('waste-item').length + 1;
            
            var newWasteItem = document.createElement('div');
            newWasteItem.classList.add('flex', 'flex-col', 'gap-[5px]', 'w-full', 'waste-item');
            
            newWasteItem.innerHTML = `
                <label for="jenis-sampah-${wasteCount}" class="px-1">Jenis Sampah</label>
                <select id="jenis-sampah-${wasteCount}" name="jenis-sampah[]" class="select select-bordered w-full h-12 bg-light border border-gray px-[14px] text-base font-normal">
                    <option disabled selected>Pilih Jenis Sampah</option>
                    <option value="plastik">Plastik</option>
                    <option value="kertas">Kertas</option>
                    <option value="logam">Logam</option>
                    <option value="organik">Organik</option>
                </select>
                <label for="berat-sampah-${wasteCount}" class="px-1">Berat Sampah</label>
                <div class="flex flex-row gap-[9px] items-center w-full justify-between">
                    <input type="number" id="berat-sampah-${wasteCount}" name="berat-sampah[]" min="0" placeholder="0" class="w-full h-12 bg-light border border-gray px-[14px] font-light">
                    <span class="text-base font-light justify-self-end">Kg</span>
                    <button type="button" class="btn btn-error text-white" onclick="removeWasteItem(this)">X</button>
                </div>
            `;
            wasteContainer.appendChild(newWasteItem);
        }

        // Fungsi untuk menghapus input jenis sampah
        function removeWasteItem(button) {
            button.parentElement.parentElement.remove();
        }
    </script>
</head>
<body>
        <!-- CONTENT -->
        <div class="bg-light-bg-content w-full h-auto pb-11 px-5 pt-5">
            <!-- HEADER -->
            <div class="flex flex-row justify-between bg-gradient-to-r from-[#1E5E3F] to-[#3FC483] w-full h-[88px] px-[23px] rounded-[20px] text-light font-extrabold text-[32px] items-center">
                <h1>Penerimaan Sampah</h1>
                <div class="dropdown dropdown-end self-center">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-[50px] rounded-full">
                        <img
                            alt="Tailwind CSS Navbar component"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                    <ul
                        tabindex="0"
                        class="menu menu-sm dropdown-content bg-light rounded-[10px] z-[1] mt-3 w-[233px] py-6 border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] text-dark">
                        <li><a href="../pengaturan/profil.php" class="flex flex-row gap-[10px] mb-[15px]">
                            <img src="../../images/admin/Profile.png" class="w-[30px]" alt="Profile">
                            <p class="text-xl font-normal">Profile</p>
                        </a></li>
                        <hr class="h-[2px] w-full text-gray my-6">
                        <li><a class="flex flex-row gap-[10px]">
                            <img src="../../images/admin/sign-out.png" class="w-[30px]" alt="Sign Out">
                            <p class="text-xl font-normal">Sign Out</p>
                        </a></li>
                    </ul>
                </div>
            </div>
            <!-- HEADER END -->
            
            <!-- FORM -->
            <div class="bg-light rounded-[10px] w-[639px] h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col justify-self-center pt-[25px] pb-[50px] mt-[46px] text-dark">
                <div class="flex flex-col gap-[21px] text-center">
                    <div class="flex flex-row">
                        <a href="./" class="self-center pl-7 absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                                <g clip-path="url(#clip0_120_5431)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5792 19.0458C11.1695 18.6357 10.9395 18.0797 10.9395 17.5C10.9395 16.9203 11.1695 16.3643 11.5792 15.9541L19.8275 7.70289C20.2379 7.29272 20.7944 7.06236 21.3746 7.0625C21.6619 7.06257 21.9464 7.11922 22.2118 7.22922C22.4772 7.33923 22.7183 7.50043 22.9214 7.70362C23.1245 7.90682 23.2856 8.14802 23.3954 8.41347C23.5053 8.67892 23.5618 8.96341 23.5618 9.2507C23.5617 9.53799 23.5051 9.82246 23.3951 10.0879C23.285 10.3532 23.1238 10.5944 22.9207 10.7975L16.2196 17.5L22.9221 24.2025C23.1311 24.4042 23.2979 24.6455 23.4127 24.9123C23.5274 25.1791 23.5879 25.4661 23.5906 25.7566C23.5932 26.047 23.538 26.3351 23.4282 26.604C23.3183 26.8729 23.156 27.1172 22.9507 27.3227C22.7454 27.5282 22.5012 27.6907 22.2324 27.8008C21.9637 27.911 21.6756 27.9664 21.3852 27.9641C21.0947 27.9617 20.8077 27.9015 20.5407 27.7869C20.2738 27.6724 20.0323 27.5059 19.8304 27.2971L11.5763 19.0458H11.5792Z" fill="black"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_120_5431">
                                    <rect width="35" height="35" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <h2 class="text-2xl font-bold mx-auto">Input Data Penerimaan Sampah</h2>
                    </div>
                    <p class="text-sm font-light">Silakan isi data penerimaan sampah dengan lengkap</p>
                </div>
                <form action="add.process.php" method="POST" class="flex flex-col text-base font-medium mt-[50px] w-full px-[90px] gap-[31px]">
                    <!-- Waste Inputs -->
                    <div id="waste-container" class="flex flex-col gap-[5px]">
                        <!-- Input Jenis Sampah akan ditambahkan di sini -->
                    </div>

                    <button type="button" id="add-more-waste" class="btn btn-info text-light rounded-[10px] py-2 px-5" onclick="addMoreWaste()">Tambah Jenis Sampah</button>

                    <div class="flex flex-row justify-center gap-12 w-full">
                    <button 
                        class="btn btn-success bg-[#2ECC71] rounded-[20px] text-[15px] font-semibold px-[41px] text-light shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border border-gray" 
                        type="submit">
                        Verifikasi
                    </button>
                    
                    <!-- Tombol Tolak -->
                    <button 
                        class="btn btn-error bg-[#C0392B] rounded-[20px] text-[15px] font-semibold px-[41px] text-light shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border border-gray" 
                        type="button" 
                        onclick="document.getElementById('denied').showModal()">
                        Tolak
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- DIALOGS -->
    <dialog id="denied" class="modal">
        <div class="modal-box bg-light w-[593px] h-auto rounded-[20px] gap-10 flex flex-col items-center py-[75px]">
            <h3 class="text-[32px] font-bold text-center text-dark">Data ditolak</h3>
            <img src="../../images/admin/denied.png" class="w-[100px]" alt="">
        </div>
        <form method="dialog" class="modal-backdrop bg-light bg-opacity-25">
            <button> </button>
        </form>
    </dialog>
</body>
</html>