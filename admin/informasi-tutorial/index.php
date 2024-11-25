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
                <button class="btn btn-success bg-transparent border-0 text-light font-bold justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href=''">
                    <img src="../../images/admin/Truck.png" alt="">
                    <p class="text-lg">Penerimaan Sampah</p>
                </button>
                <button class="btn btn-success bg-green-btn text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]">
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
                <h1>informasi Tutorial</h1>
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

            <!-- ADD -->
            <button class="bg-[#2980B9] h-10 flex flex-row gap-[18px] content-center mt-[42px] w-[279px] pl-[27px] rounded-[5px] items-center border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)]">
                <img src="../../images/admin/Plus.png" class="h-[30px]" alt="Add">
                <span class="text-light text-base font-extrabold">Upload Video baru</span>
            </button>
            <!-- BIKIN ADD -->
            
            <!-- BUTTONS -->
            <div class="flex flex-row gap-[22px] mt-[31px] h-8">
                <button class="btn-active btn-accent h-[32px] px-4 text-light font-semibold rounded-[10px] border border-gray bg-[#2ECC71] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] text-base" onclick="location.href='./'">
                    Semua
                </button>
                <button class="btn-warning h-full px-5 text-light font-semibold rounded-[10px] border border-gray bg-[#F6AC0A] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] text-base" onclick="location.href='./'">
                    Kertas
                </button>
                <button class="btn-warning h-full px-5 text-light font-semibold rounded-[10px] border border-gray bg-[#F6AC0A] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] text-base" onclick="location.href='./'">
                    Plastik
                </button>
                <button class="btn-warning h-full px-5 text-light font-semibold rounded-[10px] border border-gray bg-[#F6AC0A] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] text-base" onclick="location.href='./'">
                    Alumunium
                </button>
            </div>
            <!-- BUTTONS END -->

            <!-- GRID -->
            <div class="bg-light w-full h-auto p-10 mt-7 border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] grid-cols-3 grid gap-7 rounded-[10px]">
                <!-- CARDS -->
                <div class=" bg-light w-auto h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] px-1.5 pb-[15px]">
                    <figure class="pt-[7px]">
                        <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes"
                        class="rounded-[15px]" />
                    </figure>
                    <div class="mt-[31px] gap-[9px] flex flex-col">
                        <h2 class="text-dark text-[15px] font-extrabold">Cara Mendaur Ulang Plastik</h2>
                        <p class="text-xs text-dark font-normal max-w-[238px]">Tips dan trik mendaur ulang sampah plastik menjadi barang bernilai...</p>
                    </div>
                    <div class="mt-[50px] h-5 flex flex-row justify-between align-middle">
                        <button class="bg-[#2ECC71] h-full w-[72px] rounded-[10px] text-[10px] font-semibold text-light">Edit</button>
                        <button class="bg-[#C0392B] h-full w-[72px] rounded-[10px] text-[10px] font-semibold text-light">Hapus</button>
                    </div>
                </div>
                <!-- CARDS 2 -->
                <div class=" bg-light w-auto h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] px-1.5 pb-[15px]">
                    <figure class="pt-[7px]">
                        <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes"
                        class="rounded-[15px]" />
                    </figure>
                    <div class="mt-[31px] gap-[9px] flex flex-col">
                        <h2 class="text-dark text-[15px] font-extrabold">Cara Mendaur Ulang Plastik</h2>
                        <p class="text-xs text-dark font-normal max-w-[238px]">Tips dan trik mendaur ulang sampah plastik menjadi barang bernilai...</p>
                    </div>
                    <div class="mt-[50px] h-5 flex flex-row justify-between align-middle">
                        <button class="bg-[#2ECC71] h-full w-[72px] rounded-[10px] text-[10px] font-semibold text-light">Edit</button>
                        <button class="bg-[#C0392B] h-full w-[72px] rounded-[10px] text-[10px] font-semibold text-light">Hapus</button>
                    </div>
                </div>
                <!-- CARDS 2 -->
                <div class=" bg-light w-auto h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] px-1.5 pb-[15px]">
                    <figure class="pt-[7px]">
                        <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes"
                        class="rounded-[15px]" />
                    </figure>
                    <div class="mt-[31px] gap-[9px] flex flex-col">
                        <h2 class="text-dark text-[15px] font-extrabold">Cara Mendaur Ulang Plastik</h2>
                        <p class="text-xs text-dark font-normal max-w-[238px]">Tips dan trik mendaur ulang sampah plastik menjadi barang bernilai...</p>
                    </div>
                    <div class="mt-[50px] h-5 flex flex-row justify-between align-middle">
                        <button class="bg-[#2ECC71] h-full w-[72px] rounded-[10px] text-[10px] font-semibold text-light">Edit</button>
                        <button class="bg-[#C0392B] h-full w-[72px] rounded-[10px] text-[10px] font-semibold text-light">Hapus</button>
                    </div>
                </div>
                <!-- CARDS 2 -->
                <div class=" bg-light w-auto h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] px-1.5 pb-[15px]">
                    <figure class="pt-[7px]">
                        <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes"
                        class="rounded-[15px]" />
                    </figure>
                    <div class="mt-[31px] gap-[9px] flex flex-col">
                        <h2 class="text-dark text-[15px] font-extrabold">Cara Mendaur Ulang Plastik</h2>
                        <p class="text-xs text-dark font-normal max-w-[238px]">Tips dan trik mendaur ulang sampah plastik menjadi barang bernilai...</p>
                    </div>
                    <div class="mt-[50px] h-5 flex flex-row justify-between align-middle">
                        <button class="bg-[#2ECC71] h-full w-[72px] rounded-[10px] text-[10px] font-semibold text-light">Edit</button>
                        <button class="bg-[#C0392B] h-full w-[72px] rounded-[10px] text-[10px] font-semibold text-light">Hapus</button>
                    </div>
                </div>
                <!-- CARDS 2 -->
                <div class=" bg-light w-auto h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] px-1.5 pb-[15px]">
                    <figure class="pt-[7px]">
                        <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes"
                        class="rounded-[15px]" />
                    </figure>
                    <div class="mt-[31px] gap-[9px] flex flex-col">
                        <h2 class="text-dark text-[15px] font-extrabold">Cara Mendaur Ulang Plastik</h2>
                        <p class="text-xs text-dark font-normal max-w-[238px]">Tips dan trik mendaur ulang sampah plastik menjadi barang bernilai...</p>
                    </div>
                    <div class="mt-[50px] h-5 flex flex-row justify-between align-middle">
                        <button class="bg-[#2ECC71] h-full w-[72px] rounded-[10px] text-[10px] font-semibold text-light">Edit</button>
                        <button class="bg-[#C0392B] h-full w-[72px] rounded-[10px] text-[10px] font-semibold text-light">Hapus</button>
                    </div>
                </div>
                <!-- CARDS 2 -->
                <div class=" bg-light w-auto h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] px-1.5 pb-[15px]">
                    <figure class="pt-[7px]">
                        <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes"
                        class="rounded-[15px]" />
                    </figure>
                    <div class="mt-[31px] gap-[9px] flex flex-col">
                        <h2 class="text-dark text-[15px] font-extrabold">Cara Mendaur Ulang Plastik</h2>
                        <p class="text-xs text-dark font-normal max-w-[238px]">Tips dan trik mendaur ulang sampah plastik menjadi barang bernilai...</p>
                    </div>
                    <div class="mt-[50px] h-5 flex flex-row justify-between align-middle">
                        <button class="bg-[#2ECC71] h-full w-[72px] rounded-[10px] text-[10px] font-semibold text-light">Edit</button>
                        <button class="bg-[#C0392B] h-full w-[72px] rounded-[10px] text-[10px] font-semibold text-light">Hapus</button>
                    </div>
                </div>
                <!-- CARDS 2 -->
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