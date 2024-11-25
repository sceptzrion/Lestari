<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet">
    <title>Penerimaan Sampah | Admin Lestari</title>
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
                <button class="btn btn-success bg-green-btn text-light font-bold justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href=''">
                    <img src="../../images/admin/Truck.png" alt="">
                    <p class="text-lg">Penerimaan Sampah</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
                    <img src="../../images/admin/Recycling.png" alt="">
                    <p>Informasi Tutorial</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
                    <img src="../../images/admin/Graph.png" alt="">
                    <p>Statistik & Laporan</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
                    <img src="../../images/admin/Management.png" alt="">
                    <p>Manajemen User</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
                    <img src="../../images/admin/WhatsApp.png" alt="">
                    <p>Marketplace</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
                    <img src="../../images/admin/Blog.png" alt="">
                    <p>Kelola Blog</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
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
                        <li><a class="flex flex-row gap-[10px] mb-[15px]">
                            <img src="../../images/admin/Profile.png" class="w-[30px]" alt="Profile">
                            <p class="text-xl font-normal">Profile</p>
                        </a></li>
                        <li><a class="flex flex-row gap-[10px]">
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
            <div class="flex flex-row gap-[22px] mt-[31px] ">
                <button class="btn btn-warning h-[42px] px-[27px] text-light rounded-[20px] border border-dark bg-[#F6AC0A] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] font-medium text-xl" onclick="location.href='./'">
                    Lihat Status Penerimaan Sampah
                </button>
                <button class="btn btn-warning h-[42px] px-[27px] text-light rounded-[20px] border border-dark bg-[#F6AC0A] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] font-medium text-xl" onclick="location.href='./add.php'">
                    Penerimaan Sampah
                </button>
            </div>
            <!-- BUTTONS END -->

            <!-- FORM -->
             <div class="bg-light rounded-[10px] w-full h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col py-[35px] px-[41px] mt-[46px] text-dark">
                <h2 class="text-2xl font-bold text-center">Status Penerimaan Sampah</h2>
                <form action="" class="flex flex-row text-base font-medium mt-[21px] w-full gap-[20px] content-start">
                    <select id="jenis-sampah" name="jenis-sampah" class="w-[223px] h-auto bg-light border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[5px] px-[9px] text-base font-medium">
                        <option disabled selected>Semua Status</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                    </select>
                    <select id="jenis-sampah" name="jenis-sampah" class="w-[223px] h-auto bg-light border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] px-[9px] text-base font-medium">
                        <option disabled selected>Semua Jenis Sampah</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                    </select>
                    <input type="date" id="date" name="date" class="w-[223px] h-auto bg-light text-dark dark:[color-scheme:light] border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] px-[9px] text-base font-medium">
                    <button class="btn btn-success bg-[#2E9E5D] rounded-[5px] w-[101px] h-[34px] text-base font-semibold text-light shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border border-gray">Filter</button>
                </form>
                <div class="table mt-10">
                    <div class="overflow-x-auto">
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
                            <!-- row 1 -->
                            <tr>
                                <td class="border border-[#828282]">001</td>
                                <td class="border border-[#828282]">10-11-2024</td>
                                <td class="border border-[#828282]">Ahmad Sudrajat</td>
                                <td class="border border-[#828282]">Plastik</td>
                                <td class="border border-[#828282] text-center">5 Kg</td>
                                <td class="border border-[#828282]">
                                    <p class="bg-[#FFDE75] rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center p-0.5">
                                        Menunggu
                                    </p>
                                </td>
                                <td class="border border-[#828282]">50</td>
                                <td class="border border-[#828282]">
                                    <div class="flex flex-row gap-[18px] justify-center items-center">
                                        <button onclick="document.getElementById('verified').showModal()" class="bg-[#2ECC71] w-[72px] h-[25px] rounded-[10px] text-light text-[10px] font-semibold text-center">Verifikasi</button>
                                        <button onclick="document.getElementById('denied').showModal()" class="bg-[#C0392B] w-[72px] h-[25px] rounded-[10px] text-light text-[10px] font-semibold text-center">Tolak</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="border border-[#828282]">001</td>
                                <td class="border border-[#828282]">10-11-2024</td>
                                <td class="border border-[#828282]">Ahmad Sudrajat</td>
                                <td class="border border-[#828282]">Plastik</td>
                                <td class="border border-[#828282] text-center">5 Kg</td>
                                <td class="border border-[#828282]">
                                    <p class="bg-[#FFDE75] rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center p-0.5">
                                        Menunggu
                                    </p>
                                </td>
                                <td class="border border-[#828282]">50</td>
                                <td class="border border-[#828282]">
                                    <div class="flex flex-row gap-[18px] justify-center items-center">
                                        <button onclick="document.getElementById('verified').showModal()" class="bg-[#2ECC71] w-[72px] h-[25px] rounded-[10px] text-light text-[10px] font-semibold text-center">Verifikasi</button>
                                        <button onclick="document.getElementById('denied').showModal()" class="bg-[#C0392B] w-[72px] h-[25px] rounded-[10px] text-light text-[10px] font-semibold text-center">Tolak</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td class="border border-[#828282]">001</td>
                                <td class="border border-[#828282]">10-11-2024</td>
                                <td class="border border-[#828282]">Ahmad Sudrajat</td>
                                <td class="border border-[#828282]">Plastik</td>
                                <td class="border border-[#828282] text-center">5 Kg</td>
                                <td class="border border-[#828282]">
                                    <p class="bg-[#FFDE75] rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center p-0.5">
                                        Menunggu
                                    </p>
                                </td>
                                <td class="border border-[#828282]">50</td>
                                <td class="border border-[#828282]">
                                    <div class="flex flex-row gap-[18px] justify-center items-center">
                                        <button onclick="document.getElementById('verified').showModal()" class="bg-[#2ECC71] w-[72px] h-[25px] rounded-[10px] text-light text-[10px] font-semibold text-center">Verifikasi</button>
                                        <button onclick="document.getElementById('denied').showModal()" class="bg-[#C0392B] w-[72px] h-[25px] rounded-[10px] text-light text-[10px] font-semibold text-center">Tolak</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td class="border border-[#828282]">001</td>
                                <td class="border border-[#828282]">10-11-2024</td>
                                <td class="border border-[#828282]">Ahmad Sudrajat</td>
                                <td class="border border-[#828282]">Plastik</td>
                                <td class="border border-[#828282] text-center">5 Kg</td>
                                <td class="border border-[#828282]">
                                    <p class="bg-[#FFDE75] rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center p-0.5">
                                        Menunggu
                                    </p>
                                </td>
                                <td class="border border-[#828282]">50</td>
                                <td class="border border-[#828282]">
                                    <div class="flex flex-row gap-[18px] justify-center items-center">
                                        <button onclick="document.getElementById('verified').showModal()" class="bg-[#2ECC71] w-[72px] h-[25px] rounded-[10px] text-light text-[10px] font-semibold text-center">Verifikasi</button>
                                        <button onclick="document.getElementById('denied').showModal()" class="bg-[#C0392B] w-[72px] h-[25px] rounded-[10px] text-light text-[10px] font-semibold text-center">Tolak</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- row 5 -->
                            <tr>
                                <td class="border border-[#828282]">001</td>
                                <td class="border border-[#828282]">10-11-2024</td>
                                <td class="border border-[#828282]">Ahmad Sudrajat</td>
                                <td class="border border-[#828282]">Plastik</td>
                                <td class="border border-[#828282] text-center">5 Kg</td>
                                <td class="border border-[#828282]">
                                    <p class="bg-[#299E63] text-light rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center p-0.5">
                                        Selesai
                                    </p>
                                </td>
                                <td class="border border-[#828282]">50</td>
                                <td class="border border-[#828282]">-</td>
                            </tr>
                            <!-- row 6 -->
                            <tr>
                                <td class="border border-[#828282]">001</td>
                                <td class="border border-[#828282]">10-11-2024</td>
                                <td class="border border-[#828282]">Ahmad Sudrajat</td>
                                <td class="border border-[#828282]">Plastik</td>
                                <td class="border border-[#828282] text-center">5 Kg</td>
                                <td class="border border-[#828282]">
                                    <p class="bg-[#299E63] text-light rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center p-0.5">
                                        Selesai
                                    </p>
                                </td>
                                <td class="border border-[#828282]">50</td>
                                <td class="border border-[#828282]">-</td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td class="border border-[#828282]">001</td>
                                <td class="border border-[#828282]">10-11-2024</td>
                                <td class="border border-[#828282]">Ahmad Sudrajat</td>
                                <td class="border border-[#828282]">Plastik</td>
                                <td class="border border-[#828282] text-center">5 Kg</td>
                                <td class="border border-[#828282]">
                                    <p class="bg-[#299E63] text-light rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center p-0.5">
                                        Selesai
                                    </p>
                                </td>
                                <td class="border border-[#828282]">50</td>
                                <td class="border border-[#828282]">-</td>
                            </tr>
                            <!-- row 8 -->
                            <tr>
                                <td class="border border-[#828282]">001</td>
                                <td class="border border-[#828282]">10-11-2024</td>
                                <td class="border border-[#828282]">Ahmad Sudrajat</td>
                                <td class="border border-[#828282]">Plastik</td>
                                <td class="border border-[#828282] text-center">5 Kg</td>
                                <td class="border border-[#828282]">
                                    <p class="bg-[#299E63] text-light rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center p-0.5">
                                        Selesai
                                    </p>
                                </td>
                                <td class="border border-[#828282]">50</td>
                                <td class="border border-[#828282]">-</td>
                            </tr>
                            <!-- row 9 -->
                            <tr>
                                <td class="border border-[#828282]">001</td>
                                <td class="border border-[#828282]">10-11-2024</td>
                                <td class="border border-[#828282]">Ahmad Sudrajat</td>
                                <td class="border border-[#828282]">Plastik</td>
                                <td class="border border-[#828282] text-center">5 Kg</td>
                                <td class="border border-[#828282]">
                                    <p class="bg-[#299E63] text-light rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center p-0.5">
                                        Selesai
                                    </p>
                                </td>
                                <td class="border border-[#828282]">50</td>
                                <td class="border border-[#828282]">-</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
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