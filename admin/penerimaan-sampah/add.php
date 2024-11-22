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
                <button class="btn btn-warning h-[42px] px-[27px] text-light rounded-[20px] border border-dark bg-[#F6AC0A] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] font-medium text-xl" onclick="location.href='">
                    Penerimaan Sampah
                </button>
                <button class="btn btn-warning h-[42px] px-[27px] text-light rounded-[20px] border border-dark bg-[#F6AC0A] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] font-medium text-xl" onclick="location.href='.'">
                    Lihat Status Penerimaan Sampah
                </button>
            </div>
            <!-- BUTTONS END -->

            <!-- FORM -->
             <div class="bg-light rounded-[10px] w-[639px] h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col justify-self-center pt-[25px] pb-[50px] mt-[46px] text-dark">
                <div class="flex flex-col gap-[21px] text-center">
                    <h2 class="text-2xl font-bold">Input Data Penerimaan Sampah</h2>
                    <p class="text-sm font-light">Silakan isi data penerimaan sampah dengan lengkap</p>
                </div>
                <form action="" class="flex flex-col text-base font-medium mt-[50px] w-full px-[90px] gap-[31px]">
                    <div class="flex flex-col gap-[5px]">
                        <label for="email" class="px-1">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email user" class="w-full h-12 bg-light border border-gray px-[14px] font-light">
                    </div>
                    <div class="flex flex-col gap-[5px]">
                        <label for="jenis-sampah" class="px-1">Jenis Sampah</label>
                        <select id="jenis-sampah" name="jenis-sampah" class="select select-bordered w-full h-12 bg-light border border-gray px-[14px] text-base font-normal">
                            <option disabled selected>Pilih Jenis Sampah</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-[5px]">
                    <label for="kategori-sampah" class="px-1">Kategori Detail</label>
                        <select id="kategori-sampah" name="kategori-sampah" class="select select-bordered w-full h-12 bg-light border border-gray px-[14px] text-base font-normal">
                            <option disabled selected>Pilih Kategori Detail</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-[5px]">
                        <label for="berat-sampah" class="px-1">Berat Sampah</label>
                        <div class="flex flex-row gap-[9px] items-center w-full justify-between">
                            <input type="number" id="berat-sampah" name="berat-sampah" min="0" placeholder="0" class="w-full h-12 bg-light border border-gray px-[14px] font-light dark:[color-scheme:light]">
                            <span class="text-base font-light justify-self-end">Kg</span>
                        </div>
                    </div>
                    <button class="btn btn-success bg-[#2ECC71] rounded-[20px] text-xl font-extrabold text-light shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border border-gray" onclick="document.getElementById('data_added').showModal()">Kirim Data Penerimaan</button>
                </form>
             </div>
             <!-- DIALOGS -->
             <dialog id="data_added" class="modal">
                <div class="modal-box bg-light w-[593px] h-auto rounded-[20px] gap-10 flex flex-col items-center py-[75px]">
                    <h3 class="text-[32px] font-bold text-center text-dark">Data berhasil disimpan</h3>
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