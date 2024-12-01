<?php
session_start();
// Sertakan konfigurasi database
require_once('../../controller/config.php');

// Cek apakah admin sudah login
if (!isset($_SESSION['admin_id'])) {
    $_SESSION['login_message'] = "Not authorized";
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet">
    <title>Statistik & Laporan | Admin Lestari</title>
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
                <button class="btn btn-success bg-green-btn text-light font-bold text-xl justify-start pl-[9px] w-[271px] h-[59px] flex flex-row gap-[13px]" onclick="location.href='../statistik-laporan/'">
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
        <div class="bg-light-bg-content w-full h-auto px-5 pt-5 pb-12">
            <!-- HEADER -->
            <div class="flex flex-row justify-between bg-gradient-to-r from-[#1E5E3F] to-[#3FC483] w-full h-[88px] px-[23px] rounded-[20px] text-light font-extrabold text-[32px] items-center">
                <h1>Statistik & Laporan</h1>
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

            <div class="mt-[34px] h-[34px]">
                <form action="" class="flex flex-row h-full gap-4">
                    <select id="status-sampah" name="status-sampah" class="w-auto h-full bg-light border border-gray rounded-[5px] text-sm px-5 font-medium text-dark">
                        <option disabled selected>Semua Status</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                    </select>
                    <select id="jenis-sampah" name="jenis-sampah" class="w-auto h-full bg-light border border-gray rounded-[5px] text-sm px-4 font-medium text-dark">
                        <option disabled selected>Semua Jenis Sampah</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                    </select>
                    <button class="btn-success bg-[#2E9E5D] rounded-[5px] w-auto h-full px-8 text-base font-semibold text-light shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border border-gray">Filter</button>
                </form>
            </div>
            
            <!-- DASHBOARD CARD -->
            <div class="h-[156px] w-full mt-[63px] grid grid-cols-4 gap-7">
                <div class="bg-[#fff] rounded-[20px] border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col h-full text-dark gap-[30px] text-center justify-center">
                    <h3 class="text-[32px] font-medium text-[#249AEF]">2,450</h3>
                    <p class="text-xs font-light">Total sampah Terdaur Ulang (Kg)</p>
                </div>
                <div class="bg-[#fff] rounded-[20px] border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col h-full text-dark gap-[30px] text-center justify-center">
                    <h3 class="text-[32px] font-medium text-[#249AEF]">85%</h3>
                    <p class="text-xs font-light">Tingkat Keberhasilan Daur Ulang</p>
                </div>
                <div class="bg-[#fff] rounded-[20px] border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col h-full text-dark gap-[30px] text-center justify-center">
                    <h3 class="text-[32px] font-medium text-[#249AEF]">1,230</h3>
                    <p class="text-xs font-light">Partisipan Aktif</p>
                </div>
                <div class="bg-[#fff] rounded-[20px] border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col h-full text-dark gap-[30px] text-center justify-center">
                    <h3 class="text-[32px] font-medium text-[#249AEF]">320</h3>
                    <p class="text-xs font-light">Program Berjalan</p>
                </div>
            </div>
            <!-- DASHBOARD CARD END -->

            <!-- CHARTS -->
            <div class="w-full grid grid-cols-2 gap-7 mt-8 text-dark">
                <!-- graph chart -->
                <div class="bg-light rounded-[20px] p-6 w-full border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)]">
                    <h3 class="font-semibold text-[20px]">Tren Daur Ulang Bulanan (Kg)</h3>

                    <!-- component -->
                    <div class="mt-6">
                        <canvas id="myChart" width="auto" height="auto" role="img" aria-label="line graph to show selling overview in terms of months and numbers" ></canvas>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                    <script>
                        const chart = new Chart(document.getElementById("myChart"), {
                        type: "line",
                        data: {
                            labels: [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July",
                            "Aug",
                            "Sep",
                            "Nov",
                            "Dec"
                            ],
                            datasets: [
                            {
                                label: "16 Mar 2018",
                                borderColor: "#249AEF",
                                data: [600, 400, 620, 300, 200, 600, 230, 300, 200, 200, 100, 1200],
                                fill: false,
                                pointBackgroundColor: "#4A5568",
                                borderWidth: "3",
                                pointBorderWidth: "4",
                                pointHoverRadius: "6",
                                pointHoverBorderWidth: "8",
                                pointHoverBorderColor: "rgb(74,85,104,0.2)"
                            }
                            ]
                        },
                        options: {
                            legend: {
                                position: false
                            },
                            scales: {
                            yAxes: [
                                {
                                    gridLines: {
                                        display: false
                                    },
                                    display: false
                                }
                            ]
                            }
                        }
                        });
                        </script>
                </div>
                <!-- Doughnut CHART -->
                <div class="bg-light rounded-[20px] p-6 w-full border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)]">
                    <h3 class="font-semibold text-[20px] mb-1">Distribusi Jenis Sampah</h3>

                    
                    <div class="place-self-center w-auto px-[115px] overflow-hidden">
                        <canvas class="p-2" id="chartDoughnut"></canvas>
                        </div>

                        <!-- Required chart.js -->
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                        <!-- Chart doughnut -->
                        <script>
                        const dataDoughnut = {
                            labels: ["Plastik", "Kertas", "Logam", "Elektronik", "Organik"],
                            datasets: [
                            {
                                label: "My First Dataset",
                                data: [300, 50, 100, 200, 150],
                                backgroundColor: [
                                "rgb(0, 150, 255)",
                                "rgb(0, 128, 0)",
                                "rgb(255, 0, 0)",
                                "rgb(255, 165, 0)",
                                "rgb(128, 0, 128)",
                                ],
                                hoverOffset: 4,
                            },
                            ],
                        };

                        const configDoughnut = {
                            type: "doughnut",
                            data: dataDoughnut,
                            options: {},
                        };

                        var chartBar = new Chart(
                            document.getElementById("chartDoughnut"),
                            configDoughnut
                        );
                    </script>
                </div>
            </div>
            <!-- CHARTS END -->
            
            <!-- LAPORAN PROGRAM -->
            <div class="bg-light w-full p-6 rounded-[20px] mt-[30px] border border-gray shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] flex flex-col text-dark gap-[30px]">
                <h3 class="font-semibold text-[20px] mb-1">Laporan Program Daur Ulang Terkini</h3>
                <table class="table border-collapse border border-[#828282] text-center">
                            <!-- head -->
                            <thead class="bg-[#E5E5E5] text-dark text-sm font-bold">
                            <tr class="border border-[#828282]">
                                <th class="border border-[#828282]">Nama Program</th>
                                <th class="border border-[#828282]">Kategori</th>
                                <th class="border border-[#828282]">Persentase</th>
                                <th class="border border-[#828282]">Status</th>
                                <th class="border border-[#828282]">Total Sampah (Kg)</th>
                            </tr>
                            </thead>
                            <tbody class="font-medium">
                            <!-- row 1 -->
                            <tr>
                                <td class="border border-[#828282]">Daur Ulang Plastik</td>
                                <td class="border border-[#828282]">Plastik</td>
                                <td class="border border-[#828282]">90%</td>
                                <td class="border border-[#828282]">
                                    <p class="bg-[#2ECC71] rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center p-0.5">
                                        Aktif
                                    </p>
                                </td>
                                <td class="border border-[#828282] text-center">450</td>
                            </tr>
                            <!-- row 1 -->
                            <tr>
                                <td class="border border-[#828282]">Daur Ulang Plastik</td>
                                <td class="border border-[#828282]">Plastik</td>
                                <td class="border border-[#828282]">90%</td>
                                <td class="border border-[#828282]">
                                    <p class="bg-[#2ECC71] rounded-[10px] border border-gray w-auto h-auto text-sm font-medium text-center p-0.5">
                                        Aktif
                                    </p>
                                </td>
                                <td class="border border-[#828282] text-center">450</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>