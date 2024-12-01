<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../css/styles.css" rel="stylesheet">
  <title>Atur ulang kata sandi | Admin Lestari</title>
</head>
<body>
  <div class="flex justify-center bg-gradient-to-b from-green-admin to-dark-green-admin w-full h-screen p-[34px]">
    <div class="flex flex-col items-center bg-light w-[622px] h-auto rounded-[114px] pb-[75px] pt-6 px-[67px] text-dark gap-[11px] self-center">
      <div class="w-auto flex flex-col items-center">
        <img src="../../images/Logo admin.png" class="w-[314px] h-[169px]" alt="Logo Lestari">
        <h1 class="text-[32px] font-bold self-center text-center">Atur Ulang Kata Sandi</h1>
      </div>
      
      <h3 class="text-[16px] text-[#B3B3B3] font-normal w-full text-center">Masukkan alamat email Anda dan kami akan mengirimkan petunjuk untuk mengatur ulang kata sandi Anda</h3>
      <div class="flex flex-col form-bg w-[488px] h-auto rounded-lg border-2 border-gray p-6 gap-5">
        <form action="./success.php" class="flex flex-col gap-6">
          <label for="email" class="flex flex-col gap-2">
            <span>Alamat email</span>
            <input type="email" id="email" name="email" required class="w-full h-10 rounded-lg py-3 px-4 bg-transparent border-2 border-gray" placeholder="Email">
          </label>
          <button type="submit'" class="bg-[#009951] h-10 rounded-lg text-base font-bold items-center text-light border-2 border-dark">Kirim email</button>
        </form>
        <a href="../login.php" class="bg-[#828282] content-center text-center h-10 rounded-lg text-base font-bold items-center text-light border-2 border-dark">Kembali</a>
      </div>
    </div>
  </div>
</body>
</html>