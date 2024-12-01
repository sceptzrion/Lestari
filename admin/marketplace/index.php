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

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet">
    <title>Marketplace | Admin Lestari</title>
</head>
<body>
    <div class="flex flex-row h-full w-full">
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
                <button class="btn btn-success bg-transparent border-0 text-light font-bold justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../penerimaan-sampah/'">
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
                <button class="btn btn-success bg-green-btn border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../marketplace/'">
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
                <h1>Marketplace</h1>
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
            <div class="mt-7 w-1/3">
                <form action="" class="flex flex-col gap-4 w-auto">
                    <input type="text" name="cari-user" id="cari-user" placeholder="Cari Produk" class="w-auto px-1 text-dark text-sm font-light bg-light rounded-[5px] py-1.5 h-[34px]">
                    <div class="flex flex-row gap-4">
                        <select id="kategori" name="kategori" class="w-auto h-[34px] bg-light border border-gray rounded-[5px] text-sm px-3 py-1.5 font-medium text-dark">
                            <option disabled selected>Semua Kategori</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                        </select>
                        <select id="urutkan" name="urutkan" class="w-auto h-[34px] bg-light border border-gray rounded-[5px] text-sm px-3 py-1.5 font-medium text-dark">
                            <option disabled selected>Urutkan Berdasarkan</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                        </select>
                    </div>
                </form>
            </div>
            <!-- BUTTONS END -->

            <!-- TABLE -->
             <div class="bg-light rounded-[10px] w-full h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] p-10 mt-10 text-dark gap-[18px] flex flex-col">
                <div class="grid grid-cols-3 gap-[30px]">
                    <!-- CARDS -->
                <?php 
                    // LOOPING DYNAMIC CARDS
                    for ($i = 0; $i < 4; $i++) {?>
                        <div class=" bg-light w-auto h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] px-3 pb-[15px]">
                        <figure class="pt-[7px] justify-self-center">
                            <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes"
                            class="rounded-[15px]" />
                        </figure>
                        <div class="mt-[31px] gap-[5px] flex flex-col">
                            <h3 class="text-dark text-[15px] font-extrabold">Tas Daur Ulang Plastik</h3>
                            <h2 class="text-xl text-[#077E46] font-semibold max-w-[238px]">Rp150.000</h2>
                            <p class="text-[10px] opacity-50 font-normal text-dark">Kategori : Aksesoris</p>
                            <p class="text-[10px] opacity-50 font-normal text-dark">Stok : 15 pcs</p>
                        </div>
                        <div class="mt-[21px] h-[21px] flex justify-center">
                            <button onclick="getElementById('delete').showModal()" class="bg-[#C0392B] h-full w-[77px] rounded-[10px] text-[10px] font-semibold text-light flex flex-row gap-1 justify-center items-center">
                                <img class="w-[10px]" src="../../images/admin/trash.png" alt="">
                                <span>Hapus</span>
                            </button>
                        </div>
                    </div> 
                    <?php } ?>
            <!-- CARDS END  -->
                </div>
                <button class="rounded-[5px] border border-gray py-1.5 w-[90px] self-end h-auto text-sm font-medium text-dark">See All</button>
                 <!-- BIKIN SEE ALL -->
            </div>

            <!-- dialogs -->
            <dialog id="delete" class="modal">
                <div class="modal-box bg-light w-[550px] h-auto rounded-[20px] gap-[42px] flex flex-col p-[30px]">
                    <h3 class="text-2xl font-bold text-dark">Hapus Produk</h3>
                    <div class="flex flex-col font-normal text-dark text-base gap-4">
                        <p>Apakah Anda yakin ingin Menghapus produk ini?</p>
                        <div class="flex flex-row gap-0.5">
                            <span class="font-bold">Nama Produk</span>
                            <p>: Tas Daur Ulang Plastik</p>
                        </div>
                        <div class="flex flex-row gap-0.5">
                            <span class="font-bold">Kategori</span>
                            <p>: Aksesoris</p>
                        </div>
                        <div class="flex flex-row gap-0.5">
                            <span class="font-bold">Harga</span>
                            <p>: Rp150.000</p>
                        </div>
                        <div class="flex flex-row gap-0.5">
                            <span class="font-bold">Stok</span>
                            <p>: 15 pcs</p>
                        </div>
                    </div>
                    <div class="mt-10">
                        <form method="dialog" class="flex flex-row-reverse items-end gap-[18px]">
                            <button onclick="getElementById('deleted').showModal()" class="bg-[#EB3223] h-auto w-auto px-[14px] py-2 rounded-[10px] text-xs font-semibold text-light">Ya, Hapus</button>
                            <button class="bg-[#95A5A6] h-auto w-auto px-[14px] py-2 rounded-[10px] text-xs font-semibold text-light">Batal</button>
                        </form>
                    </div>
                </div>                
            </dialog>

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

            <dialog id="edit" class="modal">
                <div class="modal-box bg-light min-w-[550px] h-auto rounded-[20px] gap-[18px] flex flex-col px-10 py-7">
                    <h3 class="text-2xl font-bold text-dark">Edit Produk</h3>
                    <form class="flex flex-col gap-[18px] w-full text-dark">
                        <div class="flex flex-col gap-[9px]">
                            <label for="nama-produk" class="text-sm font-medium">Nama Produk</label>
                            <input type="text" id="nama-produk" name="nama-produk" value="Kantong Plastik Sampah Roll" class="w-full h-7 bg-light border border-gray px-1.5 font-normal text-xs">
                        </div>
                        <div class="flex flex-col gap-[9px]">
                            <label for="jumlah-poin" class="text-sm font-medium">Jumlah Poin</label>
                            <input type="number" id="jumlah-poin" name="jumlah-poin" min="0" value="1000" class="w-full h-7 bg-light border border-gray px-1.5 font-normal text-xs dark:[color-scheme:light]">
                        </div>
                        <div class="flex flex-col gap-[9px]">
                            <label for="stok-produk" class="text-sm font-medium">Stok</label>
                            <input type="number" id="stok-produk" name="stok-produk" min="0" value="20" class="w-full h-7 bg-light border border-gray px-1.5 font-normal text-xs dark:[color-scheme:light]">
                        </div>
                        <div class="flex flex-row-reverse gap-[15px] mt-2 items-end">
                            <button onclick="getElementById('saved').showModal()" class="bg-[#2ECC71] h-auto w-auto px-[14px] py-2 rounded-[10px] text-xs font-semibold text-light">Simpan Perubahan</button>
                    </form>
                            <form method="dialog">
                                <button class="bg-[#95A5A6] h-auto w-auto px-[14px] py-2 rounded-[10px] text-xs font-semibold text-light">Batal</button>
                            </form>
                        </div>
                </div>
            </dialog>

            <dialog id="saved" class="modal">
                <div class="modal-box bg-light w-[593px] h-auto rounded-[20px] gap-10 flex flex-col items-center py-[75px]">
                    <h3 class="text-[32px] font-bold text-center text-dark">Data berhasil disimpan</h3>
                    <img src="../../images/admin/checklist.png" class="w-[100px]" alt="">
                </div>
                <form method="dialog" class="modal-backdrop bg-light bg-opacity-25">
                    <button> </button>
                </form>
            </dialog>

            <dialog id="unactive" class="modal">
                <div class="modal-box bg-light w-auto h-auto rounded-[20px] gap-[17px] flex flex-col items-center py-[42px] px-[83px]">
                    <img src="../../images/admin/delete-alert.png" class="w-[60px]" alt="">
                    <h3 class="text-[20px] font-bold text-center text-dark">Nonaktifkan User</h3>
                    <div class="flex flex-col font-bold text-dark text-xs text-center">
                        <p class="text-center text-xs font-normal text-dark leading-relaxed">Apakah Anda yakin ingin menonaktifkan user ini?</p>
                        <p>ID : 001</p>
                        <p>Nama : Ahmad Sudrajat</p>
                    </div>
                    <div class="mt-10">
                        <form method="dialog" class="flex flex-row-reverse items-end gap-[18px]">
                            <button onclick="getElementById('deleted').showModal()" class="bg-[#EB3223] h-auto w-auto px-[14px] py-2 rounded-[10px] text-xs font-semibold text-light">Nonaktifkan</button>
                            <button class="bg-[#95A5A6] h-auto w-auto px-[14px] py-2 rounded-[10px] text-xs font-semibold text-light">Batal</button>
                        </form>
                    </div>
                </div>                
            </dialog>

            <dialog id="deleted" class="modal">
                <div class="modal-box bg-light w-[531px] h-auto py-24 rounded-[20px] gap-6 flex flex-col items-center align-middle content-center">
                    <h3 class="text-[32px] font-bold text-center text-dark">Data berhasil dihapus</h3>
                    <img src="../../images/admin/checklist.png" class="w-[100px]" alt="">
                </div>
                <form method="dialog" class="modal-backdrop bg-light bg-opacity-25">
                    <button> </button>
                </form>
            </dialog>
        </div>
    </div>
</body>
</html>