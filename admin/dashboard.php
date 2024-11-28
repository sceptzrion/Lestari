<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet">
    <title>Dashboard | Admin Lestari</title>
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
                <button class="btn btn-success bg-green-btn text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
                    <img src="../images/admin/Home.png" alt="">
                    <p>Dashboard</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='./penerimaan-sampah/'">
                    <img src="../images/admin/Truck.png" alt="">
                    <p class="text-lg">Penerimaan Sampah</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
                    <img src="../images/admin/Recycling.png" alt="">
                    <p>Informasi Tutorial</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
                    <img src="../images/admin/Graph.png" alt="">
                    <p>Statistik & Laporan</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
                    <img src="../images/admin/Management.png" alt="">
                    <p>Manajemen User</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
                    <img src="../images/admin/WhatsApp.png" alt="">
                    <p>Marketplace</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
                    <img src="../images/admin/Blog.png" alt="">
                    <p>Kelola Blog</p>
                </button>
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
                    <img src="../images/admin/Settings.png" alt="">
                    <p>Pengaturan</p>
                </button>
            </div>
        </div> 
        <!-- SIDEBAR END -->

        <!-- CONTENT -->
        <div class="bg-light-bg-content w-full h-[1024px] px-5 pt-5">
            <!-- HEADER -->
            <div class="flex flex-row justify-between bg-gradient-to-r from-[#1E5E3F] to-[#3FC483] w-full h-[88px] px-[23px] rounded-[20px] text-light font-extrabold text-[32px] items-center">
                <h1>Dashboard</h1>
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
                            <img src="../images/admin/Profile.png" class="w-[30px]" alt="Profile">
                            <p class="text-xl font-normal">Profile</p>
                        </a></li>
                        <li><a class="flex flex-row gap-[10px]">
                            <img src="../images/admin/Settings-profile.png" class="w-[30px]" alt="Settings">
                            <p class="text-xl font-normal">Pengaturan</p>
                        </a></li>
                        <hr class="h-[2px] w-full text-gray my-6">
                        <li><a class="flex flex-row gap-[10px]">
                            <img src="../images/admin/sign-out.png" class="w-[30px]" alt="Sign Out">
                            <p class="text-xl font-normal">Sign Out</p>
                        </a></li>
                    </ul>
                </div>
            </div>
            <!-- HEADER END -->
            
            <!-- DASHBOARD CARD -->
            <div class="h-auto w-full mt-[63px] grid grid-cols-4 gap-7">
                <div class="bg-gradient-to-b from-[#F6AC0A] to-[#906506] rounded-[20px] border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col pl-[23px] pt-[33px] pb-[49px] h-full text-dark gap-[11px]">
                    <h4 class="text-xs font-bold">Total Sampah Diterima</h4>
                    <div class="flex flex-col">
                        <h2 class="text-xl font-normal  ">2,547 Kg</h2>
                        <p class="text-[10px] font-light">Bulan ini</p>
                    </div>
                </div>
                <div class="bg-gradient-to-b from-[#08FCF0] to-[#05968F] rounded-[20px] border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col pl-[23px] pt-[33px] pb-[49px] h-full text-dark gap-[11px]">
                    <h4 class="text-xs font-bold">Pengantaran Aktif </h4>
                    <div class="flex flex-col">
                        <h2 class="text-xl font-normal  ">2</h2>
                        <p class="text-[10px] font-light">Menunggu Verifikasi</p>
                    </div>
                </div>
                <div class="bg-gradient-to-b from-[#0AF649] to-[#06902B] rounded-[20px] border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col pl-[23px] pt-[33px] pb-[49px] h-full text-dark gap-[11px]">
                    <h4 class="text-xs font-bold">Total User Aktif</h4>
                    <div class="flex flex-col">
                        <h2 class="text-xl font-normal  ">500</h2>
                        <p class="text-[10px] font-light">+12  % dari bulan lalu</p>
                    </div>
                </div>
                <div class="bg-gradient-to-b from-[#ECF310] to-[#898D09] rounded-[20px] border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col pl-[23px] pt-[33px] pb-[49px] h-full text-dark gap-[11px]">
                    <h4 class="text-xs font-bold">Total Poin Diberikan</h4>
                    <div class="flex flex-col">
                        <h2 class="text-xl font-normal  ">45,678</h2>
                        <p class="text-[10px] font-light">Bulan ini</p>
                    </div>
                </div>
            </div>
            <!-- DASHBOARD CARD END -->

            <!-- RECENT ACTIVITY -->
             <div class="bg-light w-full h-auto rounded-[10px] px-[26px] py-9 mt-[54px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] text-dark flex flex-col gap-[22px]">
                <h2 class="text-2xl font-bold">Aktivitas Terbaru</h2>
                <div class="flex flex-row justify-between pl-[7px] pr-[45px] w-full h-[62px] rounded-[10px] bg-light border border-gray">
                    <div class="flex flex-col">
                        <h4 class="text-xl font-normal">Ahmad Sudrajat</h4>
                        <p class="text-xs font-light">Mengantarkan 5 Kg Sampah Plastik</p>
                    </div>
                    <div class="bg-[#FFDE75] w-[159px] h-[27px] rounded-[10px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border border-gray self-center text-center content-center">
                        <p class="text-xs font-light">Menunggu Verifikasi</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between pl-[7px] pr-[45px] w-full h-[62px] rounded-[10px] bg-light border border-gray">
                    <div class="flex flex-col">
                        <h4 class="text-xl font-normal">Cut Nyak Gem</h4>
                        <p class="text-xs font-light">Mengantarkan 3 Kg Sampah Kertas</p>
                    </div>
                    <div class="bg-[#FFDE75] w-[159px] h-[27px] rounded-[10px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border border-gray self-center text-center content-center">
                        <p class="text-xs font-light">Menunggu Verifikasi</p>
                    </div>
                </div><div class="flex flex-row justify-between pl-[7px] pr-[45px] w-full h-[62px] rounded-[10px] bg-light border border-gray">
                    <div class="flex flex-col">
                        <h4 class="text-xl font-normal">Budi Santoso</h4>
                        <p class="text-xs font-light">Mengantarkan 7 Kg Sampah Plastik</p>
                    </div>
                    <div class="bg-[#2ECC71] w-[159px] h-[27px] rounded-[10px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border border-gray self-center text-center content-center">
                        <p class="text-xs font-light">Selesai</p>
                    </div>
                </div><div class="flex flex-row justify-between pl-[7px] pr-[45px] w-full h-[62px] rounded-[10px] bg-light border border-gray">
                    <div class="flex flex-col">
                        <h4 class="text-xl font-normal">Dewi Kartika</h4>
                        <p class="text-xs font-light">Mengantarkan 4 Kg Sampah Plastik</p>
                    </div>
                    <div class="bg-[#2ECC71] w-[159px] h-[27px] rounded-[10px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border border-gray self-center text-center content-center">
                        <p class="text-xs font-light">Selesai</p>
                    </div>
                </div>
             </div>
             <!-- RECENT ACTIVITY END -->
        </div>
    </div>
</body>
</html>