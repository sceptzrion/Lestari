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

// Inisialisasi variabel
$rows = [];
$error_message = "";

// Periksa koneksi database
if ($conn) {
    // Ambil admin_id dari sesi
    $admin_id = $_SESSION['admin_id'];

    // Query untuk mendapatkan bank_id berdasarkan admin_id
    $query = "SELECT bank_id FROM admin WHERE admin_id = ?";
    $stmt = $conn->prepare($query);
    if ($stmt) {
        $stmt->bind_param('i', $admin_id);
        $stmt->execute();
        $stmt->bind_result($bank_id);
        $stmt->fetch();
        $stmt->close();
    } else {
        $error_message = "Kesalahan dalam query database.";
    }

    // Jika bank_id ditemukan, ambil data permintaan sampah
    if (!empty($bank_id)) {
        // Persiapkan query utama
        $query = "
            SELECT 
                dr.request_id, 
                dr.drop_off_request_created_at, 
                u.user_name, 
                w.waste_name AS waste_type, 
                wr.waste_weight, 
                dr.status, 
                wr.points_earned
            FROM drop_off_request dr
            JOIN users u ON dr.user_id = u.user_id
            LEFT JOIN detail_request wr ON dr.request_id = wr.request_id
            LEFT JOIN waste w ON wr.waste_id = w.waste_id
            WHERE dr.bank_id = ?
        ";

        // Filter tambahan berdasarkan parameter GET
        $filters = [];
        if (!empty($_GET['status-sampah'])) {
            $filters[] = "dr.status = ?";
        }
        if (!empty($_GET['jenis-sampah'])) {
            $filters[] = "w.waste_name = ?";
        }
        if (!empty($_GET['date'])) {
            $filters[] = "DATE(dr.drop_off_request_created_at) = ?";
        }

        if ($filters) {
            $query .= " AND " . implode(" AND ", $filters);
        }

        $query .= " ORDER BY dr.drop_off_request_created_at DESC";

        // Persiapkan query untuk menghindari SQL Injection
        $stmt = $conn->prepare($query);

        if ($stmt) {
            // Bind parameter secara dinamis
            $bind_types = "i";
            $bind_params = [$bank_id];

            if (!empty($_GET['status-sampah'])) {
                $bind_types .= "s";
                $bind_params[] = $_GET['status-sampah'];
            }
            if (!empty($_GET['jenis-sampah'])) {
                $bind_types .= "s";
                $bind_params[] = $_GET['jenis-sampah'];
            }
            if (!empty($_GET['date'])) {
                $bind_types .= "s";
                $bind_params[] = $_GET['date'];
            }

            // Bind parameter
            $stmt->bind_param($bind_types, ...$bind_params);
            $stmt->execute();

            // Ambil hasil
            $result = $stmt->get_result();
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
        } else {
            $error_message = "Kesalahan dalam query filter.";
        }
    } else {
        $error_message = "Bank ID tidak ditemukan. Silakan login kembali.";
    }
} else {
    $error_message = "Koneksi database gagal. Periksa konfigurasi Anda.";
}
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
                        <li><a href="../pengaturan/" class="flex flex-row gap-[10px]">
                            <img src="../../images/admin/Settings-profile.png" class="w-[30px]" alt="Settings">
                            <p class="text-xl font-normal">Pengaturan</p>
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
            
            <!-- BUTTONS -->
            <!-- <div class="flex flex-row gap-[22px] mt-[31px] ">
                <button class="btn btn-warning h-[42px] px-[27px] text-light rounded-[20px] border border-dark bg-[#F6AC0A] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] font-medium text-xl" onclick="location.href='./'">
                    Lihat Status Penerimaan Sampah
                </button>
                <button class="btn btn-warning h-[42px] px-[27px] text-light rounded-[20px] border border-dark bg-[#F6AC0A] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] font-medium text-xl" onclick="location.href='./add.php'">
                    Penerimaan Sampah
                </button>
            </div> -->
            <!-- BUTTONS END -->

            <!-- FORM -->
            <div class="bg-light rounded-[10px] w-full h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col py-[35px] px-[41px] mt-[46px] text-dark">
                <h2 class="text-2xl font-bold text-center">Status Penerimaan Sampah</h2>
                <input type="text" name="cari-user" id="cari-user" placeholder="Cari Nama" class="w-1/3 border-2 border-gray px-2 text-dark text-sm font-light bg-light py-1.5 rounded-lg mt-5">
                <form action="" class="flex flex-row text-base font-medium mt-[21px] w-full gap-[20px] content-start">
                    <select id="status-sampah" name="status-sampah" class="w-[223px] h-auto bg-light border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[5px] px-[9px] text-base font-medium">
                        <option disabled selected>Semua Status</option>
                        <option>waiting</option>
                        <option>accepted</option>
                        <option>rejected</option>
                    </select>
                    <select id="jenis-sampah" name="jenis-sampah" class="w-[223px] h-auto bg-light border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] px-[9px] text-base font-medium">
                        <option disabled selected>Semua Jenis Sampah</option>
                        <option>Plastik</option>
                        <option>Kertas</option>
                        <option>Logam</option>
                    </select>
                    <input type="date" id="date" name="date" class="w-[223px] h-auto bg-light text-dark dark:[color-scheme:light] border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] px-[9px] text-base font-medium">
                    <button class="btn btn-success bg-[#2E9E5D] rounded-[5px] w-[101px] h-[34px] text-base font-semibold text-light shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border border-gray">Filter</button>
                </form>
                <div class="table mt-10">
                    <div class="overflow-auto h-[400px]">
                        <table class="table border-collapse border border-[#828282] text-center">
                            <!-- head -->
                            <thead class="bg-[#E5E5E5] text-dark text-sm font-bold">
                                <tr class="border border-[#828282]">
                                    <th class="border border-[#828282]">ID</th>
                                    <th class="border border-[#828282]">Tanggal</th>
                                    <th class="border border-[#828282]">Nama User</th>
                                    <th class="border border-[#828282]">Jenis Sampah</th>
                                    <th class="border border-[#828282]">Berat</th>
                                    <th class="border border-[#828282]">Status</th>
                                    <th class="border border-[#828282]">Poin</th>
                                    <th class="border border-[#828282]">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="font-medium">
                                <?php if (count($rows) > 0): ?>
                                    <?php foreach ($rows as $row): ?>
                                        <tr>
                                            <td class="border border-[#828282]"><?= htmlspecialchars($row['request_id']) ?></td>
                                            <td class="border border-[#828282]"><?= htmlspecialchars($row['drop_off_request_created_at']) ?></td>
                                            <td class="border border-[#828282]"><?= htmlspecialchars($row['user_name']) ?></td>
                                            <td class="border border-[#828282]"><?= htmlspecialchars($row['waste_type']) ?></td>
                                            <td class="border border-[#828282]"><?= htmlspecialchars($row['waste_weight']) ?> Kg</td>
                                            <td class="border border-[#828282]">
                                                <?php if ($row['status'] == 'accepted'): ?>
                                                    <p class="bg-[#299E63] text-light rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center py-0.5 px-2">
                                                        <?= htmlspecialchars($row['status']) ?>
                                                    </p>
                                                <?php elseif ($row['status'] == 'rejected'): ?>
                                                    <p class="bg-[#EB5757] text-light rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center py-0.5 px-1">
                                                        <?= htmlspecialchars($row['status']) ?>
                                                    </p>
                                                <?php else: ?>
                                                    <p class="bg-[#FFDE75] rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center py-0.5 px-1">
                                                        <?= htmlspecialchars($row['status']) ?>
                                                    </p>
                                                <?php endif; ?>
                                            </td>
                                            <td class="border border-[#828282]"><?= htmlspecialchars($row['points_earned']) ?></td>
                                            <td class="border border-[#828282]">
                                                <div class="flex flex-row gap-[18px] justify-center items-center">
                                                    <?php if ($row['status'] !== 'Selesai'): ?>
                                                        <button onclick="location.href='add.php?id=<?= isset($row['request_id']) ? $row['request_id'] : '' ?>'" class="bg-[#2ECC71] w-[72px] h-[25px] rounded-[10px] text-light text-[10px] font-semibold text-center">
                                                            Hitung
                                                        </button>
                                                    <?php else: ?>
                                                        <p>-</p>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="8" class="border border-[#828282] text-center">Tidak ada data tersedia</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            <!-- dialogs -->
            <dialog id="verified" class="modal">
                <div class="modal-box bg-light w-[593px] h-auto rounded-[20px] gap-10 flex flex-col items-center py-[75px]">
                    <h3 class="text-[32px] font-bold text-center text-dark">Berhasil Verifikasi</h3>
                    <img src="../../images/admin/checklist.png" class="w-[100px]" alt="">
                </div>
                <form method="dialog" class="modal-backdrop bg-light bg-opacity-25">
                    <button> </button>
                </form>
            </dialog>

            <dialog id="denied" class="modal">
                <div class="modal-box bg-light w-[593px] h-auto rounded-[20px] gap-10 flex flex-col items-center py-[75px]">
                    <h3 class="text-[32px] font-bold text-center text-dark">Data ditolak</h3>
                    <img src="../../images/admin/denied.png" class="w-[100px]" alt="">
                </div>
                <form method="dialog" class="modal-backdrop bg-light bg-opacity-25">
                    <button> </button>
                </form>
            </dialog>
        </div>
    </div>
</body>
</html>