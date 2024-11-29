<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet">
    <title>Kelola Blog | Admin Lestari</title>
</head>
<body>
    <div class="flex flex-row h-full w-full">
        <!-- SIDEBAR -->
        <div class="bg-gradient-to-t from-green-admin to-dark-green-admin w-[345px] h-auto pb-[200px] text-light">
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
                <button class="btn btn-success bg-transparent border-0 text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../marketplace/'">
                    <img src="../../images/admin/WhatsApp.png" alt="">
                    <p>Marketplace</p>
                </button>
                <button class="btn btn-success bg-green-btn text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../kelola-blog/'">
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
                <h1>Kelola Blog</h1>
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
            <div class="mt-7 h-[34px] flex flex-row justify-between">
                <form action="" class="flex flex-row gap-6 h-full">
                    <input type="text" name="cari-user" id="cari-user" placeholder="Cari User" class="w-[364px] px-1 text-dark text-sm font-light bg-light rounded-[5px] py-1.5 h-full">
                    <select id="status-user" name="status-user" class="w-auto h-full bg-light border border-gray rounded-[5px] text-sm px-3 py-1.5 font-medium text-dark">
                        <option disabled selected>Status</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                    </select>
                    <button class="btn-success bg-[#2E9E5D] rounded-[5px] w-auto h-full px-8 text-base font-semibold text-light shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border border-gray">Cari</button>
                </form>
                <button onclick="location.href='./add.php'" class="bg-[#2980B9] h-10 flex flex-row gap-[18px] content-center w-[279px] pl-[27px] rounded-[5px] items-center self-center border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)]">
                    <img src="../../images/admin/Plus.png" class="h-[30px]" alt="Add">
                    <span class="text-light text-base font-extrabold">Tambah Blog Baru</span>
                </button>
            </div>
            <!-- BUTTONS END -->

            <!-- TABLE -->
             <div class="bg-light rounded-[10px] w-full h-auto shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col py-[35px] px-[25px] mt-[60px] text-dark gap-10">
                <div class="table w-full">
                    <div class="overflow-x-auto">
                        <table class="table border-collapse border border-[#828282] text-center text-dark">
                            <!-- head -->
                            <thead class="bg-[#E5E5E5] text-sm font-bold text-dark">
                            <tr class="border border-[#828282]">
                                <th class="border border-[#828282]">Judul</th>
                                <th class="border border-[#828282]">Kategori</th>
                                <th class="border border-[#828282]">Tanggal</th>
                                <th class="border border-[#828282]">Status</th>
                                <th class="border border-[#828282]">Aksi</th>
                            </tr>
                            </thead>
                            <tbody class="font-medium">
                            <!-- row 1 -->
                            <tr>
                                <td class="border border-[#828282]">5 Cara Kreatif Mengolah Sampah Plastik</td>
                                <td class="border border-[#828282]">Tips Daur Ulang</td>
                                <td class="border border-[#828282]">15 Nov 2024</td>
                                <td class="border border-[#828282]">Publikasi</td>
                                <td class="border border-[#828282]">
                                    <div class="grid grid-cols-2 gap-[18px]">
                                        <button class="bg-[#FFC107] rounded-[10px] border border-gray w-auto h-auto text-xs px-3 py-1.5 text-light font-medium text-center" onclick="getElementById('edit').showModal()">
                                            Edit
                                        </button>
                                        <button class="bg-[#C0392B] rounded-[10px] border border-gray w-auto h-auto text-xs px-3 py-1.5 text-light font-medium text-center" onclick="getElementById('unactive').showModal()">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- TABLE END -->
                <button class="rounded-[5px] border border-gray py-1.5 w-[90px] self-end h-auto text-sm font-medium text-dark">See All</button>
                 <!-- BIKIN SEE ALL -->
            </div>

            <!-- dialogs -->
            <dialog id="edit" class="modal">
                <div class="modal-box bg-light min-w-[608px] h-auto rounded-[20px] gap-[18px] flex flex-col px-10 py-7">
                    <h3 class="text-2xl font-bold text-dark">Edit Produk</h3>
                    <form class="flex flex-col gap-[18px] w-full text-dark">
                        <div class="flex flex-col gap-[9px]">
                            <label for="nama-produk" class="text-sm font-semibold">Judul Blog</label>
                            <input type="text" id="nama-produk" name="nama-produk" value="5 Cara Kreatif Mengolah Sampah Plastik" class="w-full h-7 bg-light border border-gray px-1.5 font-normal text-xs">
                        </div>
                        <div class="flex flex-col gap-[9px]">
                            <label for="jumlah-poin" class="text-sm font-semibold">Kategori</label>
                            <input type="text" id="jumlah-poin" name="jumlah-poin" value="Tips Daur Ulang" class="w-full h-7 bg-light border border-gray px-1.5 font-normal text-xs dark:[color-scheme:light]">
                        </div>
                        <div class="flex flex-col gap-[10px] w-full">
                            <label for="thumbnail" class="text-sm font-semibold">Thumbnail Blog</label>
                            <div class="w-full min-h-[120px] bg-light border-dashed border-2 border-gray py-3 font-light flex items-center justify-center">
                                <input type="file" name="myImage" accept="image/*" class="file-input file-input-ghost dark:[color-scheme:light]">
                            </div>
                        </div>
                        <div class="flex flex-col gap-[10px] w-full">
                            <label for="judul-video" class="text-sm font-semibold">Konten Blog</label>
                            <textarea type="text" id="judul-video" name="judul-video" placeholder="Tulis Konten Blog di sini..." class="w-full min-h-[100px] bg-light border border-gray px-3 py-3 font-light text-[12px] shadow-[0px_4px_4px_rgba(0,0,0,0.25)]"></textarea>
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
                    <h3 class="text-[20px] font-bold text-center text-dark">Hapus Blog</h3>
                    <div class="flex flex-col font-bold text-dark text-xs text-center">
                        <p class="text-center text-xs font-normal text-dark leading-relaxed">Apakah Anda yakin ingin Menghapus blog ini?</p>
                    </div>
                    <div class="mt-10">
                        <form method="dialog" class="flex flex-row-reverse items-end gap-[18px]">
                            <button onclick="getElementById('deleted').showModal()" class="bg-[#EB3223] h-auto w-auto px-[14px] py-2 rounded-[10px] text-xs font-semibold text-light">Ya, Hapus</button>
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